<?php  

$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$db = "compras";
	
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
	
if($conexion->connect_error){
	die("Conexión fallida: " . $conexion->connect_error);
}
if(isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['telefono']) && !empty($_POST['telefono']) &&
	isset($_POST['comentario']) && !empty($_POST['comentario'])){

	$sql=mysqli_connect($servidor,$nombreusuario,$password,$db);
	mysqli_query($conexion,("INSERT INTO comentarios (email,telefono,comentario) VALUES ('$_POST[email]','$_POST[telefono]','$_POST[comentario]')"));
	
	header("location:index2.php");
}else{ 
		die("Error al insertar datos: " . $conexion->error);
		}
		$conexion->close();
?>