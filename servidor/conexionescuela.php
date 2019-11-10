<?php
$conexion = mysqli_connect("localhost", "root", "root", "escuela");
if(!$conexion){
    echo "Error: ".$conexion->error;
}
mysqli_query ($conexion,"SET NAMES 'utf8'");
mysqli_set_charset($conexion, "utf8");