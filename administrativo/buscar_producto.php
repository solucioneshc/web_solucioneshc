<?php
	
	require("../conexion/conexion1.php");

    $salida = "";

    $query = "SELECT * FROM tblproductos  ORDER By Nombre LIMIT 25";

    if (isset($_POST['consulta2'])) {
    	$q = $mysqli->real_escape_string($_POST['consulta2']);
    	$query = "SELECT Nombre, Precio,Descripcion FROM tblproductos WHERE Nombre LIKE '%".$q."%' OR Precio LIKE '%".$q."%' OR Descripcion LIKE '%".$q."%' ";
    }

    $resultado = $mysqli->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=2     class='tabla_datos2'>
    			<thead>
    				<tr>
    					
    					<td id=tabla_buscar >Nombre</td>
    					<td id=tabla_buscar>Precio</td>
    					<td id=tabla_buscar>Descripcion</td>
    					
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					
    					<td>".$fila['Nombre']."</td>
    					<td>".$fila['Precio']."</td>
    					<td>".$fila['Descripcion']."</td>
    					
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO SE ENCUENTRAN DATOS ";
    }


    echo $salida;

    $mysqli->close();



?>