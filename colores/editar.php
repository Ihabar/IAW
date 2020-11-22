<?php
//Leemos los elementos que nos llegan por medio del método GET
$id = $_GET['id'];
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];
 
//Si todavía no se ha hecho la conexión la hacemos
include_once 'conexion.php';
 
//UPDATE
$sql_editar = "UPDATE colores SET color=?, descripcion=? WHERE id=?";
// Como antes, los ? evitan el sql injection
$sentencia_update = $gbd->prepare($sql_editar);
$sentencia_update->execute(array($color, $descripcion,$id));
header("location:index.php");//para que una vez que se ejecute esto redirija a esa página, para que se cargue
?>
