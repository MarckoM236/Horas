<?php 
require_once('conexion.php');
class ReporteModel
{
    private $dateIn;
    private $dateFi;
    private $con;

    function __construct()
    {
        $this->con= New Conexion();
        $this->con->connect();

    }
    
    //setters
    public function setDateIn($val){
        $this->dateIn=$val;
    }
    public function setDateFi($val){
        $this->dateFi=$val;
    }

    //getters
    public function getDateIn(){
        return $this->dateIn;
    }
    public function getDateFi(){
        return $this->dateFi;
    }
    
    
    function showXDate(){
        $sql="SELECT pro.cedu_produc AS Cedula, emp.nombreCompleto AS NombreEmpleado, pro.ot_produc AS NumeroOT, ot.nombre AS NombreOT, pro.tab_produc AS Tablero, pro.cue_produc AS Cuerpo, pro.act_produc AS Actividad, pro.cant_produc AS Cantidad, pro.date_ini_produc AS Inicio, pro.date_fin_produc AS Fin, SEC_TO_TIME( TIMESTAMPDIFF(SECOND , TIME( date_ini_produc ) , TIME( date_fin_produc ) ) ) AS Duracion FROM produccion pro, empleado emp, orden_trabajo ot WHERE pro.cedu_produc = emp.cedula AND pro.ot_produc = ot.idOrdenTrabajo AND DATE( date_ini_produc ) BETWEEN '".$this->dateIn."' AND '".$this->dateFi."';";
        $res=$this->con->getData($sql);
        return $res;
    }
    function show(){
        $sql="select pro.cedu_produc as Cedula,emp.nombreCompleto as NombreEmpleado,pro.ot_produc as NumeroOT,ot.nombre as NombreOT,pro.tab_produc as Tablero,pro.cue_produc as Cuerpo,pro.act_produc as Actividad,pro.cant_produc as Cantidad,pro.date_ini_produc as Inicio,pro.date_fin_produc as Fin,SEC_TO_TIME(TIMESTAMPDIFF(SECOND, time(date_ini_produc), time(date_fin_produc))) AS Duracion from produccion pro,empleado emp,orden_trabajo ot where pro.cedu_produc=emp.cedula and pro.ot_produc=ot.idOrdenTrabajo;";
        $res=$this->con->getData($sql);
        return $res;
    }
}

?>