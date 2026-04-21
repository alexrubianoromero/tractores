<?php
$raiz = dirname(dirname(dirname(__FILE__)));
require_once($raiz.'/clientes/models/ClienteModel.php');  

class clientesView
{
    protected $model;
     public function __construct()
    {
        $this->model = new ClienteModel();

    }

    public function mostrarSelectClientes()
    {
        $tractores = $this->model->traerClientes();
        echo '<select class="form-select border-start-0 bg-light" name="idCliente"  id="idCliente"  required>';
        echo '<option value="" selected disabled>Seleccionar Cliente...</option>';
        foreach($tractores as $tractor)
        {
            echo '<option value="'.$tractor['idcliente'].'">'.$tractor['nombre'].'</option>';
        }
            echo '</select>';
    }

}
?>