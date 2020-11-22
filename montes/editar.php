<?php
//Leemos los elementos que nos llegan por medio del método GET
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$altura = $_GET['altura'];
 
//Si todavía no se ha hecho la conexión la hacemos
include_once 'conexion.php';
 
//UPDATE
$sql_editar = "UPDATE montes SET nombre=?, altura=? WHERE id=?";
// Como antes, los ? evitan el sql injection
$sentencia_update = $gbd->prepare($sql_editar);
$sentencia_update->execute(array($nombre, $altura,$id));
header("location:index.php");//para que una vez que se ejecute esto redirija a esa página, para que se cargue
?>
