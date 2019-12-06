<?php
    include("conexion.php");
    $resultado = $conexion ->query("SELECT * FROM productos WHERE id=".$_GET['id'])or die($conexion->error);
    if(mysqli_num_rows($resultado)>0){
        $fila = mysqli_fetch_row($resultado);
    }else{
        header("location:comprar.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script>
    function alerta_pedido () {
    alert ("Pedido realizado. Gracias por su preferencia.");
    }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smoof - Pedidos</title>
    <link rel="stylesheet" href="estilos2.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="content">

        <h1 class="logo">Pedir <span>Ahora</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div style="color: white;" class="contact-form">
                <form action="validar_pedido.php" method="post">
                    <p>
                        <label >Nombre de usuario:</label>
                        <input  type="text" name="username">
                    </p>
                    <p>
                        <label >Distrito:</label>
                        <p>
                    	<div class="box">
	                       <select name="distrito">
		                       	<option value="Surco" >Surco</option>
		                       	<option value="Miraflores" >Miraflores</option>
		                       	<option value="Santa Anita" >Santa Anita</option>
                                <option value="La Molina" >La Molina</option>
                                <option value="Ate" >Ate</option>
                                <option value="Barranco" >Barranco</option>
                                <option value="Chorrilos" >Chorrillos</option>
                                <option value="Lince" >Lince</option>
	                       </select>
	                    </div>
                    </p>
                    <p>
                        <p>
                        <label style="color: white;">Comida: </label>
                        <input type="text" name="nom_pedido" value="<?php echo $fila[1];?>" readonly="readonly">
                        </p>
                    </p>
                    <p>
                        <label style="color: white;">Precio: </label>
                        <input type="text" name="precio" value="<?php echo $fila[3];?>" readonly="readonly">
                    </p>
                    <p>
                        <label style="color: white;">Dirección: </label>
                        <input type="text" name="direccion">
                    </p>
                    <p class="block">
                       <label style="color: white;">Mensaje:</label> 
                        <textarea type="text" name="mensaje" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button onClick=alerta_pedido()>
                        PEDIR
                        </button>
                    </p>
                </form>
            </div>
            <div style="color:white" class="contact-info">
                
                <img src="imagenes/<?php echo $fila[4];?>"></img>
                <h4>Más información: </h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Ubicación: </li>
                    <li><i class="fas fa-phone"></i> 978347653  /  987690453 </li>
                    <li><i class="fas fa-envelope-open-text"></i> Smoof@gmail.com</li>
                </ul>
                <p>Si incluye recargo para envios recomendamos informar el lugar exacto y verdadero, para así evitar molestias.
                </p>
                <p><a style="color:white" href="index2.php">Volver Al Inicio</a></p>
            </div>
        </div>

    </div>

</body>
</html>