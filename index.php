<?php

define("ROOT",__DIR__);

function view(string $path, array $data = []){
    extract($data);

    require_once ROOT. "/views/layouts/header.php";
    require_once ROOT. "/views/pages/{$path}.php";
    require_once ROOT. "/views/layouts/footer.php";
}

global $page;

if(isset($_GET['page'])) {
    $page = $_GET['page'];

    require_once ROOT. "/router/acceuil.router.php";
    require_once ROOT. "/router/service.router.php";
}else {
    require_once ROOT. "/router/acceuil.router.php";
}