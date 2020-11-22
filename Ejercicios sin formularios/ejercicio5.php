<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
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
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Ihabar
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejemplo de ejercicio sin formulario 5</h1>

  <p>Actualice la página para mostrar 3 nuevas cartas.</p>

  <table>
    <tbody>
<?php

$card1 =rand(1,10);
$card2 =rand(1,10);
$card3 =rand(1,10);

print "<img src=\"img/cartas/c$card1.svg\">";

print "<img src=\"img/cartas/c$card2.svg\">";

print "<img src=\"img/cartas/c$card3.svg\">";

if ($card1 >= $card2 && $card1 >= $card3) {
    print "<p>La carta más alta es:</p>";
    print "<img src=\"img/cartas/c$card1.svg\">\n";
} elseif ($card2 >= $card1 && $card2 >= $card3) {
    print "<p>La carta más alta es:</p>";
    print "<img src=\"img/cartas/c$card2.svg\">\n";
} else {
    print "<p>La carta más alta es:</p>";
    print "<img src=\"img/cartas/c$card3.svg\">\n";
}

?>
    </tbody>
  </table>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
