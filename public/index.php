<?php
    require __DIR__.'/../core/router.php';

    $uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

    $controller=router($uri)[0];
 
    
    $routes=['home','contact','about'];

    if(in_array($controller,$routes)){
        require __DIR__.'/../app/controllers/'.$controller.'.php';
    }
   
    