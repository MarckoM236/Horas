<?php 
//echo ('prueba1');
include_once('produccionController.php');
include_once('reporteController.php');
include_once('app/model/produccion.php');
include_once('app/model/reporteModel.php');
//echo('prueba');
if($_GET['action'] and $_GET['controller']){
    if($_GET['controller']=='produccion'){
//print_r($_GET);
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
?>