<?php
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

// composer autoload
require __DIR__.'/vendor/autoload.php';
// autoload do projeto
require __DIR__ . "/source/autoload.php";

use \Source\App\Controller\Web;
use CoffeeCode\Router\Router;

//URL DO PROJETO
define('URL', 'http://localhost/projetos/Basketball');

$router = new Router(URL);    

 /*                   
 * Controllers
 */
$router->namespace("Source\App\Controller");

/**
 * WEB
 */
$router->get("/", "Web:home");
$router->get("/registro", "Web:registro");
$router->get("/login", "Web:Login");
$router->get("/cadastro", "Web:cadastro");
$router->get("/lista", "Web:Listagem");

/**
 * API POST
 */
$router->post("/registro", "Api:cadastrarUsuario");
$router->post("/cadastro", "Api:cadastrarTime");
$router->post("/login", "Api:login");

/**
 * API GET
 */
//$router->get("/lista", "Api:listarTimes");


$router->dispatch();

/**
 * ERROS
 */
if($router->error()){
    $router->redirect($router->error());
}
?>
