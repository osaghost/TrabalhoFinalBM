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


}