<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(80, 10, 'Hola mundo');
$pdf->Output('I');


/*
http://www.fpdf.org/en/tutorial/tuto1.htm

$tDate = date("F j, Y, g:i a");

function Footer() {
// margen a 1.5 cm de la base
$this->SetY(-15);

$this->SetFont('Arial','I',8);

// fecha
setlocale(LC_TIME, "");
date_default_timezone_set('Europe/Madrid');
$date_today = utf8_encode(strftime('%A %d %B %Y'));
$this->Cell(0,10,$date_today,0,0,'L');

// Num de página
$this->Cell(0,10,'Página '.$this->PageNo().' {nb}',0,0,'R');
}

if (isset($_POST['submit'])) {
    //collect form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];

    //check for a valid surname address
    if (!filter_var($surname, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid surname address';
        echo $error;
    }
    //if no errors carry on
    if (!isset($error)) {
        //create HTML of the post data
        $body = '<h1>Data from form</h1>'
            . '<p>Name: ' . $name . '</p>'
            . '<p>Surname: ' . $surname . '</p>';

        require_once __DIR__ . '/vendor/autoload.php';
        /*$mpdf = new \Mpdf\Mpdf()

        $mpdf->WriteHTML($body);

        $mpdf->SetDisplayMode('fullpage');
        $mpdf->list_indent_first_level = 0;

        $mpdf->Output();;
    }
}
?>
*/