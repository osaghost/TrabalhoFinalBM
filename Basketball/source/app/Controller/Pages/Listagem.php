<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Db\Connect;
use \PDO;
class Listagem extends Page{

    /** 
    *  @return string;
    */
    public static function getLista(){
        //ORGANIZAÇÃO
    

        $content = View::render('pages/listagem');
        //View::render('pages/home');
        return parent::getPage('Lista de times', $content);
    }

    public static function select(){

        $bd = Connect::getInstance();
        
        $query = "SELECT * FROM teams";
        
        $stmt = $bd->prepare($query);
        $teams  = $stmt->fetch();
        $stmt->execute();
        
    
        ;
        
        }

}