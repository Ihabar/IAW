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
  <h1>Ejercicio con formularios 8</h1>

  <form action="form_respuesta8.php" method="get">
    <p>
    <h2>CONVERTIDOR DE TEMPERATURAS CELSIUS/FAHRENHEIT (FORMULARIO)</h2>
    <h5>Escriba una temperatura en grados Celsius o Fahrenheit (-273,15 <= Celsius < 10.000; -459,67 <= Fahrenheit < 10.000) para convertirla a la otra unidad ( Fahrenheit o Celsius).</h5>
    <label for="temperatura">Temperatura</label>
    <input type="text" name="temperatura">
    <select name="tipo" id="tipo">
      <option value="celsius">Celsius</option>
      <option value="fahrenheit">Fahrenheit</option>
    </select>
    </p>
    <p>
      <input type="submit" value="Convertir">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
