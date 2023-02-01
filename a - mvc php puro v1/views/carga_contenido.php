
<form action="../controllers/guarda_contenido.php" method="POST" enctype="multipart/form-data">
<label>Titulo</label><br>
<input type="text" name="titulo" required><br>

<label>sub-Título</label><br>
<input type="text" name="subtitulo"><br>

<label>Copete</label><br>
<input type="text" name="copete"><br>

<label>Volanta</label><br>
<input type="text" name="volanta"><br>

<label>Cuerpo de la noticia</label><br>
<textarea name="cuerpo" rows="10" cols="50" required></textarea><br>

<label>Imagen</label><br>
<input type="file" name="image" multiple><br>

<input type="submit" value="Guardar"> 

</form>
<?php
if(isset($_GET['no'])){
    echo "Revise los campos que estén correctamente rellenados";
}

?>

