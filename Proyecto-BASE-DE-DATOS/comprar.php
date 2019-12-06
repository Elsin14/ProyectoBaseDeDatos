<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smoof - Comidas</title>
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
                            <li><a href="comprar.php">Comprar</a></li>
                            <li><a href="session.php">Cuenta</a></li>
                            <li><a href="logout.php" >Cerrar Sesión</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
          <div class="row">
        <article  class="col-xs-12 col-sm-8 col-md3  color1 col-md-4"><br><br>
            <center>
			<?php
                include("conexion.php");
                $resultado = $conexion ->query("SELECT * FROM productos WHERE id=1")or die($conexion -> error);
                if($fila = mysqli_fetch_array($resultado)){
                ?>
				<br>
                <a href="pedidos2.php?id=<?php echo $fila['id'];?>"><img src="imagenes/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a><br>
                      <h3><a  href="pedidos2.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></h3><br>
                      <p><?php echo $fila['descripcion'];?></p><br>
                      <b><p style="text-align: center; color:#167FEE;">PRECIO</p></b><br>
                      <center><b><p style="text-align: center; color:#167FEE;">S/.<?php echo $fila['precio'];?></p></center></b><br>
                      <center><a class="bott" href="pedidos2.php?id=<?php echo $fila['id'];?>">Pedir</a></center>
                <?php  } ?>
                </center>
		</article>
        <div  class="col-xs-12 col-sm-6 col-md3  col-md-4 "><br><br>
        <center>
			<?php
			include("conexion.php");
			$resultado = $conexion ->query("SELECT * FROM productos WHERE id=2")or die($conexion -> error);
			if($fila = mysqli_fetch_array($resultado)){
			?>
			<br>
			<a href="pedidos2.php?id=<?php echo $fila['id'];?>"><img src="imagenes/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a><br>
				  <h3><a href="pedidos2.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></h3><br>
				  <p><?php echo $fila['descripcion'];?></p><br>
                  <b><p style="text-align: center; color:#167FEE;">PRECIO</p></b><br>
				  <b><p style="text-align: center;  color:#167FEE;">S/.<?php echo $fila['precio'];?></p></b><br>
				  <center><a class="bott" href="pedidos2.php?id=<?php echo $fila['id'];?>">Pedir</a></center>
            <?php  } ?>
            </center>
		</div>	
        <aside class="col-xs-12 col-sm-6 col-md3  color1 col-md-4 "><br><br>
        <center>
			<?php
                include("conexion.php");
                $resultado = $conexion ->query("SELECT * FROM productos WHERE id=3")or die($conexion -> error);
                if($fila = mysqli_fetch_array($resultado)){
                ?>
				<br>
                <a href="pedidos2.php?id=<?php echo $fila['id'];?>"><img src="imagenes/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a><br>
                      <h3><a href="pedidos2.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></h3><br>
                      <p><?php echo $fila['descripcion'];?></p><br>
                      <b><p style="text-align: center; color:#167FEE;">PRECIO</p></b><br>
                      <b><p style="text-align: center; color:#167FEE;">S/.<?php echo $fila['precio'];?></p></b><br>    
                      <center><a class="bott" href="pedidos2.php?id=<?php echo $fila['id'];?>">Pedir</a></center>
                <?php  } ?>
                </center>
		</aside>	
        <article class="col-xs-12 col-sm-6 col-md3  col-md-4"><br>
        <center>
			<?php
                include("conexion.php");
                $resultado = $conexion ->query("SELECT * FROM productos WHERE id=4")or die($conexion -> error);
                if($fila = mysqli_fetch_array($resultado)){
                ?>
		        <br>
                <a href="pedidos2.php?id=<?php echo $fila['id'];?>"><img class="imagen" src="imagenes/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a><br>
                      <h3><a href="shop-single.php"><?php echo $fila['nombre'];?></a></h3><br>
                      <p><?php echo $fila['descripcion'];?></p><br>
                      <b><p style="text-align: center; color:#167FEE;">PRECIO</p></b><br>
                      <b><p style="text-align: center; color:#167FEE;">S/.<?php echo $fila['precio'];?></p></b><br>
                      <center><a class="bott" href="pedidos2.php?id=<?php echo $fila['id'];?>">Pedir</a></center>
                <?php  } ?>
                </center>
		</article>
        <article class="col-xs-12 col-sm-6 col-md3  col-md-4 "><br>
        <center>
			<?php
                include("conexion.php");
                $resultado = $conexion ->query("SELECT * FROM productos WHERE id=5")or die($conexion -> error);
                if($fila = mysqli_fetch_array($resultado)){
                ?>
		        <br>
                <a href="pedidos2.php?id=<?php echo $fila['id'];?>"><img class="imagen" src="imagenes/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a><br>
                      <h3><a href="shop-single.php"><?php echo $fila['nombre'];?></a></h3><br>
                      <p><?php echo $fila['descripcion'];?></p><br>
                      <b><p style="text-align: center; color:#167FEE;">PRECIO</p></b><br>
                      <b><p style="text-align: center; color:#167FEE;">S/.<?php echo $fila['precio'];?></p></b><br>
                      <center><a class="bott" href="pedidos2.php?id=<?php echo $fila['id'];?>">Pedir</a></center>
                <?php  } ?>
        </center>
		</article>
        <article class="col-xs-12 col-sm-6 col-md3  col-md-4 "><br>
        <center>
			<?php
                include("conexion.php");
                $resultado = $conexion ->query("SELECT * FROM productos WHERE id=6")or die($conexion -> error);
                if($fila = mysqli_fetch_array($resultado)){
                ?>
		        <br>
                <a href="pedidos2.php?id=<?php echo $fila['id'];?>"><img class="imagen" src="imagenes/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a><br>
                      <h3><a href="shop-single.php"><?php echo $fila['nombre'];?></a></h3><br>
                      <p><?php echo $fila['descripcion'];?></p><br>
                      <b><p style="text-align: center; color:#167FEE;">PRECIO</p></b><br>
                      <b><p style="text-align: center; color:#167FEE;">S/.<?php echo $fila['precio'];?></p></b><br>
                      <center><a class="bott" href="pedidos2.php?id=<?php echo $fila['id'];?>">Pedir</a></center>
                <?php  } ?>
        </center>
		</article>
	</div>


    <i class="fas fa-ellipsis-v btn-menu"></i>
	<script src="js/popup1.js"></script>
        
    <i class="fas fa-ellipsis-v btn-menu"></i>
    
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="js/script.js"></script> 
</body>
</html>