<?php

require_once ROOT . '/app/controllers/ServicesController.php';

$serviceController = new ServicesController();

global $page;

if($page == "services") {
    $serviceController->index();
}