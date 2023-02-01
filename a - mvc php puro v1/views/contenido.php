<?php
session_start();
if(isset($_SESSION['administrador'])){
?>
<section id="content">
<h1>Contenido</h1>
<ul>
    <li><a href="carga_contenido.php">Cargar Contenido</a></li>

    <li><a href="ver_contenido.php">Eliminar Contenido</a></li>

    <li><a href="ver_contenido.php">Editar Contenido</a></li>
        
    <li><a href="ver_contenido.php">Ver Contenido</a></li>
    
    <li><a href="publicaciones.php">Ver Publicaciones</a></li>

</ul>


<h1>El Juego de la semana</h1>

<ul>
    <li><a href="#">Cargar Juego</a></li>

    <li><a href="#">Eliminar Juego</a></li>

    <li><a href="#">Editar Juego</a></li>
        
    <!--<li><a href="http://trivia.matecocidogames.com/" target="_blank">Ver Juegos Cargados</a></li>-->
    <li><a href="#">Ver Juegos Cargados</a></li>
        
    <li><a href="#">Publicar Juego</a></li>

</ul>

<a href="../controllers/salir.php"><input type="button" value="salir"></a>
</section>
<?php
}else{
    echo "no puede ver el contenido";
    
}
?>
