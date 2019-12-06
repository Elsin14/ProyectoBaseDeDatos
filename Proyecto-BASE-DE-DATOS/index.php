<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smoof - Web Comidas</title>
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
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="login.php">Comidas</a></li>
                            <li><a href="login.php">Ingresar</a></li>
                            <li><a href="#">Contáctenos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
    </div>    
            <h3 style="color: white;" class="texnegrita animated infinite swing">SMOOF </h3>
            <center>
            <img src="img/5.png" alt="" width="330" height="290"></img>
			<h2 class="texnegrita" style="color: white;">La comida es nuestro arte</h2>
			<center><i class="fas fa-star icono"></i><i class="fas fa-star icono"></i><i class="fas fa-star icono"></i><i class="fas fa-star icono"></i><i class="fas fa-star icono"></i></center>
            <a><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></a>
            <h4 style="color: white;" class="texnegrita">Ingresa o registrate para pedir:</h4>
					<article>
						<button id="btn-abrir-popup" class="btn-abrir-popup">Iniciar Sesión</button>
					</article>
			
					<div class="overlay" id="overlay">
						<div class="popup" id="popup">
							<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
							<h3>Iniciar Sesión</h3>
							<h4>y recibe un cupón de descuento.</h4>
							<form action="session.php" method="POST">
								<div class="contenedor-inputs">
									<input type="text" placeholder="Usuario"        name="username">
									<input type="password" placeholder="Contraseña"    name="contraseña">
								</div>
								<input type="submit" class="btn-submit" value="Ingresar">
							</form>
						</div>
					</div>
				</div>
            </center>
        <div class="contenido">
	<div>
		<section class="main row">
			<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
				<h3>¿QUÉ ESPERAS PARA ORDENAR?</h3>
                <div class="slider">
					<ul>
						<li><a href="comprar.php"><img src="https://www.kfc.com.pe/Imagenes/800x275/BANNERHOME_BBOXCLASSIC_1208X412PX%20(2).jpg" alt="" width="50" height="290"></li></a>
						<li><a href="comprar.php"><img src="https://www.kfc.com.pe/Imagenes/800x275/Banner_Duo_555x300.png" alt="" width="50" height="290"></li></a>
						<li><a href="comprar.php"><img src="https://www.kfc.com.pe/Imagenes/800x275/Mega%20Exclusivo%20Online%202%20-%20Banner_Poderoso_555x300.png" alt="" width="50" height="290"></li></a>
						<li><a href="comprar.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS9F58xn6Hiphwu_MLfurk7WsixJzT-jKbbk5OVSE-loBkpSWVG" alt="" width="50" height="290"></li></a>
					</ul>
				</div>

			</article>
			<article class="col-xs- col-sm-4 col-md-3 col-lg- col-md-3" >
				<h3>Ofertas </h3>
				<p>Aprovecha nuestras ofertas. Puedes pagar por la comida y el envio hasta el 45% menos.<br>
				Recuerda que nuestras ofertas son temporales y que no se vuelven a repetir</p>
				<img class="anuncioimg" src="https://s.libertaddigital.com/2016/05/24/combomc.jpg">
			</article>
		</section>
		<div class="row">
			<article class="col-xs-12 col-sm-4 col-md-4  col-md-3 pie_depag">
				<h3  class="pi">REDES SOCIALES</h3>
				<p>Puedes ver nuestras ofertas y los nuevos productos que ofrecemos en nuestras redes sociales: </p><br>
				<i class="icono fab fa-facebook"></i><a class="ico" href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFacebook</a><br><br>
				<i class="icono fab fa-facebook-messenger"></i><a class="ico" href="#">&nbsp&nbsp&nbsp&nbsp&nbspMessenger</a><br><br>
				<i class="icono fab fa-instagram"></i><a class="ico" href="#">&nbsp&nbsp&nbsp&nbsp&nbspInstagram</a><br><br>
				<i class="icono fab fa-whatsapp"></i><a class="ico" href="#">&nbsp&nbsp&nbsp&nbsp&nbspWhatsApp</a><br><br>

			</article>
			<article class="col-xs-12 col-sm-4 col-md-4  col-md-3 pie_depag" id="pie_depag">
				<h3  class="pi">CONTACTOS</h3>
				<p>Puedes llamar a nuestras operadoras para poder tener más informacion de nuestros servicios: </p><br>
				<p>Información de los productos:</p><br>
				<i class="icono fas fa-phone-volume"></i></i>&nbsp&nbsp&nbsp&nbsp&nbsp978347653&nbsp&nbsp/&nbsp&nbsp987690453
			</article>
			<article class="col-xs-12 col-sm-4 col-md-4  col-md-3 pie_depag">
				<h3 class="pi">Consultas o Recomendaciones: </h3>
				<p>Aquí puedes hacer las preguntas o reclamos que tengas: </p><br><br>
				<center><a class="bott" href="login.php">Dejar comentario</a></center>
			</article>
			<article class="col-xs-12 col-sm-4 col-md-4  col-md-3 pie_depag">

            </article>
            <article class="col-xs-12 col-sm-4 col-md-4  col-md-3 pie_depag">	
            </article>
		</div>
	<i class="fas fa-ellipsis-v btn-menu"></i>
	<script src="js/popup1.js"></script>
    <i class="fas fa-ellipsis-v btn-menu"></i>
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 	<script src="js/script.js"></script>
</body>
</html>