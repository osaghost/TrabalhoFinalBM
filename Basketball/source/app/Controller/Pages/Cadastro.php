<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Db\Connect;
use \PDO;

class Cadastro extends Page{

    /** 
    *  @return string;
    */
    public static function getCadastro(){
        //ORGANIZAÇÃO
       
        $content = View::render('pages/registrationTeams');

        return parent::getPage('Página de cadastro', $content);

 }

             
}
    

