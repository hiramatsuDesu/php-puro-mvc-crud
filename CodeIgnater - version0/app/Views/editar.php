<?php
echo $header;

print_r($jueg);
?>

<form action="<?php echo site_url('/actualizar') ?>" method="post">
<input type="hidden" name="id" value="<?php echo $jueg['IDs']; ?>">

<label>Juego</label><br>
<input type="number" name="tipoJuego" value="<?php echo $jueg['JUEGO']; ?>"><br>

<label>Fecha</label><br>
<input type="date" name="fecha" value="<?php echo $jueg['FECHA']; ?>"> <br>

<label>Categoria</label><br>
<input type="text" name="categoria" value="<?php echo $jueg['CATEGORIA']; ?>"> <br>

<label>Datos</label><br>
<textarea name="datosJuego"> <?php echo $jueg['DATOS']; ?> </textarea> <br>

<!--la imagen es tipo varchar ya que es una url-->
<label>Imagen</label><br>
<input type="text" name="imagen" value="<?php echo $jueg['imagen']; ?>"><br>

<input type="submit" value="Enviar">

</form>

<?php
echo $footer;
?>