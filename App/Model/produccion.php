<?php 

class Produccion
{
    private $cedu_produc;
    private $ot_produc;
    private $tab_produc;
    private $cue_produc;
    private $act_produc;
    private $cant_produc;
    private $con;
    private $id_emp;
    private $id_order;

    function __construct()
    {
        $this->con= New Conexion();
        $this->con->connect();

    }
    
    //setters
    public function setCedula($val){
        $this->cedu_produc=$val;
    }
    public function setOt($val){
        $this->ot_produc=$val;
    }
    public function setTablero($val){
        $this->tab_produc=$val;
    }
    public function setCuerpo($val){
        $this->cue_produc=$val;
    }
    public function setActividad($val){
        $this->act_produc=$val;
    }
    public function setCantidad($val){
        $this->cant_produc=$val;
    }
    public function setIdEmp($val){
        $this->id_emp = $val;
    }
    public function setIdOrder($val){
        $this->id_order = $val;
    }

    //getters
    public function getCedula(){
        return $this->cedu_produc;
    }
    public function getOt(){
        return $this->ot_produc;
    }
    public function getTablero(){
        return $this->tab_produc;
    }
    public function getCuerpo(){
        return $this->cue_produc;
    }
    public function getActividad(){
        return $this->act_produc;
    }
    public function getCantidad(){
        return $this->cant_produc;
    }
    public function getIdEmp(){
        return $this->id_emp;
    }
    public function getIdOrder(){
        return $this->id_order;
    }
    
    function show(){
        $sql="select pr.id_ordenTrabajo,pr.tab_produc,pr.cue_produc,pr.act_produc from produccion pr LEFT JOIN empleados em ON em.id_emp = pr.id_emp
        where em.cedu_emp=".$this->cedu_produc." and DATE(pr.date_ini_produc)=DATE(NOW()) and pr.cant_produc is null and pr.date_end_produc is NULL";
        $res=$this->con->getData($sql);
        return $res;
    }

    function validateUser(){
        $sql="SELECT us.id_emp,us.cedu_emp FROM empleados us WHERE us.cedu_emp=".$this->cedu_produc.";";
        $res=$this->con->getData($sql);
        return $res;
    }

    function findOrderById(){
        $sql = "SELECT idOrdenTrabajo from orden_trabajo where NumOrden = ".$this->ot_produc;
        $res=$this->con->getData($sql);
        return $res;
    }

    function validateActivity(){
        $sql = "SELECT * FROM produccion WHERE  id_emp=".$this->id_emp." AND  DATE(date_ini_produc)=DATE(NOW()) AND  cant_produc IS NULL AND  date_end_produc IS NULL";
        $res=$this->con->getData($sql);
        return $res;
    }

    function insert(){
       $data=array();
       $sql="INSERT INTO produccion (id_emp, id_ordenTrabajo, tab_produc, cue_produc, act_produc, date_ini_produc) VALUES (".$this->id_emp.",'".$this->id_order."','".$this->tab_produc."','".$this->cue_produc."','".$this->act_produc."',now());"; 
       //print_r($sql);
       $res=$this->con->executeInstruction($sql);
        if($res){
            $data['status'] = 'ok';
            $data['result'] = 'Inicio la Actividad';
        }
        else{
            $data['status'] = 'fail';
            $data['result'] = 'No se pudo Iniciar la actividad';
        }
        return $data;
    }

    function update(){
        $data=array();
       $sql="UPDATE produccion set cant_produc=".$this->cant_produc.", date_end_produc=now() where id_emp=".$this->id_emp." and DATE(date_ini_produc)=DATE(NOW()) and cant_produc is null and date_end_produc is null ;"; 
       //print_r($sql);
       $res=$this->con->executeInstruction($sql);
        if($res){
            $data['status'] = 'ok';
            $data['result'] = 'Finalizo la Actividad';
        }
        else{
            $data['status'] = 'fail';
            $data['result'] = 'No se pudo Finalizar la Actividad';
        }
        return $data;
    }
}

?>