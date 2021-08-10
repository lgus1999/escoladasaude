<?php

set_time_limit(1800);
set_include_path('rospdf-pdf-php-f957e49/src/'.PATH_SEPARATOR.get_include_path());

$nome = "David Pontes Silva";

include 'Cezpdf.php';

class Creport extends Cezpdf
{
    public function Creport($p, $o)
    {
        $this->__construct($p, $o, 'none', []);
    }
}
$pdf = new Creport('a4', 'portrait');

// IMPORTANT: In version >= 0.12.0 it is required to allow custom tags (by using $pdf->allowedTags) before using it
$pdf->allowedTags .= '|comment:.*?';

$pdf->ezSetMargins(20, 20, 20, 20);

$pdf->selectFont('Helvetica');


$pdf->ezText("<h1> Dados do paciente </h1>\n");


$pdf->ezText("Nome:     ".$nome."<br>");
$pdf->ezText("CPF:        ".$nome."<br>");
$pdf->ezText("Telefone:  ".$nome."<br>");


// external links

if (isset($_GET['d']) && $_GET['d']) {
    echo $pdf->ezOutput(true);
} else {
    $pdf->ezStream(['compress' => 0]);
}
