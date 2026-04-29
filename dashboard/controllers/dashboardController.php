<?php
$raiz = dirname(dirname(dirname(__FILE__)));
require_once($raiz.'/dashboard/views/dashboardView.php');  
require_once($raiz.'/ordenes/models/OrdenModel.php');  
// require_once($raiz.'/tractores/models/dashboardView.php');  
// die($raiz);
// require_once($raiz.'/movimientos/views/movimientosView.php');  
// require_once($raiz.'/movimientos/models/MovimientoModel.php'); 
// require_once($raiz.'/conductores/models/ClienteModel.php');  
// require_once($raiz.'/asignaciones/models/AsignacionModel.php'); 
// require_once($raiz.'/taxis/models/TaxiModel.php');  

class dashboardController
{
    private $view;
    private $ordenModel;
    private $movimientoModel;
    private $asignacionModel;
    // private $model;
    // private $model;
    public function __construct()
    {
        $this->view = new dashboardView();
        $this->ordenModel = new OrdenModel();
        // $this->movimientoModel = new MovimientoModel();
        // $this->asignacionModel = new AsignacionModel();
        // $this->clienteModel = new ClienteModel();
        // $this->model = new TaxiModel();
        
        if($_REQUEST['opcion']=='formuNuevaOrden')
        {
                $this->view->formuNuevaOrden();
                // echo 'Registro Realizado ';

        }
        if($_REQUEST['opcion']=='mostrarDetalleOrden')
        {
                $this->view->mostrarDetalleOrden($_REQUEST['idOrden']);
                // echo 'Registro Realizado ';

        }
        if($_REQUEST['opcion']=='tablaResultadosOrdenes')
        {
                $ordenes =    $this->ordenModel->traerOrdenes(); 
       
                $this->view->tablaResultadosOrdenes($ordenes);

        }

    }

}