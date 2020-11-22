<?php
//Si todavía no se ha hecho la conexión la hacemos
include_once 'conexion.php';
 
$id = $_GET['id'];
 
$sql_eliminar = "DELETE FROM colores WHERE id=?";
$sentencia_eliminar = $gbd->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id));
 
header("location:index.php");//para que una vez que se ejecute esto redirija a esa página, para que se cargue