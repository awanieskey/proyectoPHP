<html>
<link href="../css/style.css" rel="stylesheet">
</html>
<?php 

$imageName = ""; 
    if(strpos($_SERVER['PHP_SELF'] , "index.php"))
    {
        $imageName = "imagenes/cabecera.jpg";
    }
    else
    {
        $imageName = "../imagenes/cabecera.jpg";
    }
print "<title> Juegos de mesa </title>
<div class='cabecera'>
    <div class='cntCabecera'>
        <img src=$imageName  alt='imagenCabecera'>
    </div>
    <div class='cntCabecera'>
        <h1>Juegos de mesa</h1>
    </div>
</div>";
?>