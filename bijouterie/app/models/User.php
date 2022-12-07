<?php

class User extends database{
    function __construct() {}

    public function login($email,$pass){
        $sql = "SELECT `id_u`, `name`, `email`, `pass` FROM `user` WHERE email=:email and pass=:mdp";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mdp', $pass);
        $stmt->execute();
        if($stmt->rowCount()==1){
            $res=$stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id']=$res['id_u'];
            $_SESSION['name']=$res['name'];
            $_SESSION['email']=$res['email'];
            $_SESSION['password']=$res['password'];
            return 1;
        }
        else{
            return 0;
        }
    }

    public function logout(){
        session_destroy();
        header("location:../Pages/login");
    }

}
