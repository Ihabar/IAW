<?php
$link = 'mysql:host=localhost;dbname=colores';
$usuario = 'root';
$pwd = '';

try{
    $gbd= new PDO($link, $usuario, $pwd);
    print "Conectado!";
} catch(PDOException $e){
    print "error". $e->getMessage()."<br/>";
    die();
}