<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
set_time_limit(1);
include 'backend/db.php';

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD']=='GET'){
    try{
    if(isset($_GET['idFolio'])){
        $query="select * from `invitados` where folio ='". $_GET['idFolio']."'";
        $resultado=metodoGet($query);
        //print_r(array_values($resultado));
        echo json_encode($resultado->fetchAll(PDO::FETCH_ASSOC));
    }else{
        //$query="select id,nombre, estatus, familia, folio from invitados order by familia DESC  limit ". $_GET['inicio'].",". $_GET['fin']. "";
        $query="select id,nombre, estatus, familia, folio from invitados order by familia asc ";
        //echo $query;
        $resultado=metodoGet($query);
        
        $query_count="select count(id) as count_id from invitados ";
        $resultado_count=metodoGet($query_count);
       


        $datos = array(
          'resultado' => $resultado->fetchAll(),
          'resultado_count' => $resultado_count->fetchAll()
        );

        echo json_encode($datos, JSON_UNESCAPED_UNICODE);
        //print_r($datos);
     
    }
} catch (Exception $e) {
    print_r('Excepción capturada: ',  $e->getMessage(), "\n");
}

    //header("HTTP/1.1 200 OK");
    //exit();
}





?>