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
  <h1>Ejercicio con formularios 2</h1>

  <form action="form_respuesta2.php" method="get">
  
  <?php
 

 $frutas =["cerezas", "fresa", "limon", "manzana", "naranja", "pera"];

 for ($contador =0; $contador < 6 ; $contador++)
{

print "<p><input type='radio' name='frutas' value='$frutas[$contador]'><label for='frutas'>$frutas[$contador]</label></p>";
}

?>
    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
