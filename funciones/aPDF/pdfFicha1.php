<?php

//@author Alberto Bravo
require_once('../fpdf/fpdf.php');
ob_end_clean();

//fecha a traer del html con la fecha en la que se rellena el formulario
//$confirmación = $_REQUEST['fechaconfirmacion'];
//$usuario = $_REQUEST['user'];

$usuario = 'Vera';
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$sql = "SELECT * FROM ficha WHERE usuario = '" . $usuario . "'";
$query = $con->prepare($sql);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
$pdf = new FPDF();
$pdf->AddPage('p', 'A4');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Image("../img/Logo_Hiken.jpg", 10, 8, 35, 38, "JPG");
foreach ($resultado as $valor):
    $pdf->Cell(0);
    $pdf->Ln(40);
    $pdf->Write(10, '                                     FICHA DEPORTIVA');
    $pdf->Ln(15);
    $pdf->Write(10, utf8_decode('1. Identificación'));
    $pdf->Ln(15);
    $pdf->Write(10, utf8_decode('Nombre               Primer apellido           Segundo apellido'));
    $pdf->Ln();
    $pdf->Cell(50, 10, utf8_decode($valor['nombre']), 1, 0, 'C');
    $pdf->Cell(65, 10, utf8_decode($valor['apellido1']), 1, 0, 'C');
    $pdf->Cell(70, 10, utf8_decode($valor['apellido2']), 1, 0, 'C');
    $pdf->Ln(15);
    $pdf->Write(10, utf8_decode('Tipo                     Nº documento             Fecha nacimiento'));
    $pdf->Ln();
    $pdf->Cell(50, 10, utf8_decode($valor['tipo']), 1, 0, 'C');
    $pdf->Cell(65, 10, utf8_decode($valor['documento']), 1, 0, 'C');
    $pdf->Cell(70, 10, utf8_decode($valor['nacimiento']), 1, 0, 'C');
    $pdf->Ln(15);
    $pdf->Write(10, utf8_decode('Lugar de nacimiento                          Nacionalidad'));
    $pdf->Ln();
    $pdf->Cell(40, 10, utf8_decode($valor['lugarnacim']), 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode($valor['nacionalidad']), 1, 0, 'C');
    $pdf->Ln(15);
    $pdf->Write(10, utf8_decode('Lugar de nacimiento                          Nacionalidad'));
    $pdf->Ln();
    $pdf->Cell(80, 10, utf8_decode($valor['direccion']), 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode($valor['ciudad']), 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode($valor['provincia']), 1, 0, 'C');
    $pdf->Ln(15);
    $pdf->Write(10, utf8_decode('Lugar de nacimiento                          Nacionalidad'));
    $pdf->Ln();
    $pdf->Cell(40, 10, utf8_decode($valor['codpostal']), 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode($valor['telefono']), 1, 0, 'C');
    $pdf->Cell(80, 10, utf8_decode($valor['mail']), 1, 0, 'C');
    $pdf->Ln(15);
    $pdf->Write(10, utf8_decode('Lugar de nacimiento                          Nacionalidad'));
    $pdf->Ln();
    $pdf->Write(10, utf8_decode('¿Padece usted o su hij@ alguna enfermedad o trastorno que no le permita practicar kenpo?'));
    $pdf->Cell(40, 10, utf8_decode($valor['enfermedad']), 1, 0, 'C');
    $pdf->Cell(80, 10, utf8_decode($valor['direccion']), 1, 0, 'C');
    $pdf->Write(10, utf8_decode('En caso afirmativo indique cuales'));
    $pdf->Ln();
    $pdf->Cell(185, 50, utf8_decode($valor['mensaje']), 1, 0, 'C');
endforeach;
$pdf->Output();
?>
