<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db.php';

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD']=='GET'){
        $query="select count(id) as num from `invitados` where folio ='". $_REQUEST['idFolio']."'";
        $resultado=metodoGet($query);
        //echo $resultado;
        echo json_encode($resultado->fetchAll(PDO::FETCH_ASSOC));
   
    header("HTTP/1.1 200 OK");
    exit();
}
?>