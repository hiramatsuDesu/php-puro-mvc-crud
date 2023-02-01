<?php
include("../config/config.php");
$lista=$contenidos->mostrarUnContenido($_GET['id']);
?>
<form action="../controllers/modificarContenido.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id_noticia" value="<?php echo $lista[0]['id_contenido']; ?>"><br>

<label>Fecha</label><br>
<input type="date" name="fecha" value="<?php echo $lista[0]['fecha']; ?>" readonly><br>

<label>Titulo</label><br>
<input type="text" name="titulo" value="<?php echo $lista[0]['titulo'] ?>" required><br>

<label>sub-Título</label><br>
<input type="text" name="subtitulo" value="<?php echo $lista[0]['titulo']; ?>"><br>

<label>Copete</label><br>
<input type="text" name="copete" value="<?php echo $lista[0]['copete']; ?>"><br>

<label>Volanta</label><br>
<input type="text" name="volanta" value="<?php echo $lista[0]['volanta']; ?>"><br>

<label>Cuerpo de la noticia</label><br>
<textarea name="cuerpo" rows="10" cols="50" required><?php echo $lista[0]['cuerpo']; ?>
</textarea><br>

<label>Imagen Actual</label><br>
<img src="template/vistaImagen.php?id=<?php echo $lista[0]['id_contenido']; ?>"><br>

<label>Imagen</label><br>
<input type="file" name="image" multiple><br>

<input type="submit" value="Guardar"> 
<a href="contenido.php"><input type="button" value="Cancelar"></a>

</form>
<?php
if(isset($_GET['no'])){
    echo "Revise los campos que estén correctamente rellenados";
}

?>
