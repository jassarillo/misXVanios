<?php 
ini_set('display_errors', 0);
error_reporting(E_ALL);
?>
<html>
<head>
  <?php 
  $idFolio =$_REQUEST['idFolio'];
  
  $fondo = "elementos/fondo.jpg";
  $imagenFondo = "data:image/png;base64," . base64_encode(file_get_contents($fondo));

  $flores = "elementos/flores.jpg";
  $flores64 = "data:image/png;base64," . base64_encode(file_get_contents($flores));

  $cinta = "elementos/cinta.jpg";
  $cinta64 = "data:image/png;base64," . base64_encode(file_get_contents($cinta));

  $majo = "elementos/majo.png";
  $majo64 = "data:image/png;base64," . base64_encode(file_get_contents($majo));

  $fecha = "elementos/fecha.jpg";
  $fecha64 = "data:image/png;base64," . base64_encode(file_get_contents($fecha));

  $lugar = "elementos/lugar.png";
  $lugar64 = "data:image/png;base64," . base64_encode(file_get_contents($lugar));

  $hora = "elementos/hora.png";
  $hora64 = "data:image/png;base64," . base64_encode(file_get_contents($hora));

  $lineas = "elementos/lineas.png";
  $lineas64 = "data:image/png;base64," . base64_encode(file_get_contents($lineas));

  $googleMaps = "elementos/googleMaps.png";
  $googleMaps64 = "data:image/png;base64," . base64_encode(file_get_contents($googleMaps));

  $qrcode = "buscaFolio/phpqrcode/temp/testinvitado_". $idFolio .".png";
  $qrcode64 = "data:image/png;base64," . base64_encode(file_get_contents($qrcode));
?>
  <style type="text/css">
    body {
     background-image: url("<?php echo $imagenFondo;?>");
     background-color: white;
     background-repeat: no-repeat;
     /*background-size: 1800px 1720px;*/
     background-size: 100% 100%;
    }
    .container-flores{
      width: 50px;
      height: 50px;
    }
    .flores{
      /*background-image: url("<?php echo $flores64;?>");*/
      background-repeat: no-repeat;
      color: white;
      width: 600px;
      height:370px;
      position: absolute;
      top: -30px;
      margin-left: 70px;
    }
    .majo{
      background-repeat: no-repeat;
      width: 170px;
      height: 85px;
      position: absolute;
      top: 280px;
      margin-left: 270px;
    }
    .cinta{
      background-repeat: no-repeat;
      
      width: 725px;
      height: 200px;
      position: absolute;
      top: 450px;
      margin-left: 0px;
    }
    .fecha{
      background-repeat: no-repeat;
      
      width: 180px;
      height: 180px;
      position: absolute;
      top: 750px;
      margin-left: 28px;
    }
    .lugar{
      background-repeat: no-repeat;
      
      width: 180px;
      height: 180px;
      position: absolute;
      top: 750px;
      margin-left: 260px;
    }
    .hora{
      background-repeat: no-repeat;
      
      width: 180px;
      height: 180px;
      position: absolute;
      top: 750px;
      margin-left: 500px;
    }
    .fam_nombre{
      position: absolute;
      color: #FF0000;
      top: 390px;
      margin-left: 210px;
    }
    .nombre_desc{
      position: absolute;
      color: #FF0000;
      top: 390px;
      margin-left: 330px;
    }
    .invitados{
      position: absolute;
      color: #FF0000;
      top: 635px;
      margin-left: 240px;
      
    }
    .nro_desc{
      position: absolute;
      color: #FF0000;
      top: 635px;
      margin-left: 430px;
    }
    .vestimenta{
      position: absolute;
      color: #800040;
      top: 655px;
      margin-left: 100px;
    }
    .linea_roja{
      width: 250px;
      height: 180px;
      position: absolute;
      top: 750px;
      margin-left: 230px;
    }
    .googleMaps{
      width: 60px;
      height: 60px;
      position: absolute;
      top: 720px;
      margin-left: 310px;
    }
    .googleMaps_2{
      width: 60px;
      height: 60px;
      position: absolute;
      top: 830px;
      margin-left: 310px;
    }
    .qrcode{
      width: 156px;
      height: 156px;
      position: absolute;
      top: 472px;
      margin-left: 286px;
      border-radius: 6px, 6px, 6px, 6px;
    }
  </style>

</head>

<body>

<?php 

$opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
try {
    $db = new PDO('mysql:host=143.198.231.211;dbname=xv', 'xv', 'UYUhYCwHo4OPHnILNDxP', $opciones);
    //$db = new PDO('mysql:host=localhost;dbname=xv_anios', 'root', 'root', $opciones);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}


$registros = $db->query("SELECT * FROM invitados where  folio ='" . $idFolio . "' limit 1");
$invitados_name = $registros->fetch(); 
    

$resultado = $db->query("SELECT count(id) as count FROM invitados where estatus = 1 and folio ='" . $idFolio . "'");
$personas = $resultado->fetch(); 
?>

  <h2 class="fam_nombre">FAMILIA:</h2>
  <h2 class="nombre_desc"><?php echo strtoupper($invitados_name['familia']);?></h2>
  <h3 class="invitados">No. de Invitados:</h3>
  <h3 class="nro_desc"><?php echo $personas['count'];?></h3>
  <h2 class="vestimenta">Código de Etiqueta Formal (No Color Rojo, Ni Vino)</h2>
 


  <div>
      <img src="<?php echo $flores64 ?>" class="flores" />
  </div>
  <div>
      <img src="<?php echo $majo64 ?>" class="majo" />
  </div>
  <div>
    <img src="<?php echo $cinta64 ?>" class="cinta" />
  </div>
  <div>
    <img src="<?php echo $fecha64 ?>" class="fecha" />
  </div>
  <div>
    <img src="<?php echo $lugar64 ?>" class="lugar" />
  </div>
  <div>
    <img src="<?php echo $hora64 ?>" class="hora" />
  </div>
  <div>
    <img src="<?php echo $lineas64 ?>" class="linea_roja" />
  </div>
  <div>
    <img src="<?php echo $googleMaps64 ?>" class="googleMaps" />
  </div>
  <div>
    <img src="<?php echo $googleMaps64 ?>" class="googleMaps_2" />
  </div>
  <div>
    <img src="<?php echo $qrcode64 ?>" class="qrcode" />
  </div>
  





</body>
</html>