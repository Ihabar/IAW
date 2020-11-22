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
  <h1>Ejemplo de ejercicio sin formulario 12</h1>

  <p>Actualice la página para mostrar un nuevo animal</p>

  <table>
    <tbody>
<?php

$animal = ["ballena", "caballito-mar", "camello", "cebra", "elefante", "hipopotamo", "jirafa", "leon","leopardo","medusa","mono","oso","oso-blanco","pajaro","pinguino","rinoceronte","serpiente","tigre","tortuga","tortuga-marina"];
$random = rand(1,20);

print "<img src=\"img/animales/$animal[$random].svg\">";
?>
    </tbody>
  </table>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
