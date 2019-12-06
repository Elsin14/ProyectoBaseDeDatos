<?php
include 'db.php';
class User extends DB{
    
    private $nombre;
    private $username;
    
    //Funcion para saber que existe el usuario
    public function userExists($user, $pass){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND contraseña = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    //Validar el objeto user
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombres'];
            $this->username = $currentUser['username']; 
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
}
?>