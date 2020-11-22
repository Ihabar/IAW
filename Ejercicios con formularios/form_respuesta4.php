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
<h1>Ejercicio con formularios 4</h1>

<?php


if(empty($_REQUEST["nombre"]) || empty($_REQUEST["apellido"])){
  
    print "Falta algun valor";
  
}else{
  
  $nombre = $_REQUEST["nombre"];
  $apellido = $_REQUEST["apellido"];
  print"<p>Nombre: $nombre</p>" ;
  print"<p>Apellido: $apellido</p>";
  
}


?>

  <p><a href="form4.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
