<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;
use \Source\App\Model\Entity\OrganizationList;
use \Source\App\Db\Connect;
use \PDO;
class Listagem extends Page{

    /** 
    *  @return string;
    */
    public static function getLista(){
        //ORGANIZAÇÃO
        $obOrganization = new OrganizationList;

        $content = View::render('pages/listagem',[
            'name' =>  $obOrganization->name,
            'description' =>  $obOrganization->description,
            'table' => $obOrganization->table,
                ]);
        //View::render('pages/home');
        return parent::getPage('Lista de times', $content);
    }

    public static function select(){

        $bd = Connect::getInstance();
        
        $query = "SELECT * FROM teams";
        
        $stmt = $bd->prepare($query);
        $teams  = $stmt->fetch();
        $stmt->execute();
        
        $datadb = null;
        $datadb = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt = null;
        
        $table  = '<table>';
        $table .= '<thead>';
        $table .= '<tr>';
        $table .= '<td>Nome do Time</td>';
        $table .= '<td>Contato</td>';
        $table .= '<td>Genero</td>';
        $table .= '<td>Estado</td>';
        $table .= '<td>Cidade</td>';
        $table .= '<td>Ações</td>';
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';
        
        foreach($teams as $team){
            $table .= '<tr>';
                $table .= "<td><input type='checkbox' value='{$team->id}'></td>";
                $table .= "<td>{$team->id}</td>";
                $table .= "<td>{$team->name}</td>";
                $table .= "<td>{$team->phone}</td>";
                $table .= "<td>{$team->address}</td>";
                $table .= "<td>{$team->mail}</td>";
            $table .= '</tr>';
        }
        
        echo json_encode($team);
        
        ;
        
        }

}