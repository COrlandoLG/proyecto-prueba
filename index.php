<?php
require_once("controllers/ProductoControlador.php");

$controller=new ProductoControlador();

if(isset($_GET['action'])):
    $metodo =   $_GET['action'];
    if(method_exists($controller,$metodo)):
        $controller->{$metodo}();
    endif;
else:
    $controller->index();
endif;
?>