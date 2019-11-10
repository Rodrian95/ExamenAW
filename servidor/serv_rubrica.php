<?php
include ('./conexionescuela.php');

$nrc = $_POST["nrc"];
$totalExa =$_POST["totalExa"];
$porcentajeExa = $_POST["porcentajeExa"];
$porcentajePrac = $_POST["porcentajePrac"];
$porcentajeProy = $_POST["porcentajeProy"];


$query1 = "SELECT nrc FROM curso WHERE nrc = '$nrc' ";
$result = $conexion->query($query1);
$count = mysqli_num_rows($result);

if($count<=0){
    echo 'El NRC no existe';
}
else{
    $query = "INSERT INTO `rubrica`(`nrc`, `totalExa`, `porcentajeExa`, `porcentajePrac`, `porcentajeProy`) 
    VALUES ('$nrc','$totalExa','$porcentajeExa','$porcentajePrac','$porcentajeProy')";
    $result2 = $conexion->query($query);
    
    if($result2){
        echo "Rubrica registrada exitosamente";
    }
    else{
        echo $conexion->error;
    }
}
?>