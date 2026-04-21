<?php
$raiz = dirname(dirname(__file__));
// die($raiz);
// die('paso00000');
require_once($raiz.'/tractores/controllers/tractoresController.php');  
$controller = new tractoresController();
// $controller->menuTractores();
?>