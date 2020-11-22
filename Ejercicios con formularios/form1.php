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
  <h1>Ejercicio con formularios 1</h1>

  <form action="form_respuesta1.php" method="get">
    <!-- Añade aquí los elementos de formulario necesarios -->
    <label for="size">Tamaño:</label>
    <input type="text" name="size" placeholder="size"><br><br>
    <label for="border">Grosor:</label>
    <input type="text" name="border" placeholder="border"><br><br>
    <label for="color">Color:  </label>
    <select name="color" id="color">
      <option value="red">Rojo</option>
      <option value="green">Verde</option>
      <option value="blue">Azul</option>
    </select><br><br>
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
