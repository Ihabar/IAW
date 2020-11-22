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
  <h1>Ejercicio con formularios 7</h1>

  <form action="form_respuesta7.php" method="post">
    
    <p>
    <label for="nombre">Nombre:</label><input type="text" name="nombre">
    <label for="apellido">Apellido</label><input type="text" name="apellido">
    <label for="edad">Edad:</label><select name="edad" size="1">  
                <option></option>
    <?php
    
    
    for($contador =0; $contador <=100; $contador++){
    
      print "<option value='$contador'>$contador</option>";
    }
    ?>
            </select>
    </p>
    
    <p>
      <h4>Peso</h4>
    <input type="number" name="peso"><label for="peso">Kg</label>
    <p>
    
    <p>Sexo:</p>
            <p><input type="radio" name="sexo" value="hombre"><label for="sexo"></label>Hombre</p>
            <p><input type="radio" name="sexo" value="mujer"><label for="sexo">Mujer</label></p>
    <p>
    
    <p>Estado:</p>
            <p><input type="radio" name="estado" value="soltero"><label for="estado"></label>Soltero</p>
            <p><input type="radio" name="estado" value="casado"><label for="estado">Casado</label></p>
            <p><input type="radio" name="estado" value="otro"><label for="estado">Otro</label></p>
    <p>
    
    
    <p>Aficiones:</p>
    <p><input type="checkbox" name="cine"><label for="cine">Cine</label></p>
    <p><input type="checkbox" name="deporte"><label for="deporte">Deporte</label></p>
    <p><input type="checkbox" name="literatura"><label for="literatura">Literatura</label></p>
    <p><input type="checkbox" name="musica"><label for="musica">Musica</label></p>
    <p><input type="checkbox" name="tebeos"><label for="tebeos">Tebeos</label></p>
    <p><input type="checkbox" name="television"><label for="television">Television</label></p>
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
