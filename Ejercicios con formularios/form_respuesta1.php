<?php
/**
 * Controles en formularios
 *
 * @author Escriba aquí su nombre
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
<h1>Ejercicio con formularios 1</h1>

<?php



if($_REQUEST["size"] != "" && $_REQUEST["border"] != "" && $_REQUEST["color"] != "" && is_numeric($_REQUEST["size"]) && is_numeric($_REQUEST["border"])){
  $size = $_REQUEST["size"];
  $border = $_REQUEST["border"];
  $color = $_REQUEST["color"];
  print "<svg width='400' height='400'>
  <rect width='$size' height='$size' style='fill:$color;stroke-width:$border;stroke:rgb(0,0,0)'/>
</svg>";

  
}
else{
  print "<p>Faltan valores</p>";
}



?>

  <p><a href="form1.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
