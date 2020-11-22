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
<h1>Ejercicio con formularios 10</h1>

<?php


$jugadores = $_REQUEST["jugadores"];

if($jugadores < 3 || $jugadores > 10 || empty($jugadores)){
  print "<p>Debes introducir un numero valido<p>";
}else{
  $resultadomaximo = 0;
  for($contador = 1; $contador <= $jugadores;$contador++){
      $carta1 = rand(1,10);
      $carta2 = rand(1,10);
      $carta3 = rand(1,10);

      $resultado = $carta1 + $carta2 + $carta3;
      if($resultadomaximo < $resultado){
        $resultadomaximo = $resultado;
      }

      print'<p>Jugador '.$contador.': <img src=\'img/cartas/c'.$carta1.'.svg\' width="100px"> <img src=\'img/cartas/c'.$carta2.'.svg\' width="100px"> <img src=\'img/cartas/c'.$carta3.'.svg\' width="100px"> Resultado = '.$resultado.' </p>';
      

  }
print "<p>Puntuacion maxima obtenida: $resultadomaximo puntos</p>";
  
}


?>

  <p><a href="form10.php">Volver al formulario.</a></p>


  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
