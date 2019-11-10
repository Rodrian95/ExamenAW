<?php
include ('./servidor/conexionescuela.php');

$status = "Por ahora bien todo";

$user=$_POST['user'];
$password=$_POST['password'];

$query1 = "SELECT * FROM estudiante WHERE matricula = '$user'";
$result = $conexion->query($query1);
$count = mysqli_num_rows($result);

if($count==0){
    $query2 = "SELECT * FROM profesor WHERE nombre = '$user'";
    $result2 = $conexion->query($query2);
    $count2 = mysqli_num_rows($result2);
    if($count2==0){
        echo "Usuario no registrado";
    }else{
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row['activo'] == '0'){
            $status = "error";
        }
        elseif(password_verify($password, $row['password'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['idProfesor'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellidoPaterno'] = $row['apellidoPaterno'];
            $_SESSION['apellidoMaterno'] = $row['apellidoMaterno'];
            $_SESSION['area'] = $row['area'];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);
            
           session_write_close();
           $status = "Inicio de sesion exitoso";
        }
        //echo $status;
        header('location: ./index_profe.php');
    }
}
else{
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if($row['activo'] == '0'){
        $status = -1;
    }
    elseif(password_verify($password, $row['password'])){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['matricula'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['matricula'] = $row["matricula"];
        $_SESSION['apellidoPaterno'] = $row['apellidoPaterno'];
        $_SESSION['apellidoMaterno'] = $row['apellidoMaterno'];
        $_SESSION['carrera'] = $row['carrera'];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);
       session_write_close();
       $status = "Inicio de sesion exitoso";
    }
    //echo $status;
    header('location: ./index_alumno.php');
}