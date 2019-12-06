<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smoof - Registrarse</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
        <div class="logo logo_main">SMOOF</div> 
            <div class="nav">
                <div class="wrap">
                    <div class="logo logo_small">SMOOF</div>
                    <nav>
                        <ul>
                            <<li><a href="index.php">Inicio</a></li>
                            <li><a href="#">Comidas</a></li>
                            <li><a href="login.php">Ingresar</a></li>
                            <li><a href="#">Contáctenos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
    

    
    <section class="form-register">
        <h4>Ingrese sus datos</h4>
        <form action="insertar.php" method="post">
        <input tyle="color: white;" class="controls" type="text" id="nombres" placeholder="Ingrese Nombre"      name="nombres">
        <input class="controls" type="text" id="apellidos" placeholder="Ingrese Apellidos"                      name="apellido">

        <input class="controls" type="text" id="user" placeholder="Ingrese usuario"                             name="username">
        <input class="controls" type="password" id="codigo" placeholder="Ingrese contraseña"                    name="contraseña">

        <input class="controls" type="email" id="correo" placeholder="Ingrese correo"                           name="correo">
        <input class="controls" type="number" id="numero" placeholder="Ingrese teléfono"                        name="numero">

        <input class="botons" type="submit" value="Registrar">
        
        <p><a href="login.php">Ya tengo cuenta</a></p>
        </form>
    </section>
    
    


    <div class="logi">
        <center><h3 style="color: white;" class="texnegrita animated infinite swing">SMOOF </h3>
		<img src="img/5.png" alt="" width="330" height="290"></img>
		<h2 class="texnegrita" style="color: white;">Mejor sitio de comidas.</h2>
        <a><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></a></center>
    </div>
    <i class="fas fa-ellipsis-v btn-menu"></i>
	<script src="js/popup1.js"></script>
        
    <i class="fas fa-ellipsis-v btn-menu"></i>
    
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="js/script.js"></script>
</body>
</html>