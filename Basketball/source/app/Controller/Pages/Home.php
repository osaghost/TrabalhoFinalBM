<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Model\Entity\Organization;

class Home extends Page{

    /** 
    *  @return string;
    */
    
    public static function getHome(){
        //ORGANIZAÇÃO
       

        $content = View::render('pages/home',);
        //View::render('pages/home');
        return parent::getPage('Basketball Mapping', $content);
    }

}