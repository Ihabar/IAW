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
     
            if($nombre != "" and $altura!=""){ //Para que no guarde nada si uno de los valores está vacío
                $sql_escritura = "INSERT INTO montes(nombre,altura) VALUES (?,?)";
                //poniendo ? evitamos que nos hagan SQL injection
                $sentencia_insert = $gbd->prepare($sql_escritura);
                $sentencia_insert->execute(array($nombre,$altura)); //le damos un valor a los ?
     
                header("location:index.php");//para que una vez que se ejecute esto redirija a esa página, para que se cargue
            }
        }
             
?>

 
<?php if($_GET): //Si hay método get, queremos editar, aparecerá lo siguiente?>
<h2>EDITAR nombre</h2>
    <form action="editar.php" method="GET">
            <p><label for="nombre">nombre</label><input type="text" name="nombre" value="<?php print $resultado_id['nombre']?>"></p>
            <p><label for="altura">Descripción</label><input type="text" name="altura" value="<?php print $resultado_id["altura"]?>"></p>
            <input type="hidden" name="id" value="<?php print $resultado_id['id']?>">
            <p><button>Editar</button></p>
    </form>
<?php endif ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Conexión con Base de Datos
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/miestilo.css" title="nombre">
</head>
 
<body>
  <h1>Ejercicio con base de datos</h1>
 
    <!-- Aquí añadiremos el contenido partiendo del resultado de la sentencia SQL-->
    <table>
    <?php
  foreach($resultado as &$dato) //de la matriz del resultado toma un dato (una tupla)
  {
     print "<tr style=\"background-color:$dato[nombre]\">
              <td> $dato[nombre]</td>
              <td> $dato[altura]</td>
              <td> <a href=index.php?id=$dato[id]>&#128221</a></td>
              <td> <a href=eliminar.php?id=$dato[id]>&#128465</a></td>
            </tr>";
   }
?>


    </table>
    <form action="index.php" method="POST">
            <p><label for="nombre">Nombre</label><input type="text" name="nombre"></p>
            <p><label for="altura">Altura</label><input type="text" name="altura"></p>
            <p><button>Añadir</button></p>
    </form>
  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>