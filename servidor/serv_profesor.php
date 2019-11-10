<?php
    include ('./conexionescuela.php');

    $nombre = $_POST["nombre"];
    $apellidoPaterno = $_POST["apellidoPaterno"];
    $apellidoMaterno = $_POST["apellidoMaterno"];
    $area = $_POST["area"];
    $password = $_POST["password"];

    $query = "INSERT INTO `profesor`(`nombre`, `apellidoPaterno`, `apellidoMaterno`, `area`, `password`) 
    VALUES ('$nombre','$apellidoPaterno','$apellidoMaterno','$area','$password')";

    $result = $conexion->query($query);

    if($result){
        echo "Profesor registrado exitosamente";
    }else{
        echo $conexion->error;
    }
?>