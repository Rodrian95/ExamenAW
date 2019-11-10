<?php
    include ('./conexionescuela.php');
    $nrc = $_POST["nrc"];
    $matricula = $_POST["matricula"];
    $totalExaPasados =$_POST["totalExaPasados"];
    $porcentajeActualPrac = $_POST["porcentajeActualPrac"];
    $porcentajeActualExa = $_POST["porcentajeActualExa"];
    $porcentajeProy = $_POST["porcentajeProy"];
    $fecha = $_POST["fecha"];
   

    $query = "INSERT INTO `calificacion`(`nrc`, `matricula`, `totalExaPasados`, `porcentajeActualPrac`, `porcentajeActualExa`, `porcentajeProy`, `fecha`) 
    VALUES ('$nrc','$matricula','$totalExaPasados','$porcentajeActualPrac','$porcentajeActualExa','$porcentajeProy','$fecha')";

    $result = $conexion->query($query);

    if($result){
        echo "Calificacion registrada exitosamente";
    }else{
        echo $conexion->error;
    }
?>