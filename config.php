<?php

//Parametros de Configuración
$portal_activo = true;
if(!$portal_activo){
  header('Location:under_const.php');
  exit;
}

if(!$index){

$host_bd = "localhost";
$usuario_bd = "root";
$clave_bd =  "tr15t4n14";
$bd = "padron_beneficiarios";
//$puerto_bd =
$conexion=new mysqli($host_bd,$usuario_bd,$clave_bd,$bd);
$conexion->query("SET NAMES utf8");


}

?>
