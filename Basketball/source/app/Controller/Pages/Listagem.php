<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Model\Entity\OrganizationCadaster;
use \Source\App\Model\Entity\Time;

class Listagem extends Page{

    /** 
    *  @return string;
    */
    public static function getLista(){
        //ORGANIZAÇÃO
        $obOrganization = new OrganizationCadaster;

        $content = View::render('pages/listagem',[
            'name' =>  $obOrganization->name,
            'description' =>  $obOrganization->description,
            'conteudo' => $obOrganization->conteudo,
                ]);
        //View::render('pages/home');
        return parent::getPage('Lista de times', $content);
    }

    public Request $request ;

    public static function insertTeam($request){
        //DADOS DO POST
        $postvars = $request->getPostVars();

        $obTeam = new Time;
        $obTeam->name = $postvars['name'];
        $obTeam->contact = $postvars['contact'];
        $obTeam->modality = $postvars['modality'];
        $obTeam->gender = $postvars['gender'];
        $obTeam->state = $postvars['state'];
        $obTeam->city = $postvars['city'];
        $obTeam->cadastrar();

        return self::getLista();
    }


}