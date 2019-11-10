<?php
include ('./conexionescuela.php');

$nombre = $_POST["nombre"];
$matricula =$_POST["matricula"];
$apellidoPaterno = $_POST["apellidoPaterno"];
$apellidoMaterno = $_POST["apellidoMaterno"];
$carrera = $_POST["carrera"];
$password = $_POST["password"];


$query1 = "SELECT matricula FROM estudiante WHERE matricula = '$matricula' ";
$result = $conexion->query($query1);
$count = mysqli_num_rows($result);

if($count>0){
    echo 'Estudiante ya esta registrado';
}
else{
    $query = "INSERT INTO `estudiante`(`matricula`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `carrera`, `password`) 
    VALUES ('$matricula','$nombre','$apellidoPaterno','$apellidoMaterno','$carrera','$password')";
    $result2 = $conexion->query($query);
    
    if($result2){
        echo "Estudiante inscrito exitosamente";
    }
    else{
        echo $conexion->error;
    }
}
?>