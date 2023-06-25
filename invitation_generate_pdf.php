<?php
error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', '1');
ob_start();
require('invitation_html.php');

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
//$dompdf->stream("mis_xv_Majo.pdf");
$dompdf->stream("titulo.pdf", array('Attachment' => false));




?>