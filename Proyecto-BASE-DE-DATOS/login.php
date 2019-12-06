<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Smoof - Login</title>
    <link rel="stylesheet" href="estilos2.css">
  </head>
  <body>
      <header>
        <div style="color: white;" class="logo logo_main">SMOOF</div> 
    </header>

    <div class="login-box">
      <img src="img/3.jpg" class="avatar" alt="Avatar Image">
      <h1>Login</h1>
      
      <form class="" action="session.php" method="post">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <label for="username">Nombre de Usuario</label>
        <input type="text" placeholder="Usuario"            name="username">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña"     name="contraseña">
        
        <input type="submit" value="Ingresar">
        <center>
        <a href="registro.php">Crear cuenta</a><br>
        <a href="index.php">Volver</a><br>
        </center>
      </form>

    </div>
  </body>
</html>