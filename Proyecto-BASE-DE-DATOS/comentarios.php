<!DOCTYPE html>
<html lang="en">
<head>
        <script>
        function alerta_comentario () {
        alert ("Comentario enviado. Gracias.");
        }
        </script>
        <meta charset="UTF-8">
        <title>Smoof - Web Comidas - Tu opinión</title>
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
                            <li><a href="index2.php">Inicio</a></li>
                            <li><a href="comidas.php">Comida</a></li>
                            <li><a href="session.php">Cuenta</a></li>
                            <li><a href="logout.php" >Cerrar Sesión</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
    <form action="validar_comentario.php" method="post">
        <H2>TU OPINIÓN</H2>
        <input type="email" placeholder="Ingrese correo"                     name="email"   >
        <input type="number" placeholder="Ingrese Teléfono"                  name="telefono" >
        <textarea cols="30" rows="10" placeholder="Ingrese un comentario" name="comentario"></textarea>
        <input type="submit" id="but_t" class="but_t" value="Enviar" onClick=alerta_comentario()>
    </form>
    
    <i class="fas fa-ellipsis-v btn-menu"></i>
	<script src="js/popup1.js"></script>
        
    <i class="fas fa-ellipsis-v btn-menu"></i>
    
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="js/script.js"></script>
</body>
</html>