<?php
echo $header;
?>

Cargar Juegos:

<form action="<?php echo site_url('/guardar') ?>" method="post">
<label>Juego</label><br>
<input type="number" name="tipoJuego"><br>

<label>Fecha</label><br>
<input type="date" name="fecha"><br>

<label>Categoria</label><br>
<input type="text" name="categoria"><br>

<label>Datos</label><br>
<input type="text" name="datosJuego"><br>

<!--la imagen es tipo varchar ya que es una url-->
<label>Imagen</label><br>
<input type="text" name="imagen"><br>

<input type="submit" value="Enviar">

</form>


<?php
echo $footer;
?>