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
  <h1>Ejemplo de ejercicio sin formulario 11</h1>

  <p>Actualice la página para volver a tirar los dados.</p>

  <table>
    <tbody>
<?php

$odd = 0;
$even = 0; 
$dice = rand(1, 10);

for ($counter = 0; $counter < $dice; $counter++) {
    $dice1 = rand(1, 6);
    if ($dice1%2==0) 
    {
        $even=$even+1;
    }else
    {
        $odd=$odd+1;
    }
    print "<img src=\"img/dados/$dice1.svg\">\n";
}
    if ($odd==1 && $even==1)
    {
        print "<p>Hay $even dado par y $odd dado impar.</p>";
    }elseif ($even==1)
    {
        print "<p>Hay $even dado par y $odd dados impares.</p>";
    }elseif ($odd==1)
    {
    print "<p>Hay $even dados pares y $odd dado impar.</p>";
    }else 
    {
        print "<p>Hay $even dados pares y $odd dados impares.</p>";
    }


?>
    </tbody>
  </table>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
