<html>
<link href="../css/style.css" rel="stylesheet">
	<div class="body">
	<fieldset><legend><h3>Formulario</h3></legend>
  <form action="include/contenido.php" method="post">
   <table width="80%" height="40%">
    <table width="60%" height="20%">
     
	<tr><td>Escriba su nombre: </td>
	<td><input type="text" name="nombre" value="" valign="center" required></td></tr>
	
	</table>
	<tr>Que tipo de juego busca: </br>
	<input type="checkbox" name="tipo[]" value="Familiar">Familiar </br>
	<input type="checkbox" name="tipo[]" value="Cooperativo">Cooperativo </br>
	<input type="checkbox" name="tipo[]" value="Para 2" checked>Para 2 </br>
	<input type="checkbox" name="tipo[]" value="Infantil">Infantil </tr></br>
	<tr>¿Quiere suscribirse a nuestro boletin informativo?: </br>
	<input type="radio" name="suscribir" value="si" checked>Si </br>
	<input type="radio" name="suscribir" value="no">No </tr></br>
	<tr>Dejenos algún comentario:

<BR><textarea name="comentario" cols="60" rows="6" value="defecto" type="hidden"></textarea> <br>

<tr><td>Dificultad:</td>
	<td><p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5">
	<label for="radio1">★</label>
	<input id="radio2" type="radio" name="estrellas" value="4">
	<label for="radio2">★</label>
	<input id="radio3" type="radio" name="estrellas" value="3">
	<label for="radio3">★</label>
	<input id="radio4" type="radio" name="estrellas" value="2">
	<label for="radio4">★</label>
	<input id="radio5" type="radio" name="estrellas" value="1">
	<label for="radio5">★</label>
  </p></td></tr>

¿Cómo le gustaría recibir su pedido?  <br>
<select name="seccion">  
	<option>Recoger en la tienda <option>Recoger en un punto de reparto  <option>Envio a domicilio  </select > 

<hr>
<br><input type="submit" value="Enviar Formulario" method="post" enctype="text/plain"/>
<input type="reset" value="Borrar datos"/> 
</form>
</div>
</html>
<?php 

?>