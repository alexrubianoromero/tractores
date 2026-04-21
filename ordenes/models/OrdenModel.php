<?php
$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/conexion/Conexion.php');

class OrdenModel extends Conexion
{


    public function traerOrdenes()
    {
         $sql = "select * from ordenes  " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }


      public function grabarOrdenTractor($request)
    {
        // echo '<pre>'; 
        // print_r($request); 
        // echo '</pre>';
        // die();
        $sql = "insert into ordenes(idCliente,idTractor,observaciones) 
        values('".$request['idCliente']."','".$request['idTractor']."'
        ,'".$request['observaciones']."')";
        $query = $this->connectMysql()->prepare($sql); 
        $query->execute();
        $this->desconectar();
    }

    // function traerCLienteId($idCliente)
    // {
    //         $sql = "select * from cliente0  where idcliente = '".$idCliente."' " ;
    //         $consulta = mysql_query($sql,$this->connectMysql()); 
    //         $inspecciones = mysql_fetch_assoc($consulta);
    //         return $inspeccion; 
    // }


}


?>