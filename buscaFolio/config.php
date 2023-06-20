<?php

//$conn = new mysqli("localhost", "root", "root", "xv_anios");
$conn = new mysqli("143.198.231.211", "xv", "xv", "UYUhYCwHo4OPHnILNDxP");

if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}else{
    //print_r("conexion exitosa!!");
}

?>