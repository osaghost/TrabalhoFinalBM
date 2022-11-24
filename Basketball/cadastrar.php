<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Cadastro;
use \App\Model\Entity\Time;

//VALIDAÇÃO DO POST
if(isset($_POST['name'],$_POST['contact'],$_POST['modality'],$_POST['gender'],$_POST['state'],$_POST['city'])){
    $obTeam = new Time;
    $obTeam->name = $_POST['name'];
    $obTeam->contact = $_POST['contact'];
    $obTeam->modality = $_POST['modality'];
    $obTeam->gender = $_POST['gender'];
    $obTeam->state = $_POST['state'];
    $obTeam->city = $_POST['city'];
    $obTeam->cadastrar();

    header('location:index.php?status=sucess');
    exit;

};

//Imprime o front-end
echo Cadastro::getCadastro();
