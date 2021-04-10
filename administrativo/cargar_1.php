<?php

$dir_subida = '../imagenes/descargas/';
$fichero_subido = $dir_subida . basename($_FILES['img']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['img']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
 print_r($_FILES);
 print_r($fichero_subido);
 echo "<img src='http://localhost:8081/solucioneshc/web_solucioneshc/$fichero_subido' >";



 print "</pre>";

//  header ("Location:regist_descargas.php ");
?>
