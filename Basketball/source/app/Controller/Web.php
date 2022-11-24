<?php

namespace Source\App\Controller;
//require __DIR__. "/Pages/Home.php";
use  \Source\App\Controller\Pages\Home;
use  \Source\App\Controller\Pages\Cadastro;
use  \Source\App\Controller\Pages\Listagem;

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