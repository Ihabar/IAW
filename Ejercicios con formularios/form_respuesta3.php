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
<h1>Ejercicio con formularios 3</h1>

<?php


if(isset($_REQUEST["fondo"]) && isset($_REQUEST["letra"])){
  $fondo = $_REQUEST["fondo"];
  $letra = $_REQUEST["letra"];
  print "<p style='color:".$letra.";'>
  Phasellus lorem massa, maximus at luctus eu, blandit vitae elit. Vestibulum non nulla vel est lacinia faucibus eu nec risus. Proin mattis porta tempus. Fusce a tincidunt risus. Phasellus massa purus, tempor euismod risus ac, maximus porttitor eros. Integer in tortor eu ex sollicitudin luctus. Sed fringilla tellus ut tortor hendrerit, cursus volutpat sem convallis. Nullam eu consequat ipsum. Nulla et pulvinar dolor.
  
  Duis vestibulum magna et ultricies luctus. Nullam ut tellus a mi auctor fermentum id vitae nibh. Vivamus ultrices ipsum at mattis dictum. Sed sollicitudin maximus odio, et elementum nisi facilisis quis. Vestibulum turpis nibh, finibus at erat id, euismod elementum quam. Nam maximus pretium semper. Cras condimentum felis non turpis tempor, at sollicitudin leo varius. Cras sit amet justo vel dolor luctus volutpat.
  
  In id arcu blandit, luctus arcu rhoncus, consectetur tortor. Suspendisse eu arcu id diam vulputate pretium rhoncus quis risus. Proin sed neque in ipsum hendrerit imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi in massa turpis. Nam eleifend vestibulum mattis. Nullam vel metus a metus efficitur mollis. Maecenas sodales erat dui, sed tempor mauris venenatis in. Aliquam eu bibendum mauris. Ut pulvinar orci ac hendrerit egestas. Praesent lobortis nunc ut pulvinar tristique.
  
  Proin accumsan pellentesque magna, eu pellentesque dolor. Cras eleifend metus sed justo mattis, nec euismod risus pretium. Duis viverra, nisl vel efficitur lobortis, justo felis finibus ligula, sit amet volutpat arcu lacus quis leo. Morbi lacinia dictum suscipit. Pellentesque fringilla nulla turpis, eget posuere nibh dapibus quis. Cras ligula lorem, porttitor ut nulla vel, elementum faucibus leo. Vestibulum et tempor tortor.
  
  Quisque nec ipsum imperdiet, vestibulum sapien sit amet, sodales libero. Maecenas iaculis erat ut sodales sagittis. Cras hendrerit vulputate malesuada. Nam pharetra nisl in arcu ultrices rutrum in dapibus ipsum. Sed et magna libero. Praesent ultrices arcu sed nisi mollis, quis euismod quam porttitor. Morbi molestie tempor justo nec placerat. Duis ultricies sodales aliquet. Vivamus arcu lorem, ullamcorper sed magna feugiat, cursus euismod ante. Nulla elementum mollis nibh nec volutpat.</p>";
  print "<body style=background-color:".$fondo.">";
  
  
}else{
  print "<p>No has seleccionado nada</p>";
}


?>


  <p><a href="form3.php">Volver al formulario.</a></p>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
