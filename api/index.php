<?php
/**
*
* Proyecto Integrador - Universidad de Antioquia
* Leyes Traductor
* 2013
* 
**/

//Require the Slim Framework
require 'Slim/Slim.php';

//Register Slim auto-loader
\Slim\Slim::registerAutoloader();

//Instantiate a Slim application
$app = new \Slim\Slim();

//get methods
$app->get('/leyes', 'getLeyes');


/***
* Functions
**/

//get all Leyes
function getLeyes() {
        //TODO: call mongodb
        echo '{"nombre":"Ley #1"}'; 
}

//Run the Slim application
$app->run();

?>