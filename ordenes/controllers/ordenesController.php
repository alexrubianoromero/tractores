<?php
$raiz = dirname(dirname(dirname(__FILE__)));
require_once($raiz.'/ordenes/models/OrdenModel.php');  
require_once($raiz.'/ordenes/models/ItemOrdenModel.php');  
require_once($raiz.'/dashboard/views/dashboardView.php');  
// require_once($raiz.'/tractores/models/dashboardView.php');  
// die($raiz);
// require_once($raiz.'/movimientos/views/movimientosView.php');  
// require_once($raiz.'/movimientos/models/MovimientoModel.php'); 
// require_once($raiz.'/conductores/models/ClienteModel.php');  
// require_once($raiz.'/asignaciones/models/AsignacionModel.php'); 
// require_once($raiz.'/taxis/models/TaxiModel.php');  

class ordenesController
{
    private $dashBoardView;
    private $movimientoModel;
    private $asignacionModel;
    private $model;
    private $itemOrdenModel;
    // private $model;
    public function __construct()
    {
        $this->model = new OrdenModel();
         $this->itemOrdenModel = new ItemOrdenModel();
         $this->dashBoardView = new dashboardView();
        // $this->movimientoModel = new MovimientoModel();
        // $this->asignacionModel = new AsignacionModel();
        // $this->clienteModel = new ClienteModel();
        // $this->model = new TaxiModel();
        
        if($_REQUEST['opcion']=='grabarOrdenTractor')
        {
                //  $this->view->menuTractores(); 
                // echo 'llego a grabar tractores ';}
        //          echo '<pre>'; 
        // print_r($_REQUEST); 
        // echo '</pre>';
        // die();
                $this->model->grabarOrdenTractor($_REQUEST);
                echo 'Registro Realizado ';

        }
        if($_REQUEST['opcion']=='agregarItemOrden')
        {
                $this->itemOrdenModel->agregarItemOrden($_REQUEST);
                $this->dashBoardView->mostrarDetalleOrden($_REQUEST['idOrden']);

                // echo 'Registro Realizado ';

        }
        // if($_REQUEST['opcion']=='resultadosItemOrden')
        // {
        //        $this->dashBoardView->resultadosItemOrden($_REQUEST['idOrden']);

        // }


        

    }

}