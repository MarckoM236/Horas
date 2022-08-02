<?php 
require_once('conexion.php');
class Produccion
{
    private $cedu_produc;
    private $ot_produc;
    private $tab_produc;
    private $cue_produc;
    private $act_produc;
    private $cant_produc;
    private $con;

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
    
    function show(){
        $sql="select ot_produc,tab_produc,cue_produc,act_produc from produccion where cedu_produc=".$this->cedu_produc." and DATE(date_ini_produc)=DATE(NOW()) and cant_produc is null and date_fin_produc is null";
        $res=$this->con->getData($sql);
        return $res;
    }

    function validateUser(){
        $sql="SELECT us.cedula FROM empleado us WHERE us.cedula=".$this->cedu_produc.";";
        $res=$this->con->getData($sql);
        return $res;
    }

    function insert(){
       $data=array();
       $sql="INSERT INTO produccion (cedu_produc, ot_produc, tab_produc, cue_produc, act_produc, date_ini_produc) VALUES (".$this->cedu_produc.",'".$this->ot_produc."','".$this->tab_produc."','".$this->cue_produc."','".$this->act_produc."',now());"; 
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
       $sql="UPDATE produccion set cant_produc=".$this->cant_produc.", date_fin_produc=now() where cedu_produc=".$this->cedu_produc." and DATE(date_ini_produc)=DATE(NOW()) and cant_produc is null and date_fin_produc is null ;"; 
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