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
<h1>Ejercicio con formularios 6</h1>

<?php




if(!empty($_REQUEST["tamaño"]) && isset($_REQUEST["forma"]) && is_numeric($_REQUEST["tamaño"])){
    $tamaño = $_REQUEST["tamaño"];
    $radio = ($tamaño / 2);
    $forma = $_REQUEST["forma"];
    if($forma == "circulo"){
      print '<svg height="500" width="500">
      <circle cx="'.$tamaño.'" cy="'.$tamaño.'" r="'.$radio.'"stroke="black" stroke-width="3" fill="blue"/> 
    </svg> ';
    } else if ($forma == "cuadrado"){
      print '<svg height="500" width="500">
      <rect x="0" y="0" width="'.$tamaño.'px" height="'.$tamaño.'px" stroke="black" stroke-width="3" fill="blue"/>
      </svg>';
    }
}else{
  print "<p>Debes concretar un tamaño y elegir entre un circulo o un cuadrado</p>";
 
  
}


?>

  <p><a href="form6.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
