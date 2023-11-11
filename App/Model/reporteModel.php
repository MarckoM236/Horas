<?php 
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
        $sql="SELECT emp.cedu_emp as Cedula,CONCAT(emp.nomb_emp,' ',emp.ape_emp) as NombreEmpleado,ot.NumOrden as NumeroOT,ot.nombre as NombreOT,pro.tab_produc as Tablero,
        pro.cue_produc as Cuerpo,pro.act_produc as Actividad,pro.cant_produc as Cantidad,pro.date_ini_produc as Inicio,pro.date_end_produc as Fin,
        SEC_TO_TIME(TIMESTAMPDIFF(SECOND, time(date_ini_produc), time(date_end_produc))) AS Duracion FROM produccion pro,empleados emp,orden_trabajo ot WHERE pro.id_emp=emp.id_emp AND pro.id_ordenTrabajo=ot.idOrdenTrabajo AND DATE( date_ini_produc ) BETWEEN '".$this->dateIn."' AND '".$this->dateFi."';";
        $res=$this->con->getData($sql);
        return $res;
    }
    function show(){
        $sql="select emp.cedu_emp as Cedula,CONCAT(emp.nomb_emp,' ',emp.ape_emp) as NombreEmpleado,ot.NumOrden as NumeroOT,ot.nombre as NombreOT,pro.tab_produc as Tablero,
        pro.cue_produc as Cuerpo,pro.act_produc as Actividad,pro.cant_produc as Cantidad,pro.date_ini_produc as Inicio,pro.date_end_produc as Fin,
        SEC_TO_TIME(TIMESTAMPDIFF(SECOND, time(date_ini_produc), time(date_end_produc))) AS Duracion from produccion pro,empleados emp,orden_trabajo ot where pro.id_emp=emp.id_emp and pro.id_ordenTrabajo=ot.idOrdenTrabajo;";
        $res=$this->con->getData($sql);
        return $res;
    }
}

?>