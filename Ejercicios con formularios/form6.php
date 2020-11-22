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
  <h1>Ejercicio con formularios 6</h1>

  <form action="form_respuesta6.php" method="get">
  <label for="tamaño">Tamaño:</label>
    <p><input type="text" name="tamaño" ></p>

    <p>
    <label for="forma">Forma</label>
      <select name="forma" size="2">  
          <option value="circulo">Circulo</option>
          <option value="cuadrado">Cuadrado</option>
      </select>
</p>
  
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
