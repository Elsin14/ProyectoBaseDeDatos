<?php
include_once 'user.php';
include_once 'user_session.php';

//Creacion de objetos para inicializar sesion y poder redireccionarlo

$userSession = new UserSession();
$user = new User();
if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'home.php';
}else if(isset($_POST['username']) && isset($_POST['contraseña'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['contraseña'];
    //Validacion

    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'home.php';
    }else{
        //"No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login.php';
    }
}else{
    //echo "login";
    include_once 'login.php';
}
?>