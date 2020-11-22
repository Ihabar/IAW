<?php
/**
 * Controles en formularios
 *
 * @author Ihabar Alberdi
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios 
    Ihabar Alberdi
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
<h1>Ejercicio con formularios 7</h1>

<?php

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$edad = $_REQUEST['edad'];
$peso = $_REQUEST['peso'];


if (empty($nombre)) {
 
  print "<p>No has introducido nombre</p>";
  
}else{
  print "<p>Nombre: $nombre</p>";
    }


if (empty($apellido)) {

  print "<p>No has introducido apellido</p>";
  
}else{
  print "<p>Apellido: $apellido</p>";
    }

if (empty($edad)) {

  print "<p>No has introducido tu edad</p>";
  
}else{
  print "<p>Edad: $edad</p>";
    }

if (empty($peso)) {

  print "<p>No has introducido tu peso</p>";
  
}else{
  print "<p>Peso: $peso KG</p>";
    }

if (isset($_REQUEST['sexo'])) {
    $sexo = $_REQUEST['sexo'];
    if ($sexo == "hombre") {
        print "<p>Sexo: Hombre</p>";
    } elseif ($sexo == "mujer") {
        print "<p>Sexo: Mujer</p>";
    }
}
else {
  print "<p>No has elegido tu sexo</p>";
}

if (isset($_REQUEST['estado'])) {
    $estado = $_REQUEST['estado'];
    if ($estado == "soltero") {
        print "<p>Estado: Soltero</p>";
    } elseif ($estado == "casado") {
        print "<p>Estado: Casado</p>";
    } elseif ($estado == "otro") {
        print "<p>Estado: Otro</p>";
    } 
}else {
  print "<p>No has elegido relacion</p>";
}

if (isset($_REQUEST['cine'])||isset($_REQUEST['deporte'])||isset($_REQUEST['literatura'])||isset($_REQUEST['musica'])||isset($_REQUEST['tebeos'])||isset($_REQUEST['television'])){
    print "Aficiones:";
    if (isset($_REQUEST['cine'])){
        print "<p>Cine</p>";
      }

      if (isset($_REQUEST['deporte'])){
        print "<p>Deporte</p>";
      }
      
      if (isset($_REQUEST['literatura'])){
        print "<p>Literatura</p>";
      }
      
      if (isset($_REQUEST['musica'])){
        print "<p>Musica</p>";
      }
      
      if (isset($_REQUEST['tebeos'])){
        print "<p>Tebeos</p>";
      }

      if (isset($_REQUEST['television'])){
        print "<p>Television</p>";
      }
      
}else{
    print "No tiene ninguna aficion";
}   

?>
  <p><a href="form7.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
