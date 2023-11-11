<?php
    class clienteModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$direccion,$cp,$ciudad,$email,$telefono,$apellidos){
            $stament = $this->PDO->prepare("INSERT INTO tbl_cliente VALUES(null,:nombre, :direccion,:cp,:ciudad,:email,:telefono,:apellidos)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":cp",$cp);
            $stament->bindParam(":ciudad",$ciudad);
            $stament->bindParam(":email",$email);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":apellidos",$apellidos);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_cliente where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_cliente");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre,$direccion,$cp,$ciudad,$email,$telefono,$apellidos){
            $stament = $this->PDO->prepare("UPDATE tbl_cliente SET nombre = :nombre, direccion = :direccion, cp = :cp, ciudad = :ciudad,email = :email, telefono = :telefono,apellidos = :apellidos  WHERE id = :id");
            $stament->bindParam(":apellidos",$apellidos);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":email",$email);
            $stament->bindParam(":ciudad",$ciudad);
            $stament->bindParam(":cp",$cp);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_cliente WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>