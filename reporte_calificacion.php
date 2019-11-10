<?php
	include './servidor/conexionescuela.php';
	$SQL="Select * From calificacion";

	$result=mysqli_query($conexion,$SQL);
	echo "<br>";

	while($row = mysqli_fetch_array($result)){ 
		printf(" <tr><td>&nbsp;%s   </td><td>&nbsp;%s   </td><td>&nbsp;%s </td><td>&nbsp;%s </td><td>&nbsp;%s </td><td>&nbsp;%s  </td> </tr> <br>", $row["nrc"] ,$row["matricula"],$row["totalExaPasados"],$row["porcentajeActualPrac"],$row["porcentajeActualExa"], $row["porcentajeProy"] ); 
	} 
?>