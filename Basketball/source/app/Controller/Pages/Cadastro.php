<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Model\Entity\OrganizationCadaster;
use \Source\App\Db\Connect;
use \PDO;

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

    public static function cadastrar(){
    


    $bd = Connect::getInstance();

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $modality = $_POST['modality'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $city = $_POST['city'];
   
  
   
    if (!empty($name) && !empty($contact) && !empty($modality) && !empty($gender) && !empty($state) && !empty($city)){
        $insert = "INSERT INTO teams (team_name, contact, modality, gender, state, city) 
        VALUES ('{$name}','{$contact}','{$modality}','{$gender}','{$state}','{$city}')"; 
 
        try{
        $query = $bd->query($insert);
    /** var_dump(
    *        $query,
    *        $bd->lastInsertId(),
    *        $query->errorInfo()
    *   );
    */      
    }catch (PDOException $exception) {
    //var_dump($exception);
    } 
    
   
    }
    
    
    
    }
             
}
    

