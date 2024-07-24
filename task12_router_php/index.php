<?php

$request = $_SERVER['REQUEST_URI'];
// $request = "/practice/farawinTabestoon/php_tasks_fw/task11_router_php/contact";


$url = "/practice/farawinTabestoon/php_tasks_fw/task12_router_php";

switch ($request) {

    case $url . '/':
        include('../task12_router_php/view/home.php');
        break;

    case $url . '/home':
        include('../task12_router_php/view/home.php');
        break;

    case $url . '/users':
        include('./view/users.php');
        break;

    case $url . '/contact':
        include('./view/contact.php');
        break;

    default:
        http_response_code(404);
        include('./view/404.php');
}






