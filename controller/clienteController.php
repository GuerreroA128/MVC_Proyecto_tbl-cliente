<?php
    class clienteController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/clienteModel.php");
            $this->model = new clienteModel();
        }
        public function guardar($nombre,$direccion,$cp,$ciudad,$email,$telefono,$apellidos){
            $id = $this->model->insertar($nombre,$direccion,$cp,$ciudad,$email,$telefono,$apellidos);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre, $direccion, $cp, $ciudad, $email, $telefono, $apellidos){
            return ($this->model->update($id,$nombre,$direccion,$cp,$ciudad,$email,$telefono,$apellidos) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>