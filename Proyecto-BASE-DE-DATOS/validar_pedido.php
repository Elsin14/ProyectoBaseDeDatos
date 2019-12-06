<?php  

$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$db = "compras";
	
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
	
if($conexion->connect_error){
	die("Conexión fallida: " . $conexion->connect_error);
}
if(isset($_POST['username']) && !empty($_POST['username']) &&
	isset($_POST['distrito']) && !empty($_POST['distrito']) &&
	isset($_POST['nom_pedido']) && !empty($_POST['nom_pedido']) &&
	isset($_POST['precio']) && !empty($_POST['precio']) &&
	isset($_POST['direccion']) && !empty($_POST['direccion']) &&
	isset($_POST['mensaje']) && !empty($_POST['mensaje'])){

	$sql=mysqli_connect($servidor,$nombreusuario,$password,$db);
	mysqli_query($conexion,("INSERT INTO pedidos (username,distrito,nom_pedido,precio,direccion,mensaje) VALUES ('$_POST[username]','$_POST[distrito]','$_POST[nom_pedido]','$_POST[precio]','$_POST[direccion]','$_POST[mensaje]')"));
	
	header("location:comprar.php");
}else{ 
		die("Error al insertar datos: " . $conexion->error);
		}
		$conexion->close();
?>