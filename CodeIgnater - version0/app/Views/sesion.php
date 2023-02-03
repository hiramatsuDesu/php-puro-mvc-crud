
<?php
echo $header;  
?>       

<main class="container">
        <section class="login__section">
            <div class="login__img">
                <img src="../css/img/telam.jpg" alt="img telam">
            </div>
            
            <div class="login__form">
                <div class="login-box">
                    <img class="avatar" src="../css/img/telamIcono.jpg" alt="telam icono">

                    <div class="login-user">
                        <h3 class="user-access">Bienvenidos a:<br>
                         Juegos de Telam</h3>
                        
                        
                        <form action="<?php echo site_url('/consultar') ?>" method="post">
                            <label class="user-label labelOne">Ingrese Usuario</label>
                            <input type="text" name="user" maxlenght="6" required><br>
                        
                            <label class="user-label labelTwo">Ingrese Clave</label>
                            <input type="password" name="clave" maxlenght="6" required><br>
                        
                            <input class="user-submit" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
echo $footer;  
?>  