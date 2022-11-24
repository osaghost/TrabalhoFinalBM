<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Model\Entity\OrganizationCadaster;

class Listagem extends Page{

    /** 
    *  @return string;
    */
    
    public static function getLista(){
        //ORGANIZAÇÃO
        $obOrganization = new OrganizationCadaster;

        $content = View::render('pages/listagem',[
            'name' =>  $obOrganization->name,
            'description' =>  $obOrganization->description,
            'conteudo' => $obOrganization->conteudo,
                ]);
        //View::render('pages/home');
        return parent::getPage('Lista de times', $content);
    }

}