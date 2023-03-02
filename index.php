<?php 

    session_start();

    include_once('init.php');

    $user = null;
    if (isset($_COOKIE['token'])) {
        $user = getUserByToken($_COOKIE['token']);

        if (!$user) {
            setcookie('token', '', time()-60*60*24*30);
        }
    }

    $routes = include('routes.php');
    $url = $_GET['systemurl'] ?? '';
    $routerRes = parseUrl($url, $routes);
    $controllerName = $routerRes['controller'];
    $path = "controllers/$controllerName.php";
    
    define('URL_PARAMS', $routerRes['params']);

    include_once($path);

    $html = template('base/base', [
        'title' => $pageTitle,
        'content' => $pageContent,
        'user' => $user
    ]);
    
    echo $html;


?>