<?php
    $route = $_GET["route"];
    $controller = new BookController();
    switch ($route){
        case "books": $controller->books();break;
        case "editBook": $controller->editBook();break;
        case "postEditBook": $controller->postEditBook();break;
        case "deleteBook": $controller->deleteBook();break;
        case "addBook": $controller->addBook();break;
        case "postAddBook": $controller->postAddBook();break;
        default: require_once __DIR__ . "/View/home.php";
}
