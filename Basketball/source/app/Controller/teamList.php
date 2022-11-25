<?php
namespace Source\App\Controller;

use \Source\App\Db\Connect;
use \PDO;
class teamList{

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

echo json_encode($datadb);

;

}

}
