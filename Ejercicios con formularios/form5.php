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
 <h1>Ejercicio con formularios 5</h1>
    <form action="form_respuesta5.php" method="get">

    <label for="email">Email:</label>
      <p><input type="email" name="email" ></p>
    <label for="email2">Email:</label>
      <p><input type="email" name="email2" ></p>
      <p><input type="checkbox" name="aceptar">
    <label for="aceptar">Acepto recibir correos</label></p>

    
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
