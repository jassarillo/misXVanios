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

  $img_xv = "images/majo_3d.png";
  $img_xv64 = "data:image/png;base64," . base64_encode(file_get_contents($img_xv));

  $xv = "images/xv.png";
  $xv64 = "data:image/png;base64," . base64_encode(file_get_contents($xv));

  $acompaname = "images/acompaname.png";
  $acompaname64 = "data:image/png;base64," . base64_encode(file_get_contents($acompaname));

  $boton_digital = "images/boton_digital.png";
  $boton_digital64 = "data:image/png;base64," . base64_encode(file_get_contents($boton_digital));

  $haz_click = "images/haz_click.png";
  $haz_click64 = "data:image/png;base64," . base64_encode(file_get_contents($haz_click));


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
      height:290px;
      position: absolute;
      top: -30px;
      margin-left: 70px;
    }
    .mis_xv{
      background-repeat: no-repeat;
      width: 170px;
      height: 95px;
      position: absolute;
      top: 280px;
      margin-left: 40px;
    }
    .majo{
      background-repeat: no-repeat;
      width: 170px;
      height: 95px;
      position: absolute;
      top: 280px;
      margin-left: 520px;
    }
    .cinta{
      background-repeat: no-repeat;
      
      width: 725px;
      height: 200px;
      position: absolute;
      top: 450px;
      margin-left: 0px;
    }
    .acompaname{
      position: absolute;
      top:670px;
      margin-left: 120px;
    }
    .nombre_desc{
      position: absolute;
      top: 390px;
      margin-left: 330px;
    }
    .familia_name{
      position: absolute;
      color: #FF0000;
      font-family: cursive;
      top: 695px;
      margin-left: <?php 
      if(strlen($invitados_name['familia']) <= 8 &&  strlen($invitados_name['familia']) >=14)
      { echo "180px"; 
      }elseif(strlen($invitados_name['familia']) < 10){ 
        echo "280px"; 
      }else{ 
        echo "150px"; } ?>;
    }
    .codigo_confirm{
      position: absolute;
      color: gray;
      top: 735px;
      margin-left: 270px;
    }
    .img_xv{
      width: 340px;
      height: 459px;
      position: absolute;
      top: 191px;
      margin-left: 220px;
    
    }
    .btn_code{
    position: absolute;
    top: 785px;
    margin-left: 310px;


    background: gray;
    border-radius: 999px;
    box-shadow: #5E5DF0 0 10px 20px -10px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
    opacity: 1;
    outline: 0 solid transparent;
    padding: 8px 38px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: fit-content;
    word-break: break-word;
    border: 0;

    }
  .btn_digital{
    position: absolute;
    top: 835px;
    margin-left: 165px;
  }
  .haz_click{
    position: absolute;
    top: 925px;
    margin-left: 285px;
  }

/*
.myButton {
  position: absolute;
  top: 835px;
  margin-left: 160px;

  box-shadow:inset 22px 24px 24px -3px #e0b83e;
  background:linear-gradient(to bottom, #cfc461 5%, #948744 100%);
  background-color:#cfc461;
  border-radius:15px;
  border:1px solid #e6d1a6;
  display:inline-block;
  cursor:pointer;
  color:#4e4f3f;
  font-family:Arial;
  font-size:26px;
  font-weight:bold;
  padding:18px 76px;
  text-decoration:none;
  text-shadow:0px 0px 0px #ced9bf;
}
.myButton:hover {
  background:linear-gradient(to bottom, #948744 5%, #cfc461 100%);
  background-color:#948744;
}
.myButton:active {
  position:relative;
  top:1px;
}*/


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


$registros = $db->query("SELECT familia FROM invitados where  folio ='" . $idFolio . "' limit 1");
$invitados_name = $registros->fetch(); 
    

$resultado = $db->query("SELECT count(id) as count FROM invitados where estatus = 1 and folio ='" . $idFolio . "'");
$personas = $resultado->fetch(); 
?>

  
  <h3 class="codigo_confirm">Código de confirmación </h3>
  <button class="btn_code" role="button"><?php echo $idFolio?></button>


  <div>
      <img src="<?php echo $flores64 ?>" class="flores" />
  </div>
  <div>
      <img src="<?php echo $majo64 ?>" class="majo" />
  </div>
  <div>
      <img src="<?php echo $xv64 ?>" class="mis_xv" />
  </div>
  <div>
    <img src="<?php echo $cinta64 ?>" class="cinta" />
  </div>
  <div>
    <img src="<?php echo $img_xv64 ?>" class="img_xv" />
  </div>
  <div>
      <img src="<?php echo $acompaname64 ?>" class="acompaname" />
  </div>
  <div>
      <a href="https://www.misxvmajo.systemar.com.mx/index.php"><img src="<?php echo $boton_digital64 ?>" class="btn_digital" /></a>
  </div>
  <div>
      <img src="<?php echo $haz_click64 ?>" class="haz_click" />
  </div>
<h1 class="familia_name" align="text-center"><?php echo "Familia: " . $invitados_name['familia'];?></h1>


</body>
</html>