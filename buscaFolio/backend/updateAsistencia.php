<?php 
include 'db.php';

header('Access-Control-Allow-Origin: *');
//print_r($_REQUEST['nombre']);



    $invitados = $_REQUEST['invitados'];
    $idFolio = $_REQUEST['idFolio'];
    $invitadosSeparados = implode(',', $invitados);
    //print_r($invitadosSeparados);


    $query="UPDATE invitados SET estatus=0 WHERE folio ='" . $idFolio."'";
    $resultado=metodoPut($query);

    $query="UPDATE invitados SET estatus=1 WHERE id in ($invitadosSeparados)";
    $resultado=metodoPut($query);
    //echo json_encode($resultado);
    

    /*
    $query="insert into datos_contacto (persona_padron_id,cel_propio, tel_fijo,
    cel_familia, email) 
    values ('$id_contacto','$cel_propio', '$tel_fijo',
    '$cel_familia', '$email')";
    $queryAutoIncrement="select MAX(persona_padron_id) as id from datos_contacto";
    $resultado=metodoPost($query, $queryAutoIncrement);
    //print_r($resultado['id']);*/
    
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();



?>