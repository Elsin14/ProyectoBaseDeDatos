<?php

$servidor="localhost";
$nombrebd="compras";
$usuario="root";
$pass="";

$conexion = new mysqli($servidor,$usuario,$pass,$nombrebd);
if($conexion -> connect_error){
    die("Error de conexion");
}



?>