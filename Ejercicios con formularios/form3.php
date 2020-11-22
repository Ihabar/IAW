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
  <h1>Ejercicio con formularios 3</h1>
 
  <form action="form_respuesta3.php" method="get">
  <label for="fondo">Fondo:</label>
    <p><input type="color" name="fondo" value=""></p>
  
  <label for="fondo">Letra:</label>
    <p><input type="color" name="letra" value=""></p>
  
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
