<?php

session_start();
$_SESSION['first_name'];

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$_SESSION['time_of_incident']);
$pdf->Cell(40,10,$_SESSION['date_of_incident']);
$pdf->Cell(40,10,$_SESSION['weather']);
$pdf->Cell(40,10,$_SESSION['medium']);
$pdf->Cell(40,10,$_SESSION['address']);
$pdf->Cell(40,10,$_SESSION['landmark']);
$pdf->Cell(40,10,$_SESSION['describtion_of_area']);
$pdf->Cell(40,10,$_SESSION['suspect']);
$pdf->Cell(40,10,$_SESSION['sus_race']);
$pdf->Cell(40,10,$_SESSION['sus_gender']);
$pdf->Cell(40,10,$_SESSION['relation_to']);
$pdf->Cell(40,10,$_SESSION['sus_language']);
$pdf->Cell(40,10,$_SESSION['sus_number']);
$pdf->Cell(40,10,$_SESSION['before_incident']);
$pdf->Cell(40,10,$_SESSION['during_incident']);
$pdf->Cell(40,10,$_SESSION['end_incident']);
$pdf->Cell(40,10,$_SESSION['sus_approach']);
$pdf->Cell(40,10,$_SESSION['sus_approach_num']);
$pdf->Cell(40,10,$_SESSION['sus_degrade']);
$pdf->Cell(40,10,$_SESSION['first_name']);
$pdf->Cell(40,10,$_SESSION['middle_name']);
$pdf->Cell(40,10,$_SESSION['last_name']);
$pdf->Cell(40,10,$_SESSION['race']);
$pdf->Cell(40,10,$_SESSION['gender']);
$pdf->Cell(40,10,$_SESSION['race_other']);
$pdf->Cell(40,10,$_SESSION['age']);
$pdf->Cell(40,10,$_SESSION['ethnicity']);
$pdf->Cell(40,10,$_SESSION['cultural']);
$pdf->Cell(40,10,$_SESSION['able_bodied']);
$pdf->Cell(40,10,$_SESSION['citzenship']);
$pdf->Cell(40,10,$_SESSION['religion']);
$pdf->Cell(40,10,$_SESSION['city']);
$pdf->Cell(40,10,$_SESSION['native_language']);
$pdf->Cell(40,10,$_SESSION['fear']);
$pdf->Cell(40,10,$_SESSION['rank_safety']);
$pdf->Cell(40,10,$_SESSION['rank_wronged']);
$pdf->Cell(40,10,$_SESSION['phone_contact']);
$pdf->Cell(40,10,$_SESSION['phone_contact_number']);
$pdf->Cell(40,10,$_SESSION['electronic_comm']);
$pdf->Cell(40,10,$_SESSION['rank_threat']);
$pdf->Cell(40,10,$_SESSION['followed']);
$pdf->Cell(40,10,$_SESSION['rank_distress']);
$pdf->Cell(40,10,$_SESSION['rank_safety_community']);

$pdf->Output();


?>