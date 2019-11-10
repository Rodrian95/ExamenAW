<?php
	include './conexionescuela.php';
	$SQL="Select * From estudiante";

	$result=mysqli_query($conexion,$SQL);
	echo "<br>";

	while($row = mysqli_fetch_array($result)){ 
		$mat = $row["matricula"];
		printf(" <tr><td>&nbsp;%s   </td><td>&nbsp;%s   </td><td>&nbsp;%s </td><td>&nbsp;%s </td><td>&nbsp;%s </td><td>&nbsp;%s  </td> </tr> <br>", $row["matricula"],$row["nombre"],$row["apellidoPaterno"],$row["apellidoMaterno"],$row["carrera"], "<img src=porcentajes.php> <br>"); 
	} 
?>