<?php
// include autoloader
/*require_once ('dompdf/autoload.inc.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// Instancia do Optinons do Dompdf
$options = new Options();
$options->setChroot(__DIR__);

// Instancia do Dompdf
$dompdf = new Dompdf($options);
//$dompdf->loadHtmlFile('curriculo.html');

ob_start();
require __DIR__ . "/curriculo.php";
$dompdf->loadHtml(ob_get_clean());

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', '');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("meu-curriculo.pdf", ["Attachment" => false]);*/

//header("Location: curriculo.php");