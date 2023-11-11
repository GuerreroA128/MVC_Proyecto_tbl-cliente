<?php
    require_once("c://xampp/htdocs/proyecto/controller/clienteController.php");
    $obj = new clienteController();
    $obj->guardar($_POST['nombre'],$_POST['direccion'],$_POST['cp'],$_POST['ciudad'],$_POST['email'],$_POST['telefono'],$_POST['apellidos']);
?>