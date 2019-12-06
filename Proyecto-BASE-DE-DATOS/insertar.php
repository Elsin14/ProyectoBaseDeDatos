<?php  

$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$db = "compras";
	
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);
	
if($conexion->connect_error){
	die("Conexión fallida: " . $conexion->connect_error);
}
if(isset($_POST['nombres']) && !empty($_POST['nombres']) &&
	isset($_POST['apellido']) && !empty($_POST['apellido']) &&
	isset($_POST['username']) && !empty($_POST['username']) &&
	isset($_POST['contraseña']) && !empty($_POST['contraseña']) &&
	isset($_POST['correo']) && !empty($_POST['correo']) &&
	isset($_POST['numero']) && !empty($_POST['numero'])){

	$sql=mysqli_connect($servidor,$nombreusuario,$password,$db);
	mysqli_query($conexion,("INSERT INTO usuarios (nombres,apellido,username,contraseña,correo,numero) VALUES ('$_POST[nombres]','$_POST[apellido]','$_POST[username]','$_POST[contraseña]','$_POST[correo]','$_POST[numero]')"));
	
	header("location:login.php");

}else{ 
		die("Error al insertar datos: " . $conexion->error);
		}
		$conexion->close();
?>