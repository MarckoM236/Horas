<?php 
require_once('conexion.php');
$con="";

function update(){
    $con= New Conexion();
    $con->connect();
       $sql="UPDATE produccion set cant_produc=0, date_fin_produc=now() WHERE DATE(date_ini_produc)=DATE(NOW()) and cant_produc is null and date_fin_produc is null ;"; 
       //print_r($sql);
       $res=$con->executeInstruction($sql);
    }

update();
?>

