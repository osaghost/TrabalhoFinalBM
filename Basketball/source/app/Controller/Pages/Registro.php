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

    
}