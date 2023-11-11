<?php

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
        $res = null;
        if(isset($_POST['insert'])){
            $objProduc=new Produccion();
            $objProduc->setOT($_POST['txbOt']);
            $order = $objProduc->findOrderById();

            if(!empty($order)){
                $objProduc->setIdEmp($_POST['txbId']);
                $objProduc->setIdOrder($order[0]['idOrdenTrabajo']);
                $objProduc->setTablero($_POST['txbTablero']);
                $objProduc->setCuerpo($_POST['txbCuerpo']);
                $objProduc->setActividad($_POST['txbActividad']);
                $res=$objProduc->insert();
            }
            
            return $res;
        }
    }

    public function update(){
        $res = ['status'=> 'fail',
                'result' => 'Usuario no valido'];

        if(isset($_POST['update'])){

            $objProduc=new Produccion();
            $objProduc->setCedula($_POST['txbIdentificacion']);
            $user = $objProduc->validateUser();

            if(!empty($user)){
                $objProduc->setIdEmp($user[0]['id_emp']);

                if(empty($objProduc->validateActivity())){
                    $res = ['status'=> 'fail',
                            'result' => 'No tiene ninguna actividad iniciada'];
                    return $res;
                }

                $objProduc->setCantidad($_POST['txbCantidad']);
                $res=$objProduc->update();
            }
        
            return $res;
        }
    }

}