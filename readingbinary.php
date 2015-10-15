<?php
/*
Author Azhari Hj Salleh
Github ID : github/azharisalleh
Title : PHP program to reading binary file (pdf)
Content:
        Name:
	Matrix No:
	Gender:
	Age:
	E-mails: 
	Mobile Phone:
 */

$file = 'azhari.pdf';
$filename = 'azhari.pdf';
header('Content-type: application/pdf');
header('Content-Disposition:inline; filename"' . $filename .'"');
header('Content-Transfer-Encoding: binary');
header('Accept_Ranges:bytes');
@readfile($file);

?>