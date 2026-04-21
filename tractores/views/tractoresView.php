<?php
$raiz = dirname(dirname(dirname(__FILE__)));
require_once($raiz.'/tractores/models/TractorModel.php');  

class tractoresView
{
    protected $model;
     public function __construct()
    {
        $this->model = new TractorModel();

    }

    public function mostrarSelectTractores()
    {
        $tractores = $this->model->traerTractores();
        echo '<select class="form-select border-start-0 bg-light" name="idTractor" id="idTractor" required>';
        echo '<option value="" selected disabled>Seleccionar Tractor</option>';
        foreach($tractores as $tractor)
        {
            echo '<option value="'.$tractor['id'].'">'.$tractor['marca'].'-'.$tractor['numeroBastidor'].'</option>';
        }
            echo '</select>';
    }

}
?>