<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
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
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Ihabar
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejemplo de ejercicio sin formulario 7</h1>

  <p>Actualice la página para volver a tirar los dados.</p>

  <table>
    <tbody>
<?php

$player1dice1 = rand(1,6);
$player1dice2 = rand(1,6);
$player1dice3 = rand(1,6);

$player2dice1 = rand(1,6);
$player2dice2 = rand(1,6);
$player2dice3 = rand(1,6);

$three1 = false;
$three2 = false;

$pair1 = false;
$pair2 = false;
$pairvalue1 = 0;
$pairvalue2 = 0;

$sum1=$player1dice1+$player1dice2+$player1dice3;
$sum2=$player2dice1+$player2dice2+$player2dice3;

print "<div style = 'background-color:blue'>";
print "<img src='img/dados/$player1dice1.svg'>";
print "<img src='img/dados/$player1dice2.svg'>";
print "<img src='img/dados/$player1dice3.svg'>";
print "</div>";

print "<div style = 'background-color:darkblue'>";
print "<img src='img/dados/$player2dice1.svg'>";
print "<img src='img/dados/$player2dice2.svg'>";
print "<img src='img/dados/$player2dice3.svg'>";
print "</div>";



if($player1dice1==$player1dice2 && $player1dice2 == $player1dice3){
  $three1=true;

}elseif ($player1dice1==$player1dice2){
  $pair1 = true;
  $pairvalue1 = $player1dice1;
}
elseif ($player1dice1==$player1dice3){
  $pair1 = true;
  $pairvalue1 = $player1dice1;
}
elseif ($player1dice2==$player1dice3){
  $pair1 = true;
  $pairvalue1 = $player1dice2;
}

if($player2dice1==$player2dice2 && $player2dice2 == $player2dice3){
  $three2=true;

}elseif ($player2dice1==$player2dice2){
  $pair2 = true;
  $pairvalue2 = $player2dice1;
}
elseif ($player2dice1==$player2dice3){
  $pair2 = true;
  $pairvalue2 = $player2dice1;
}
elseif ($player2dice2==$player2dice3){
  $pair2 = true;
  $pairvalue2 = $player2dice2;
}

if($three1==true && $three2==true) {
    if($sum1 > $sum2) {
      print "<p>Gana jugador 1 por trio alto</p>";
    }
    elseif ($sum1 < $sum2){
      print "<p>Gana jugador 2 por trio alto</p>";
    }
    else{
      print "<p>Empate</p>";
    }
}
else{
  if($three1 == true && $three2 == false){
    print "<p>Gana jugador 1 por trio</p>";
  }elseif($three2 == true && $three1 == false){
    print "<p>Gana jugador 2 por trio</p>"; 
  }
  else{
    if($pair1==true && $pair2==true){
      if($sum1>$sum2){
          print "<p>Gana jugador 1 por pareja + puntuacion mas alta</p>";
      }elseif($sum1<$sum2){
          print "<p>Gana jugador 2 por pareja + puntuacion mas alta</p>";
      }else{
          print "<p>Empate</p>";
      }
    }elseif($pair1 == true && $pair2 ==false){
      print "<p>Gana jugador 1 por pareja</p>";
    }elseif($pair1 == false && $pair2 == true){
      print "<p>Gana jugador 2 por pareja</p>";
    }else{
      if($sum1>$sum2){print "<p>Gana jugador 1 por puntuacion mas alta</p>";
      }else {
        print "<p>Gana jugador 2 por puntuacion mas alta</p>";
        
      }
    }
  }
}



?>
    </tbody>
  </table>

  <footer>
    <p>Ihabar</p>
  </footer>
</body>
</html>
