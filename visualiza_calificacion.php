<?php
    session_start();

    include ('servidor/conexionescuela.php');
    include ("src/jpgraph.php");
    include ("src/jpgraph_pie.php");
    include ("src/jpgraph_pie3d.php");

    $sSQL="Select * From calificacion Where matricula= '201424123' ";
    $result2=mysqli_query($conexion,$sSQL);
    $row = mysqli_fetch_array($result2);

    $datos=array($row["porcentajeActualPrac"],$row["porcentajeActualExa"],$row["porcentajeProy"]);
    $grafico=new PieGraph(600,500);
    $grafico->SetShadow(); //crea un borde sombreado
    $grafico->title->Set("Grafico de Pastel");
    $p1=new PiePlot3D($datos);
    $p1->SetAngle(30);
    $p1->SetSize(0.5);
    $p1->SetCenter(0.45);
    $p1->SetLegends(array('Practicas','Examenes','Proyecto'));
    $grafico->Add($p1);
    $grafico->Stroke();
?>