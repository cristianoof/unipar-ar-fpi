<?php
// include autoloader
require_once ('dompdf/autoload.inc.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// Instancia do Optinons do Dompdf
$options = new Options();
$options->setChroot(__DIR__);

//var_dump($_POST);

// Instancia do Dompdf
$dompdf = new Dompdf($options);
//$dompdf->loadHtml('hello world');
$dompdf->loadHtmlFile(__DIR__.'/curriculo.html');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', '');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

//header("Location: curriculo.php");