<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smoof - Web Comidas - Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
        <div class="logo logo_main">SMOOF <p style="float: right; font-size: 35px;" ><?php echo $user->getNombre();  ?></p></div>
            <div class="nav">
                <div class="wrap">
                    <div class="logo logo_small">SMOOF</div>
                    <nav>
                        <ul>
                            <li><a href="index2.php">Inicio</a></li>
                            <li><a href="comprar.php">Comidas</a></li>
                            <li><a href="session.php">Cuenta</a></li>
                            <li><a href="logout.php" >Cerrar Sesión</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
    <div class="contenido">
        <div class="container">
            <section class="main row">
                <article class="col-xs-12 col-sm-8 col-md-4 col-lg4">
                    <center><li><img src="img/6.png" alt="" width="290" height="290"></li><br><br>
                    <a class="bott" href="logout.php">Cerrar Sesión</a></center><br><br><br>
                </article>
                <article class="col-xs-12 col-sm-6 col-md-8 col-lg- col-md-3 hello" >
                    <h3><?php echo $user->getNombre();  ?> Bienvenido(a) a SMOOF</h3><br><br>
                    <p>De parte de toda la comunidad de SMOOF te damos la bienvenida a nuestra web, aprovecha
                        nuestras ofertas que tenemos en este momento:<br><br>
                        &nbsp&nbsp&nbsp 1- Tendrás descuentos en todas nuestras comidas.<br>
                        &nbsp&nbsp&nbsp 2- Acceso a nuevas opciones.<br>
                        <br><br>
                        Ahora puedes comprar comida de manera más eficiente, y rápida.
                        <a href="comidas.php"> Ir a comprar</a></a>
                    </p>
                </article>
            </section>   
        </div> 
        <i class="fas fa-ellipsis-v btn-menu"></i>
	    <script src="js/popup1.js"></script>
        
        <i class="fas fa-ellipsis-v btn-menu"></i>
    
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
         <script src="js/script.js"></script> 
</body>
</html>