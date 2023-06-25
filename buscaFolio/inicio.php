<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
set_time_limit(1);
include 'backend/db.php';

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['idFolio'])){
        $query="select * from `invitados` where folio ='". $_GET['idFolio']."'";
        $resultado=metodoGet($query);
        //print_r(array_values($resultado));
        echo json_encode($resultado->fetchAll(PDO::FETCH_ASSOC));
    }else{
        $query="select id,nombre, estatus, familia from invitados ";
        $resultado=metodoGet($query);
        echo json_encode($resultado->fetchAll());
        //print_r($resultado());
        //print_r(array_values($resultado));
        //echo array_values(json_decode($resultado->fetchAll())); 
    }
    header("HTTP/1.1 200 OK");
    exit();
}



if($_POST['METHOD']=='POST'){
    unset($_POST['METHOD']);
    $nombre=$_POST['nombre'];
    $lanzamiento=$_POST['lanzamiento'];
    $desarrollador=$_POST['desarrollador'];
    $query="insert into frameworks(nombre, lanzamiento, desarrollador) values ('$nombre', '$lanzamiento', '$desarrollador')";
    $queryAutoIncrement="select MAX(id) as id from frameworks";
    $resultado=metodoPost($query, $queryAutoIncrement);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='PUT'){
    unset($_POST['METHOD']);
    echo $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $lanzamiento=$_POST['lanzamiento'];
    $desarrollador=$_POST['desarrollador'];
    $query="UPDATE frameworks SET nombre='$nombre', lanzamiento='$lanzamiento', desarrollador='$desarrollador' WHERE id='$id'";
    $resultado=metodoPut($query);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD']=='DELETE'){
    unset($_POST['METHOD']);
    $id=$_GET['id'];
    $query="DELETE FROM frameworks WHERE id='$id'";
    $resultado=metodoDelete($query);
    echo json_encode($resultado);
    header("HTTP/1.1 200 OK");
    exit();
}

header("HTTP/1.1 400 Bad Request");


?>