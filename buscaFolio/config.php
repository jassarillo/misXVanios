<?php

$conn = new mysqli("143.198.231.211", "xv", "UYUhYCwHo4OPHnILNDxP", "xv");

if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}else{
    //print_r("conexion exitosa!!");
}

?>