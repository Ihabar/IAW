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
<h1>Ejercicio con formularios 8</h1>

<?php

$tipo =$_REQUEST['tipo'];
$temperatura = $_REQUEST['temperatura'];


if($tipo=='celsius' && $temperatura>=-273.15 && is_numeric ($_REQUEST['temperatura'])){
  $resultado= (($temperatura*9/5)+32);
print "$resultado grados Fahrenheit";
}elseif ($tipo=='fahrenheit' && $temperatura>=-459.67 && is_numeric ($_REQUEST['temperatura'])){
$resultado= (($temperatura-32)*5/9);
print "$resultado grados Celsius";
}else {
    print "El valor introducido no es valido";
}
?>

  <p><a href="form8.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
