<?php
$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/conexion/Conexion.php');

class ClienteModel extends Conexion
{


    public function traerClientes()
    {
         $sql = "select * from cliente0  " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
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