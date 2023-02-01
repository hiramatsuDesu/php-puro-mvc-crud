<a href="contenido.php"><input type="button" value="Volver"></a>
<?php
include("../config/config.php");
$listar=$contenidos->mostrarTodoContenido();

for($i=0; $i<count($listar); $i++){
?>
<br>
<table border="1" width="95%">
<tr>
    <td>Fecha</td>
    <td>Titulo</td>
    <td>Sub-Titulo</td>
    <td>Copete</td>
    <td>Imagen</td>
    <td>Cuerpo de la Noticia</td>
    <td>Administrar Noticias</td>
</tr>
<br>
<tr>
    <td>
        <?php
            echo $listar[$i]['fecha'];
        ?>
    </td>
    <td>
        <?php
            echo $listar[$i]['titulo'];
        ?>
    </td>
    <td>
        <?php
            echo $listar[$i]['subtitulo'];
        ?>
    </td>
    <td>
        <?php
            echo $listar[$i]['copete'];
        ?>
    </td>
    <td>
        <img src="template/vistaImagen.php?id=<?php
        echo $listar[$i]['id_contenido'];  ?>" width="80%">
    </td>
    <td>
        <?php
            echo $listar[$i]['cuerpo'];
        ?>
    </td>
    <td>
        <a href="editarContenido.php?id=<?php echo $listar[$i]['id_contenido']; ?>">Editar</a>|<a href="../controllers/eliminarContenido.php?id=<?php echo $listar[$i]['id_contenido']; ?>">Eliminar</a>|<a href="../controllers/cargarPublicacion.php?id=<?php echo $listar[$i]['id_contenido']; ?>">Publicar</a>
    </td>
   

</tr>
</table>
<br>

<?php
}
?>
