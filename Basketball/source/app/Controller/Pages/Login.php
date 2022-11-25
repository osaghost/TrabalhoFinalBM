<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Db\Connect;

class Login{

    /** 
    *  @return string;
    */
    
    public static function getLogin(){

        return View::render('pages/login');
        //View::render('pages/home');
    
    }

    public static function logar(){
        $bd = Connect::getInstance();

        $user = ($_POST['user']);
        $password = ($_POST['password']);

        $sql = $bd->query("SELECT  user and password FROM users WHERE user = '{$user}' and password ='{$password}'");
        $resultado = $bd->prepare($sql);
        $resultado->bindParam(1, $user);
        $resultado->bindParam(2, $password);
        $resultado->execute();

        if($numRegister !== 0){
            $_SESSION['name'] = $user;
            header('Location: http://localhost/projetos/Basketball');
            exit();
        }else{
            header('Location: http://localhost/projetos/Basketball/login');
            exit();
        }

       
    }
}