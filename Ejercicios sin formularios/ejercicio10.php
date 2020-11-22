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
  <h1>Ejemplo de ejercicio sin formulario 10</h1>

  <p>Actualice la página para volver a tirar los dados.</p>

  <table>
    <tbody>
<?php

$highest = 0;
 
$dice = rand(1, 10);

for ($counter = 0; $counter <= $dice; $counter++) {
    $dice1 = rand(1, 6);
    if ($highest < $dice1) 
    {
        $highest=$dice1;
    }
    print "<img src=\"img/dados/$dice1.svg\">\n";
}
print "<p>El valor del dado mas alto es $highest</p>";



?>
    </tbody>
  </table>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
