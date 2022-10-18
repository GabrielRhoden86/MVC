<?php
require __DIR__ . '/vendor/autoload.php';

use \App\controller\Pages\Home;
use App\http\Router;
use App\http\Response;


define('URL', 'http://localhost:8080/MVC/');

$objRouter = new Router(URL);

$objRouter->get('/',[
    function(){
        return new Response(200, Home::getHome());
      
    }
]);

#echo "<pre>";
#print_r($objRouter);
#echo "</pre>";
#exit;


echo Home::getHome();
