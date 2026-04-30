<?php
$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/conexion/Conexion.php');

class ItemOrdenModel extends Conexion
{


    public function traerEstados()
    {
         $sql = "select * from item_orden  " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }
    public function traerItemsOrden($idOrden)
    {
         $sql = "select * from item_orden where no_factura = '".$idOrden."' " ;
        //  die($sql);
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }

      public function agregarItemOrden($request)
    {
        // echo '<pre>'; 
        // print_r($request); 
        // echo '</pre>';
        // die();
        $sql = "insert into item_orden(no_factura,descripcion,cantidad,total_item) 
        values('".$request['idOrden']."','".$request['producto']."','".$request['cantidad']."','".$request['precio']."')";
        
        $query = $this->connectMysql()->prepare($sql); 
        $query->execute();
        $this->desconectar();
    }


}


?>