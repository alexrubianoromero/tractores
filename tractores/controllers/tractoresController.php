<?php
$raiz = dirname(dirname(dirname(__FILE__)));
require_once($raiz.'/tractores/models/TractorModel.php');  
// require_once($raiz.'/tractores/models/dashboardView.php');  
// die($raiz);
// require_once($raiz.'/movimientos/views/movimientosView.php');  
// require_once($raiz.'/movimientos/models/MovimientoModel.php'); 
// require_once($raiz.'/conductores/models/ClienteModel.php');  
// require_once($raiz.'/asignaciones/models/AsignacionModel.php'); 
// require_once($raiz.'/taxis/models/TaxiModel.php');  

class tractoresController
{
    private $dashBoardView;
    private $movimientoModel;
    private $asignacionModel;
    private $model;
    // private $model;
    public function __construct()
    {
        $this->dashBoardView = new dashboardView();
        // $this->movimientoModel = new MovimientoModel();
        // $this->asignacionModel = new AsignacionModel();
        // $this->clienteModel = new ClienteModel();
        // $this->model = new TaxiModel();
        
        if(!isset($_REQUEST['opcion']))
        {
                //  $this->view->menuTractores(); 
                // echo 'llego a grabar tractores ';
                $this->menuTractores();

        }

    }
}