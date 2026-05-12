<?php

require_once ROOT . "/app/controllers/HomeController.php";
$homeController = new HomeController();


global $page;

if(!isset($_GET['page'])) {
    $homeController->index();
}