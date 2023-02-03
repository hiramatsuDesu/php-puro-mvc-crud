<br>
    <a href="<?php echo base_url('cargarJuego'); ?>">Cargar Juego</a>
    <br>
    <?php
    echo $header;
        //print_r($juego);
    ?>
    <br>
    <?php
    foreach($juego as $jueg):
    ?>
    <p>
        <?php
        echo $jueg['FECHA'];
        ?>
    </p>
    <p>
        <?php
        echo $jueg['CATEGORIA'];
        ?>
    </p>
    <p>
        <?php
        echo $jueg['DATOS'];
        ?>
    </p>
    <p>
        <?php
        echo $jueg['imagen'];
        ?>
    </p>
    <p>
        <?php
        echo $jueg['JUEGO'];
        ?>
    </p>
    <p>
        <?php
        $jueg['IDs'];
        ?>
    </p>
    <p>
    <a href="<?php echo base_url('borrar/'.$jueg['IDs']); ?>">Borrar</a>
    </p>
    <p>
    <a href="<?php echo base_url('editar/'.$jueg['IDs']); ?>">Editar</a>
    </p>

    <?php
    endforeach;
    echo $footer;
    ?>
