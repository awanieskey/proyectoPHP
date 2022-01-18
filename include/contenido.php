<!DOCTYPE html> 
<link href="../css/style.css" rel="stylesheet">
<head>
<?php 
include "cabecera.php";
?>
</head>
<body>
<?php
/*print "<pre>"; 
print_r($_REQUEST); 
print "</pre>\n"; 
*/
print "<div class= 'body'>";

  print "<p>Su nombre es $_REQUEST[nombre]</p>\n"; 

/*mostrar imagenes segun tipo de juego*/
  if (isset($_REQUEST['tipo'])) 
  {
    echo "<div id='contenedor' class='contenedor'>Le interesan los juegos del tipo: ";
      foreach($_REQUEST['tipo'] as $key => $value)
      {
        echo "<li>". $value."</li>";
        if ($value == 'Para 2') {
          print "<div id='img1'class='imagen' ><img src='../imagenes/onitama.jpg' alt='imagen' > </div>";
        }else if ($value == 'Familiar') {
          print "<div id='img2' class='imagen'><img src='../imagenes/sushi-go.png' alt='imagen'> </div>";
        }else if ($value == 'Cooperativo') {
          print "<div id='img3' class='imagen'><img src='../imagenes/Tripulacion.png' alt='imagen' ></div>";
        }else if ($value == 'Infantil') {
          print "<div id='img4' class='imagen'><img src='../imagenes/monos.jpg' alt='imagen'></div>";
  }
}
echo "</div>";
}

if ($_REQUEST['suscribir']=='si') 
{
echo "<br><p>Se ha suscrito correctamente al boletín informativo. </p><br>";
} else {
  echo "<p>No se ha suscrito al boletín informativo. </p><br>";
}

$comentario= $_REQUEST['comentario'];
if (empty($comentario)) {
  echo "<p>No hay ningún comentario</p><br>";
}
else{
  print "<p>Su comentario es $_REQUEST[comentario]</p>\n"; 
}
/*Dificultad con estrellas*/
if (isset($_REQUEST['estrellas'])) {
  print "<p>Su dificultad elegida es $_REQUEST[estrellas]</p>\n
  <div class='estrellitas'>
  <p class='clasificacion'>";
    for ($i=0;$i< $_REQUEST['estrellas']  ; $i++) { 
      $resta=$_REQUEST['estrellas']-$i;
      if ($i==0)  {
        print "<input id='radio1' type='radio' name='estrellas' value=($resta) checked>
        <label for='radio1'>★</label>";
      }else{
        print "<input id='radio1' type='radio' name='estrellas' value=($resta) >
        <label for='radio1'>★</label>";
        }
      }
print "</p></div>";
}



print "<p>Recibirá su pedido con el siguiente método:  $_REQUEST[seccion]</p></div>"; 


$fecha = date('d-m-Y h:i a', time()); 
print "<p>".$fecha."</p>";
/*echo "</div>";*/
?>
</body>
<?php
include "footer.php";
?>
</html>