<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Model\Entity\OrganizationCadaster;

class Cadastro extends Page{

    /** 
    *  @return string;
    */
    
    public static function getCadastro(){
        //ORGANIZAÇÃO
        $obOrganization = new OrganizationCadaster;

        $content = View::render('pages/registrationTeams',[
            'name' =>  $obOrganization->name,
            'description' =>  $obOrganization->description,
            'conteudo' => $obOrganization->conteudo,
                ]);
        //View::render('pages/home');
        return parent::getPage('Página de cadastro', $content);
    }

}