<?php
    include_once 'conexion.php';
 
    /** SELECT DE LA BASE DE DATOS */
    $sql_lectura = "SELECT * FROM montes"; //Sentencia SQL que queremos ejecutar
 
    $sentencia_select = $gbd->prepare($sql_lectura);
        //$gbd guarda la conexión creada en el archivo conexión.php
        //$sentencia_select  será usada para ejecutar la sentencia
 
    $sentencia_select->execute(); //para que se ejecute la sentencia que hemos preparado
    $resultado = $sentencia_select->fetchAll(); //fetchall nos devuelte una matriz con el resultado de la sentencia
         /** SELECT cuando recibimos una ID */
    if($_GET){
      $id = $_GET['id'];
      $sql_lectura_id = "SELECT * FROM montes WHERE id=?"; //Sentencia SQL que queremos ejecutar
      $sentencia_select_id = $gbd->prepare($sql_lectura_id);
      $sentencia_select_id->execute(array($id));
      $resultado_id = $sentencia_select_id->fetch(); //fetch porque viene sólo un resultado
  }

    /***INSERT en la base de datos*/
        if($_POST){//Si le llegan datos de un formulario
            $nombre = $_POST["nombre"];//busca el valor del input llamado nombre
            $altura = $_POST["altura"];//busca el valor del input llamado altura
            $ubicacion = $_POST["ubicacion"];//busca el valor del input llamado ubicacion
            $descripcion = $_POST["descripcion"];//busca el valor del input llamado descripcion
     
            if($nombre != "" and $altura!="" and $ubicacion!=""and $descripcion!=""){ //Para que no guarde nada si uno de los valores está vacío
                $sql_escritura = "INSERT INTO montes(nombre,altura,ubicacion,descripcion) VALUES (?,?,?,?)";
                //poniendo ? evitamos que nos hagan SQL injection
                $sentencia_insert = $gbd->prepare($sql_escritura);
                $sentencia_insert->execute(array($nombre,$altura,$ubicacion,$descripcion,)); //le damos un valor a los ?
     
                header("location:database.php");//para que una vez que se ejecute esto redirija a esa página, para que se cargue
            }
        }
             
?>

 
<?php if($_GET): //Si hay método get, queremos editar, aparecerá lo siguiente?>
<h2>EDITAR nombre</h2>
    <form action="editar.php" method="GET">
            <p><label for="nombre">nombre</label><input type="text" name="nombre" value="<?php print $resultado_id['nombre']?>"></p>
            <p><label for="altura">altura</label><input type="text" name="altura" value="<?php print $resultado_id["altura"]?>"></p>
            <p><label for="ubicacion">Ubicacion</label><input type="text" name="ubicacion" value="<?php print $resultado_id["ubicacion"]?>"></p>
            <p><label for="descripcion">Descripción</label><input type="text" name="descripcion" value="<?php print $resultado_id["descripcion"]?>"></p>
            <input type="hidden" name="id" value="<?php print $resultado_id['id']?>">
            <p><button>Editar</button></p>
    </form>
<?php endif ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color:  gray;
    text-align: center;
 }
 .table {
  margin-left: auto;
  margin-right: auto;
  background: white;
  border: 1px solid black;
}
.div {
  margin: auto;
  width: 50%;
  border: 3px solid black;
  padding: 10px;
  background: white
}
 </style>
</head>
<body style="background-image: url(https://images.unsplash.com/photo-1485470733090-0aae1788d5af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1991&q=80);">

<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Frontpage.html">Frontpage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Pirineos.html">Pirineos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Alpes.html">Alpes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Andes.html">Andes</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="Droneviews.html">DroneViews</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="database.php">Database</a>
      </li>   
    </ul>
  </div>  
</nav>
<br>
<br><br><br>
<div class="div">
<h1>Base de datos de montes</h1>
</div>
<!-- Aquí añadiremos el contenido partiendo del resultado de la sentencia SQL-->
<div class="div">
<table class="table" >
<tr>
          <td><b>Nombre</b></td>
          <td><b>Altura</b></td>
          <td><b>Ubicacion</b></td>
          <td><b>Descripcion</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
        </tr>
<?php
foreach($resultado as &$dato) //de la matriz del resultado toma un dato (una tupla)
{
 print "<tr style=\"background-color:$dato[nombre]\">
          <td> $dato[nombre]</td>
          <td> $dato[altura]</td>
          <td> $dato[ubicacion]</td>
          <td> $dato[descripcion]</td>
          <td> <a href=database.php?id=$dato[id]>&#128221</a></td>
          <td> <a href=eliminar.php?id=$dato[id]>&#128465</a></td>
        </tr>";
}
?>

</table>
</div>
<div class="div">
  <h2> Añadir datos </h2>
<form action="database.php" method="POST">
        <p><label for="nombre">Nombre:  </label>    <input type="text" name="nombre"></p>
        <p><label for="altura">Altura:  </label>    <input type="text" name="altura"></p>
        <p><label for="ubicacion">Ubicacion:  </label>    <input type="text" name="ubicacion"></p>
        <p><label for="descripcion">Descripcion:  </label>    <input type="text" name="descripcion"></p>
        <p><button>Añadir</button></p>
</form>
</div>
<div class="footer">
  Webpage by: Ihabar Alberdi  
</div>
</body>
</html>