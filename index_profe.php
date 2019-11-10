<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Estilos -->
    <script src="css/estilos.css"></script>
    <script src="css/main.css"></script>
    <title>Examen-Aplicaciones Web</title>
</head>
<body>
    <nav class="menu">
    <ul>
        <li><a href="?page=1">Cerrar Sesion</a></li>
        <li><a href="?page=2">Registra rubrica</a></li>
        <li><a href="?page=3">Registra calificacion</a></li>
        <li><a href="?page=4">Reporte calificacion</a></li>

    </ul>
    </nav>
    <div>
    <?php
          if(isset($_GET['page'])){
            switch($_GET['page']){
              case 1:
                include("./cerrar_sesion.php");
              break;
              case 2:
                  include("./reg_rubrica.php");
                  break;
              case 3:
                  include("./reg_calificacion.php");
                  break;
              case 4:
                    include("./reporte_calificacion.php");
                    break;
              default:
                include("./inicio.php");
                break;
                  }
              }
              else{
                  include("./inicio.php");
              }
          ?>
    </div>
</body>
</html>