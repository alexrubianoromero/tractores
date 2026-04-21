<?php
$raiz = dirname(dirname(__file__));
// die($raiz);
// die('paso00000');
require_once($raiz.'/ordenes/controllers/ordenesController.php');  
$controller = new ordenesController();
// $controller->menuTractores();
?>