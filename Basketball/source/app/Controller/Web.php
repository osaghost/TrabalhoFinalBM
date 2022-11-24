<?php


namespace Source\App\Controller;
//require __DIR__. "/Pages/Home.php";
 require __DIR__ . "/../Model/Entity/OrganizationCadaster.php";
use  \Source\App\Db\Database;
use  \Source\App\Controller\Pages\Home;
use  \Source\App\Controller\Pages\Cadastro;
use  \Source\App\Controller\Pages\Listagem;
use  \Source\App\Model\Entity\OrganizationCadaster;

use \PDO;




class Web{

    public function home() {
        echo Home::getHome();
    }

    public function cadastro() {
        echo Cadastro::getCadastro();
}

    public function Listagem() {
        echo Listagem::getLista();
    }

    public function register() {
    
    }
}