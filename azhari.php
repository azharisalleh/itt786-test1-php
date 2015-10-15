<?php

/*
Author Azhari Hj Salleh
Github ID : github/azharisalleh
Title : PHP program to write binary file (pdf) 
Content:
        Name:
	Matrix No:
	Gender:
	Age:
	E-mails: 
	Mobile Phone:
 */
require("fpdf/fpdf.php");
$pdf=new FPDF();
///var_dump(get_class_method($pdf));

$pdf->AddPage();
//$pdf->Image('sifu.jpg');
$pdf->SetFont("Arial","B","20");
$pdf->Cell(0,10,"My PDF PAGE",1,1,"C");

$pdf->SetFont("Arial","I","15");
$pdf->Cell(0,10,"My Name Azhari Hj Salleh",1,1,"C");

$pdf->SetFont("Arial","I","15");
$pdf->Cell(0,10,"Matrix No : 2014461166 ",1,1,"C");

$pdf->SetFont("Arial","I","15");
$pdf->Cell(0,10,"Gender : Male ",1,1,"C");

$pdf->SetFont("Arial","I","15");
$pdf->Cell(0,10,"Age : 40 ",1,1,"C");

$pdf->SetFont("Arial","I","15");
$pdf->Cell(0,10,"Email : azhari@gmail.com ",1,1,"C");

$pdf->SetFont("Arial","I","15");
$pdf->Cell(0,10,"Mobile No : 01366666666 ",1,1,"C");

$pdf->SetFont("","","20");
$pdf->write(5,"");
$pdf->Output('azhari.pdf');
?>
