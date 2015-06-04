<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST["iniciar"])){
       include('conexion.php');
 $contraseña= $_POST['pass'];
 $usuario = $_POST['user'];

$primero=mysql_query("SELECT torneo FROM tb_usuarios WHERE usuario='$usuario' and contrasena='$contraseña' ");
if(mysql_num_rows($primero)>0){
    $nuevo=  mysql_fetch_array($primero);
     $_SESSION['torneo']=$nuevo['torneo'];
    header("location:principal.php");  
}else{
    header("location:definiciontorneo.php");  
}}
  

?>
