<?php


namespace Source\App\Controller;
//require __DIR__. "/Pages/Home.php";
 session_start();
use  \Source\App\Db\Database;
use  \Source\App\Controller\Pages\Home;
use  \Source\App\Controller\Pages\Cadastro;
use  \Source\App\Controller\Pages\Listagem;
use  \Source\App\Controller\Pages\Registro;
use  \Source\App\Controller\Pages\Login;
use  \Source\App\Model\Entity\OrganizationCadaster;
use  \Source\App\Controller\teamList;




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

    public function registro() {
        echo Registro::getRegistro();
    }
    public function login() {
        echo Login::getLogin();
    }
}