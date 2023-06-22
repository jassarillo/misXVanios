<?php 
include '../db/db.php';

header('Access-Control-Allow-Origin: *');

    $id_contacto    =$_REQUEST['id_contacto'];
    $ine            =$_REQUEST['ine'];
    $cel_propio     =$_REQUEST['cel_propio'];
    $curp           =$_REQUEST['curp'];
    $tel_fijo       =$_REQUEST['tel_fijo'];
    $imss           =$_REQUEST['imss'];
    $cel_familia    =$_REQUEST['cel_familia'];
    $rfc            =$_REQUEST['rfc'];
    $email          =$_REQUEST['email'];


    $query="UPDATE datos_personales SET rfc='$rfc', curp='$curp', 
    ine='$ine', imss='$imss' WHERE persona_padron_id='$id_contacto'";
    $resultado=metodoPut($query);
    //echo json_encode($resultado);
    

    
    $query="insert into datos_contacto (persona_padron_id,cel_propio, tel_fijo,
    cel_familia, email) 
    values ('$id_contacto','$cel_propio', '$tel_fijo',
    '$cel_familia', '$email')";
    $queryAutoIncrement="select MAX(persona_padron_id) as id from datos_contacto";
    $resultado=metodoPost($query, $queryAutoIncrement);
    //print_r($resultado['id']);
    
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();



?>