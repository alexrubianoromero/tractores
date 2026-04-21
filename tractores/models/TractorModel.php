<?php
$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/conexion/Conexion.php');

class TractorModel extends Conexion
{


    public function traerTractores()
    {
         $sql = "select * from tractores  " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }


    // function traerTractores()
    // {
    //         $sql = "select * from tractores  " ;
    //         // die($sql);
    //         $consulta = mysql_query($sql,$this->connectMysql()); 
    //         $inspecciones = $this->get_table_assoc($consulta);
    //         return $inspecciones; 
    // }


    // function traerTractorId($idTractor)
    // {
    //         $sql = "select * from tractores  where id = '".$idTractor."' " ;
    //         $consulta = mysql_query($sql,$this->connectMysql()); 
    //         $inspecciones = mysql_fetch_assoc($consulta);
    //         return $inspeccion; 
    // }


}


?>