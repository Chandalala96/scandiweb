<?php 

require_once __DIR__.'./vendor/autoload.php';


use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));



$app->router->get('/', [SiteController::class, 'home']);
$app->router->post('/', [SiteController::class, 'deleteProduct']);

$app->router->get('/addproduct', [SiteController::class, 'addproduct']); 
$app->router->post('/addproduct', [SiteController::class, 'insertProduct']);






$app->run();

