<?php
require __DIR__ ."../vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router("URL_BASE");

// Controllers
$router->namespace("app/Controllers");

$router->group(null);
$router->get("/", "ClienteController:store");

$router->group("ooops");
$router->get("/{errcode}", "ClienteController::error");

// ClinteController

$router->dispatch();
if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}



