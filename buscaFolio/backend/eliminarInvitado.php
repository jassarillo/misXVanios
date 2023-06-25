<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db.php';

header('Access-Control-Allow-Origin: *');

    $id    =$_REQUEST['id'];
   

 

    
    $query=" delete from invitados where id = '$id'";


    //"insert into invitados 
    //		(fecha, nombre, nomesa, folio, estatus, asiste, familia) 
    //values (now(),'$nombre','0', '$folio', '0', '0', '$familia')";
   
    $resultado=metodoGet($query, 0);
    //print_r($resultado['id']);
    
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();




?>