<?php
include("conexion.php");
$bandera = $_POST['bandera'];
if($bandera==="creartorneo"){
    $tipo = $_POST['tipo'];
    $nombre =$_POST['nombre'];
    $query="INSERT  INTO tb_torneo (id,tipo,Nombre,Deporte) VALUES(null,$tipo,$nombre,1)";
    if($query){
        echo "{salida : true}";
    }else{
        echo "{salida : false}";
    }
}
?>