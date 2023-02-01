<a href="contenido.php"><input type="button" value="Volver"></a>

<?php
include("../config/config.php");
$noticias=$publicacion->mostrarPublicados();

for($i=0; $i<count($noticias); $i++){
?>

<table border="1" width="80%">

<tr>
    <th>Fecha</th>
    <td>
        <?php
        echo $noticias[$i]['fecha_publicacion'];
        ?>
    </td>
</tr>
<tr>
    <th>
        Titulo:
    </th>
    <td>
    <?php
        echo $noticias[$i]['titulo'];
        ?>
    </td>
</tr>
<tr>
    <th>
        Sub Titulo:
    </th>
    <td>
    <?php
        echo $noticias[$i]['subtitulo'];
        ?>
    </td>
</tr>
<tr>
    <th>
        Copete:
    </th>
    <td>
    <?php
        echo $noticias[$i]['copete'];
        ?>
    </td>
</tr>
<tr>
    <th>
        Imagen:
    </th>
    <td>
        <img src="template/imagenPublicados.php?id=<?php echo $noticias[$i]['id_publicados']; ?>" width="30%">
    </td>
</tr>
<tr>
    <th>
        Cuerpo:
    </th>
    <td>
        <?php
            echo $noticias[$i]['cuerpo'];
        ?>
    </td>
</tr>
<tr>
    <th>
        Administrar:
    </th>
    <td>
        <a href="articulosPublicados.php">Publicar</a>|
        <a href="../controllers/eliminarPublicacion.php?id=<?php echo $noticias[$i]['id_publicados']; ?>">Eliminar</a>
    </td>
</tr>
</table>

<br>

<?php
}
?>