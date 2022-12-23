<?php

namespace Source\App\Model\Entity;
use \Source\App\Db\Connect;
use PDO;
class ListaOrganizada{

    
    /**
     * Nome da organização
     * @var string
     */

   public function listar(){
            $bd =  Connect::getInstance();
            $sql = "SELECT * FROM teams ORDER BY team_id ASC";   
            $result = $bd->query($sql);
            
            $html = '';
            $html = '  
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Lista de times</title>
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
              </head>
              <body class="bg-dark text-light">
            <div class="container">
        <header>
        <nav class="navbar navbar-expand-lg bg-danger p-2   py-4" style="--bs-bg-opacity: .8;">
            <div class="container-fluid">
              <a class="navbar-brand " href="http://localhost/projetos/Basketball">BPT</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://localhost/projetos/Basketball">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/projetos/Basketball/cadastro">
                      Cadastre seu time
                    </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" style="padding-right: 530px;" href="http://localhost/projetos/Basketball/lista">
                      Lista de equipes
                    </a>
                  </li>   
                 
                      <button class="btn bg-dark btn-outline-danger"  style="padding-left:15px ;padding-right:15px" type="">
                      <a href="http://localhost/projetos/Basketball/login" class="link-danger" style="position: relative;">
                            Log in
                     </a>
                        
                        
                      </button>
        
                      <button class="btn  bg-dark btn-outline-danger"  style="padding-left:15px ;padding-right:15px" type="">
                      <a href="http://localhost/projetos/Basketball/registro" class="link-danger" style="position: relative;">
                        Register
                        </a>
                      </button>
                 
        
                </ul>
              </div>
            </div>
          </nav>
        </header>';
            $html .= "<table class='table table-dark table-striped'>";
            $html .= "<thead>";
            $html .= "<tr>";
            $html .= "<th>#</th>" ;   
            $html .= "<th>Nome do Time</th>";
            $html .= "<th>Contato</th>" ;
            $html .= "<th>Categoria</th>" ;
            $html .= " <th>Genêro</th>";
            $html .= "<th>Estado</th>";
            $html .= "<th>Cidade</th>";
            $html .= "</tr>"  ;
            $html .= "</thead>" ;
            while ($lista = $result->fetch(PDO::FETCH_ASSOC)) {
                $html .= "<tbody>";
                $html .= "<tr>";
                $html .= "<td> " . $lista['team_id'] . "</td>";
                $html .= "<td> " . $lista['team_name'] . "</td>";
                $html .= "<td> " . $lista['contact'] . "</td>";
                $html .= "<td> " . $lista['modality'] . "</td>";
                $html .= "<td> " . $lista['gender'] . "</td>";
                $html .= "<td> " . $lista['state'] . "</td>";
                $html .= "<td> " . $lista['city'] . "</td>";
                $html .= "<tr> ";
                $html .= "</tbody> ";

                  }
                  $html .= "</table> ";
                  echo $html;

 }
}
   