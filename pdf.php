<?php
ob_start();

require('index.php');

$html = ob_get_clean();

require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('latter');

$dompdf->render();
$dompdf->stream("mis_xv_Majo.pdf");
//$dompdf->stream("titulo.pdf", array('Attachment' => false));




?>