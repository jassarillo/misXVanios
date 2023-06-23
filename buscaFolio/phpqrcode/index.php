<?php    
$folioPrueba = $_REQUEST['idFolio'];
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    //echo $PNG_TEMP_DIR;
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";   

//for ($i = 1; $i <= 10; $i++) {
    


    $filename = $PNG_TEMP_DIR.'invitado_'. $folioPrueba .'.png';
    $errorCorrectionLevel = 'L';
   
    $matrixPointSize = 4;
    
    $filename = $PNG_TEMP_DIR.'test'.'invitado_'. $folioPrueba .'.png';

    

    QRcode::png('https://www.misxvmajo.systemar.com.mx/invitados_escanner.php?idFolio='. $folioPrueba, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    

 //../pdf.php?idFolio='+idFolio
    header("Location: ../../buscaFolio/pdf.php?idFolio=".$folioPrueba);
    //echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
    
    //}

    