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
  <h1>Ejemplo de ejercicio sin formulario 8</h1>

  <p>Actualice la página para mostrar nuevos circulos.</p>

  <table>
    <tbody>
<?php

$random = rand(1,10);

for ($counter = 0; $counter < $random ; $counter++)
{
  $red = rand(0,255);
  $green = rand(0,255);
  $blue = rand(0,255);
print "<p><svg height='100' width='100'>
<circle cx='50' cy='50' r='50'fill='rgb($red,$green,$blue)'/></svg></p>";
}

?>
    </tbody>
  </table>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
