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
        $obOrganization = new Organization;

        $content = View::render('pages/home',[
            'name' =>  $obOrganization->name,
            'description' =>  $obOrganization->description,
        ]);
        //View::render('pages/home');
        return parent::getPage('Basketball Mapping', $content);
    }

}