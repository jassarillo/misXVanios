<?php

$conn = new mysqli("localhost", "root", "root", "xv_anios");

if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}else{
    //print_r("conexion exitosa!!");
}

?>