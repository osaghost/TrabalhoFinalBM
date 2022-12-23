<?php

namespace Source\App\Controller;
use  \Source\App\Db\Connect;
use PDO;
class Api{

    public static function cadastrarTime() {

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
            header('Location:http://localhost/projetos/Basketball');
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
    public static function cadastrarUsuario() {
        
        $db =  Connect::getInstance();
        
        if(!is_null($_POST['name'])){
            $name = $_POST['name'];
            $usuario = $_POST['user'];
            $password = $_POST['password'];
            $lastupdated = date('Y-m-d H:i:s');
        
            $insert = "INSERT INTO users (name, user, password, date_time) 
                        VALUES ('{$name}','{$usuario}','{$password}','$lastupdated')";
        
            try{
                $query = $db->query($insert);
                var_dump(
                    $query,
                    $db->lastInsertId(),
                    $query->errorInfo()
                    
                ); if($numRegister !== 0){
                    session_start();
                    $_SESSION['name'] = $usuario;
                    //echo  $_SESSION['name'];
                 }
              }
            catch (PDOException $exception) {
                var_dump($exception);
            }
        
            header('Location:http://localhost/projetos/Basketball/login');
        
            }
        
    }
    public static function login() {

        $user = ($_POST['user']);
        $password = ($_POST['password']);

        $bd = Connect::getInstance();

        $select = "SELECT * FROM users WHERE user= '{$user}'AND password= '{$password}'";

        try {
            $query = $bd->query($select);
            var_dump([
                $query, 
                $numRegister = $query->rowCount(),
                $query->fetchAll()
            ]);
            if($numRegister !== 0){
                session_start();
                $_SESSION['name'] = $user;
                //echo  $_SESSION['name'];
                header('Location: http://localhost/projetos/Basketball');
                
   
            }else{
                header('Location: http://localhost/projetos/Basketball/login');
            
            }

        } catch (PDOException $exception){
            var_dump($exception);
        }
    
       
    }
    public static function logout() {
        session_start();
        session_destroy($_SESSION["name"]);
    }
    public static function listarTimes(){

        $bd =  Connect::getInstance();
     
        $listagem = $bd->prepare("SELECT * FROM teams");
        $listagem->execute();
        while ($lista = $listagem->fetch(PDO::FETCH_ASSOC)) {
            echo "<div>";
            echo "<table>";
            
            echo "<tbody>";
            echo "<tr>";
            echo "<td> " . $lista['team_id'] . " </td>";
            echo "<td> " . $lista['team_name'] . " </td>";
            echo "<td> " . $lista['contact'] . " </td>";
            echo "<td> " . $lista['modality'] . " </td>";
            echo "<td> " . $lista['gender'] . " </td>";
            echo "<td> " . $lista['state'] . " </td>";
            echo "<td> " . $lista['city'] . " </td>";
            echo "<tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
       // $query = $bd->query("SELECT * FROM teams");
       // $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
       // foreach($resultado as $item){
       //     $item['team_name'];
       // }
    }
}