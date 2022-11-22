<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

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
            'conteudo' => $obOrganization->conteudo,
            'table' => $obOrganization->table,
        ]);
        //View::render('pages/home');
        return parent::getPage('Titulo sexo', $content);
    }

}