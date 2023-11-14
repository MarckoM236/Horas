<?php 
require_once "./produccionController.php";
require_once "./reporteController.php";
require_once "../Model/produccion.php";
require_once "../config.php";
require_once "../Model/conexion.php";
require_once "../Model/reporteModel.php";


if($_GET['action'] and $_GET['controller']){
    if($_GET['controller']=='produccion'){

        $object= new ProduccionController();
            switch($_GET['action']){
                case 'validateUS':
                    $re=$object->validateUS();
                    echo json_encode($re);
                    break;

                case 'show':
                    $re=$object->show();
                    echo json_encode($re);
                    break;

                case 'insert':
                    $re=$object->insert();
                    echo json_encode($re);
                    break;

                case 'update':
                    $re=$object->update();
                    echo json_encode($re);
                    break;    
            }
    }   
    
    if($_GET['controller']=='reporte'){
        $object= new ReporteController();
            switch($_GET['action']){
                case 'show':
                    $re=$object->show();
                    echo json_encode($re);
                    break;
            }
    }        
}
