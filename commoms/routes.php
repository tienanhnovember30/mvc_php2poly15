<?php

use App\Controllers\LoginController;
use App\Controllers\admin\UserController;
use App\Controllers\admin\ProductController;
use App\Controllers\admin\CateController;
use App\Controllers\admin\MainController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
$router = new RouteCollector();
use Phroute\Phroute\Exception\HttpRouteNotFoundException;




$router->filter('auth', function(){    
    if(!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH])){
        header('location: ' . BASE_URL . 'login');
        die;
    }
});




$router->get('/', [LoginController::class, "index"]);
$router->post('/', [LoginController::class, "postLogin"]);
$router->post('/registr', [LoginController::class, "registr"]);
$router->get('/logout', [LoginController::class, "logOut"]);



$router->group(['prefix' => 'admin','before' => 'auth' ], function($router){

$router->get('/', [MainController::class, "index"] );



$router->group(['prefix' => 'user'], function($router){
    $router->get('/', [UserController::class, "index"] );
    $router->get('/add', [UserController::class, "addUser"] );
    $router->post('/add', [UserController::class, "saveUser"] );
    $router->get('/edit/{id}', [UserController::class, "editUser"] );
    $router->post('/edit/{id}', [UserController::class, "saveEditUser"] );
    $router->get('/{id}', [UserController::class, "deleteUser"] );
});

$router->group(['prefix' => 'product'], function($router){
    $router->get('/', [ProductController::class, "index"] );
    $router->get('/add', [ProductController::class, "addProduct"] );
    $router->post('/add', [ProductController::class, "saveProduct"] );
    $router->get('/edit/{id}', [ProductController::class, "editProduct"] );
    $router->post('/edit/{id}', [ProductController::class, "saveEditProduct"] );
    $router->get('/{id}', [ProductController::class, "deleteProduct"] );
});

$router->group(['prefix' => 'cate'], function($router){
    $router->get('/', [CateController::class, "index"] );
    $router->get('/add', [CateController::class, "addCate"] );
    $router->post('/add', [CateController::class, "saveCate"] );
    $router->get('/edit/{id}', [CateController::class, "editCate"] );
    $router->post('/edit/{id}', [CateController::class, "saveEditCate"] );
    $router->get('/{id}', [CateController::class, "deleteCate"] );
});


});



$router->get('/error-404', [MainController::class, "error"]);

$dispatcher = new Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
}catch(HttpRouteNotFoundException $ex){
    header('location: ' . BASE_URL . 'error-404');
    die;
}


    
// Print out the value returned from the dispatched function
echo $response;
