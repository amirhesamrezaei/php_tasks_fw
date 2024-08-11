<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case  '/practice/farawinTabestoon/php_tasks_fw/test/' :
        require './view/home.php';
        var_dump($request);
        break;
    case "/practice/farawinTabestoon/php_tasks_fw/test/users/" :
        require './view/users.php';
        break;
    case '/practice/farawinTabestoon/php_tasks_fw/test/about/' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require './view/404.php';
        break;
}


// if($request == '/practice/farawinTabestoon/php_tasks_fw/test/'){

//     include('./view/home.php');
//     echo $url ;

// }

// if($request == '/practice/farawinTabestoon/php_tasks_fw/test/users/'){

//     include('./view/users.php');
    
// }



