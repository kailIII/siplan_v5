<?php
$bd = "siplan_pmz_".$_SESSION['ejercicio'];

switch($_SESSION['perfil']){
case '1': //Administrador
    $host_bd = "localhost";
    $usuario_bd = "root";
    $clave_bd =  "tr15t4n14";
    //$puerto_bd =
    $conexion=new mysqli($host_bd,$usuario_bd,$clave_bd,$bd);
    $conexion->query("SET NAMES utf8");
break;

case '2': // Dependencias
    $host_bd = "localhost";
    $usuario_bd = "root";
    $clave_bd =  "tr15t4n14";
    //$puerto_bd =
    $conexion=new mysqli($host_bd,$usuario_bd,$clave_bd,$bd);
    $conexion->query("SET NAMES utf8");
break;

case '3': // Planeacion
    $host_bd = "localhost";
    $usuario_bd = "root";
    $clave_bd =  "tr15t4n14";
    //$puerto_bd =
    $conexion=new mysqli($host_bd,$usuario_bd,$clave_bd,$bd);
    $conexion->query("SET NAMES utf8");
break;

case '4':  //Evaluación
    $host_bd = "localhost";
    $usuario_bd = "root";
    $clave_bd =  "tr15t4n14";
    //$puerto_bd =
    $conexion=new mysqli($host_bd,$usuario_bd,$clave_bd,$bd);
    $conexion->query("SET NAMES utf8");
break;

case '5':  //Consultas
    $host_bd = "localhost";
    $usuario_bd = "root";
    $clave_bd =  "tr15t4n14";
    //$puerto_bd =
    $conexion=new mysqli($host_bd,$usuario_bd,$clave_bd,$bd);
    $conexion->query("SET NAMES utf8");
break;

}
?>
