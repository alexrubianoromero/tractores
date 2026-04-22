<?php
$raiz = dirname(dirname(__file__));
// die($raiz);
// die('paso00000');
require_once($raiz.'/dashboard/controllers/dashboardController.php');  
$controller = new dashboardController();
// $controller->menuTractores();
?>