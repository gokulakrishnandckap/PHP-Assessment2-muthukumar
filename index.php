<?php


    require 'router.php';
    session_start();
    $router = new routers();


    $router->get('/','view');
    $router->post('/add','adding');
    $router->get('/adds','adding');
    $router->post('/table','showing');
    $router->get('/tables','showing');

  
    
    $router->post('/store','create');
    $router->post('/insertcolumns','read');
    $router->post('/show','show');
    $router->post('/column','showcolumn');
    $router->post('/insertRow','insertRow');
    $router->post('/addrow','addrow');







    $router->checking($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);