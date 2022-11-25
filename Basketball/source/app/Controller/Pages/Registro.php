<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Db\Connect;

class Registro{

    /** 
    *  @return string;
    */
    
    public static function getRegistro(){
      
        

        return View::render('pages/registro');
        //View::render('pages/home');+
    
    }

    public static function registrar(){
       
    session_start();

    $db =  Connect::getInstance();

    if(!is_null($_POST['name'])){
        $name = $_POST['name'];
        $usuario = $_POST['user'];
        $password = $_POST['password'];
        $lastupdated = date('Y-m-d H:i:s');

        $insert = "INSERT INTO users (name, user, password, date_time) 
                VALUES ('{$name}','{$usuario}','{$password}','$lastupdated')";

        try{
            $query = $db->query($insert);
            var_dump(
                $query,
                $db->lastInsertId(),
                $query->errorInfo()
            );
        }catch (PDOException $exception) {
            var_dump($exception);
        }

        header('Location:http://localhost/projetos/Basketball/login');

        }

        }
    
}