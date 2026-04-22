<?php
$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/conexion/Conexion.php');

class EstadoOrdenModel extends Conexion
{


    public function traerEstados()
    {
         $sql = "select * from estadosOrdenes  " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }
    public function traerEstadoId($estado)
    {
         $sql = "select * from estadosOrdenes where id = '".$estado."' " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetch(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }


}


?>