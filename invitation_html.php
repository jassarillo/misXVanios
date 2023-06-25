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

  $img_xv = "images/07.jpg";
  $img_xv64 = "data:image/jpg;base64," . base64_encode(file_get_contents($img_xv));
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
      color: black;
      top:650px;
      margin-left: 210px;
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
      margin-left: <?php if(strlen($invitados_name['familia']) >= 8){ echo "230px"; }else{ echo "278px"; } ?>;
    }
    .codigo_confirm{
      position: absolute;
      color: gray;
      top: 735px;
      margin-left: 270px;
    }
    .img_xv{
      width: 240px;
      height: 359px;
      position: absolute;
      top: 294px;
      margin-left: 245px;
    
    }
    .btn_code{
    position: absolute;
    top: 785px;
    margin-left: 315px;


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
    padding: 8px 18px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: fit-content;
    word-break: break-word;
    border: 0;

    }


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


$registros = $db->query("SELECT familia FROM invitados where  folio ='" . $idFolio . "' limit 1");
$invitados_name = $registros->fetch(); 
    

$resultado = $db->query("SELECT count(id) as count FROM invitados where estatus = 1 and folio ='" . $idFolio . "'");
$personas = $resultado->fetch(); 
?>

  <h1 class="acompaname">Acompañame a Fesejar:</h1>
  
  <h3 class="codigo_confirm">Código de confirmación</h3>
  <button class="btn_code" role="button"><?php echo $idFolio?></button>
  <a href="www.google.com" class="myButton">INVITACIÓN DIGITAL</a>

  <div>
      <img src="<?php echo $flores64 ?>" class="flores" />
  </div>
  <div>
      <img src="<?php echo $majo64 ?>" class="majo" />
  </div>
  <div>
      <img src="<?php echo $majo64 ?>" class="mis_xv" />
  </div>
  <div>
    <img src="<?php echo $cinta64 ?>" class="cinta" />
  </div>
  <div>
    <img src="<?php echo $img_xv64 ?>" class="img_xv" />
  </div>
  

<h1 class="familia_name" align="text-center"><?php echo $invitados_name['familia'];?></h1>


</body>
</html>