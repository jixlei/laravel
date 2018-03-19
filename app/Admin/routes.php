<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('product', ProductController::class);
    $router->resource('about', AboutController::class);
    $router->resource('contact', ContactController::class);
    $router->resource('message', MessageController::class);
    $router->resource('service', ServiceController::class);

});
