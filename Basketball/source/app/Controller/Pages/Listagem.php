<?php

namespace Source\App\Controller\Pages;
use \Source\App\Db\Connect;
use \Source\App\Model\Entity\ListaOrganizada;
use \Source\App\Utils\View;

class Listagem {

    /** 
    *  @return string;
    */
    public static function getLista(){

        $obOrganization = new ListaOrganizada;

        return View::render('pages/listagem',[
            'listar' => $obOrganization->listar(),  
        ]);
       // View::render($content);   $bd =  Connect::getInstance();
       //return parent::getPage('Listar Times', $content);
        }
    }


