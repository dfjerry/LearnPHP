<?php
    $route = $_GET["route"];
    $controller = new Controller();
    switch ($route){
       case "login": $controller->login();break;
       case "post_login": $controller->postLogin();break;
       case "register": $controller->register();break;
       case "post_register": $controller->postRegister();break;
       case "users": $controller->users();break;
       case "edit": $controller->edit();break;
       case "post_edit": $controller->postEdit();break;
       case "delete": $controller->delete();break;

       default: require_once __DIR__ . "/View/home.php";
   }
