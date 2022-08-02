<?php
@include_once('../model/produccion.php');

class ProduccionController{

   public function show(){
    if(isset($_POST['show'])){
        $objProduc=new Produccion();
        $objProduc->setCedula($_POST['txbIdentificacion']);
        $res=(array) $objProduc->show();

        return $res;
    }
    include_once('../view/sipcommb.php');
   }

   public function validateUS(){
    if(isset($_POST['user'])){
        $objProduc=new Produccion();
        $objProduc->setCedula($_POST['txbIdentificacion']);
        $res=$objProduc->validateUser();

        return $res;
    }
   }
   
    public function insert(){
        if(isset($_POST['insert'])){
            $objProduc=new Produccion();
            $objProduc->setCedula($_POST['txbIdentificacion']);
            $objProduc->setOT($_POST['txbOt']);
            $objProduc->setTablero($_POST['txbTablero']);
            $objProduc->setCuerpo($_POST['txbCuerpo']);
            $objProduc->setActividad($_POST['txbActividad']);
            $res=$objProduc->insert();
            //print_r($objProduc);
            //$res="prueba";
            return $res;
        }
    }

    public function update(){
        if(isset($_POST['update'])){
            $objProduc=new Produccion();
            $objProduc->setCedula($_POST['txbIdentificacion']);
            $objProduc->setCantidad($_POST['txbCantidad']);
            $res=$objProduc->update();
            //print_r($objProduc);
            //$res="prueba";
            return $res;
        }
    }

}