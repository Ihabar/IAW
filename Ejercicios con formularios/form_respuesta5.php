<?php
/**
 * Controles en formularios
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
    Controles en formularios 
    Ihabar Alberdi
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
<h1>Ejercicio con formularios 5</h1>

<?php
if(filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL) && filter_var($_REQUEST["email2"], FILTER_VALIDATE_EMAIL)){
  $email = $_REQUEST["email"];
  $email2 = $_REQUEST["email2"];
  if($email == $email2){
    print $email;
    print "<p>La dirección de correo coincide</p>";
  }else{
    print "<p>La dirección de correo no coincide</p>";
  }
  
  if(isset($_REQUEST["aceptar"])){
    print "<p>Desea recibir correos</p>";
  }else{
    print "<p>No desea recibir correos</p>";
  }
}else{
  print "<p>La dirección de correo no es valida</p>";
}

?>

  <p><a href="form5.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
