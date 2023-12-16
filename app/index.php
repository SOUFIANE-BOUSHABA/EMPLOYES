<?php
 require 'autoload.php';
require_once './controllers/HomeController.php';


$home=new HomeController();


if (isset($_GET['page'])) {
    $requestedPage = $_GET['page'];

    if (in_array($requestedPage, ['home', 'add', 'update', 'delete'])) {
        $home->index($requestedPage);
    } else {
        include './views/includes/404.php';
    }
} 
else{
    include './views/home.php';
}