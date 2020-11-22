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
  <h1>Ejemplo de ejercicio sin formulario 4</h1>

  <p>Actualice la página para mostrar un nuevo color.</p>

  <table>
    <tbody>
<?php

$red = rand(0,255);
$green= rand(0,255);
$blue = rand(0,255);

print 
 "<svg width='100' height='100'>
 <circle cx='50' cy='50' r='50' fill='rgb($red,$green,$blue)' />
 </svg>"


?>
    </tbody>
  </table>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
