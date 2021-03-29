<?php
	
	require("../conexion/conexion1.php");

    $salida = "";

    $query = "SELECT * FROM login  ORDER By user LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $mysqli->real_escape_string($_POST['consulta']);
    	$query = "SELECT user, email,rol FROM login WHERE user LIKE '%".$q."%' OR email LIKE '%".$q."%' OR rol LIKE '%".$q."%' ";
    }

    $resultado = $mysqli->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr>
    					
    					<td>usuario</td>
    					<td>email</td>
    					<td>rol</td>
    					
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					
    					<td>".$fila['user']."</td>
    					<td>".$fila['email']."</td>
    					<td>".$fila['rol']."</td>
    					
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $mysqli->close();



?>