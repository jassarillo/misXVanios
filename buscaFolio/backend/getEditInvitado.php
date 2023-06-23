<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db.php';

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD']=='GET'){
        $query="select * from `invitados` where id ='". $_GET['id']."'";
        $resultado=metodoGet($query);
        echo json_encode($resultado->fetchAll(PDO::FETCH_ASSOC));
   
    header("HTTP/1.1 200 OK");
    exit();
}
?>