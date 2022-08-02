<?php
@include_once('../model/reporteModel.php');

class ReporteController{

   public function show(){
    if(isset($_POST['showXDate'])){
        $objReporte=new ReporteModel();
        $objReporte->setDateIn($_POST['txbDateIn']);
        $objReporte->setDateFi($_POST['txbDateFi']);
        $res=(array) $objReporte->showXDate();

        return $res;
    }
    else if(isset($_POST['show'])){
        $objReporte=new ReporteModel();
        $res=(array) $objReporte->show();

        return $res;
    }
    include_once('../view/reporte.php');
   }

}