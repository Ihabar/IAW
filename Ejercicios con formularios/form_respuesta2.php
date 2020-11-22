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
<h1>Ejercicio con formularios 2</h1>

<?php

if(isset($_REQUEST["frutas"])){
  $frutas = $_REQUEST["frutas"];
  print "<p>Tu fruta favorita es $frutas :</p><img src=\"img/frutas/$frutas.svg\" width='200px'>";
  
  
}else{
  print "<p>No has seleccionado nada</p>";
}



?>

  <p><a href="form2.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
