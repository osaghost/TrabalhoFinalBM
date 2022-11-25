<?php


namespace Source\App\Controller;
//require __DIR__. "/Pages/Home.php";

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
        Cadastro::cadastrar();
}

    public function Listagem() {
        echo Listagem::getLista();
        Listagem::select();
    }

    public function registro() {
        echo Registro::getRegistro();
        Registro::registrar();
    }
    public function login() {
        echo Login::getLogin();
        Login::logar();
    }
}