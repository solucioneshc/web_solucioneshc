<?php
	
	require("../conexion/conexion1.php");

    $salida = "";

    $query = "SELECT * FROM empresas  ORDER By nombre LIMIT 25";

    if (isset($_POST['consulta1'])) {
    	$q = $mysqli->real_escape_string($_POST['consulta1']);
    	$query = "SELECT nombre, correo,telefono FROM empresas WHERE nombre LIKE '%".$q."%' OR correo LIKE '%".$q."%' OR telefono LIKE '%".$q."%' ";
    }

    $resultado = $mysqli->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos1'>
    			<thead>
    				<tr>
    					
    					<td>nombre</td>
    					<td>correo</td>
    					<td>telefono</td>
    					
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['correo']."</td>
    					<td>".$fila['telefono']."</td>
    					
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $mysqli->close();



?>