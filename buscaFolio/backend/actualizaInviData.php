<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db.php';

header('Access-Control-Allow-Origin: *');

    $familia  =$_REQUEST['familia'];
    $nombre   =$_REQUEST['nombre'];
    $folio    =$_REQUEST['folio'];
    $id_input =$_REQUEST['id_input'];

 

    
    $query="update invitados set  nombre = '$nombre', folio = '$folio' where id=$id_input";
    //$queryAutoIncrement="select MAX(persona_padron_id) as id from datos_contacto";
    //$resultado=metodoPost($query, $queryAutoIncrement);
    $resultado=metodoGet($query, 0);
    //print_r($resultado['id']);
    
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();




?>