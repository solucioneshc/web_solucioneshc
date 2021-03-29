<?php


$mysqli=new mysqli("localhost","hccomputer","Temporal1","hccomputer");

if(mysqli_connect_errno()){
    echo 'conexion fallida : ', mysqli_connect_error();
    exit();
}
?>