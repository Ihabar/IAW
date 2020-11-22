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
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>

<body>
<h1>Ejercicio con formularios 9</h1>

<?php

$valor = 0;
if(empty($_REQUEST["numero"]) || $_REQUEST["numero"] <= 0 || $_REQUEST["numero"] > 100){
  print "<p>Debes introducir un numero<p>";
}else{
  $numero = $_REQUEST["numero"];
  print '<table>';
    for($contador1 = 1; $contador1 <= $numero; $contador1++){ 
      print "<tr>";
      for($contador2 = 1;$contador2<= $numero;$contador2++){
        $valor = $contador1 * $contador2;
        print "<td>".$valor."</td>";
      } print "</tr>";
    } print "</table>";
}

?>

  <p><a href="form9.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
