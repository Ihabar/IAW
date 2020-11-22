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

  <form action="form_respuesta10.php" method="get">
   <p><label for="jugadores">Numero de jugadores(Minimo 3 y maximo 10)</label></p>
    <p><input type="number" name="jugadores"></p>
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
