<?php

include './fpdf/fpdf.php';
include './conexaomarvel.php';

$pessoas = selectAllPessoa();

$pdf = new FPDF();
$pdf->AddPage();
//para o cabeçalho
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Lista de filmes cadastrados'),0,0,"C");
$pdf->Ln(15);

$pdf->SetFont("Arial","I",6);
$pdf->Cell(32,5,"Nome do filme",1,0,"C");
$pdf->Cell(32,5,"Ano do filme",1,0,"C");
$pdf->Cell(32,5,utf8_decode("Gênero"),1,0,"C");
$pdf->Cell(32,5,utf8_decode("Classificação indicativa"),1,0,"C");
$pdf->Cell(32,5,"Duracao",1,0,"C");
$pdf->Cell(32,5,"Diretor",1,0,"C");
$pdf->Ln();

foreach ($pessoas as $pessoa){
    $pdf->Cell(32,7,utf8_decode($pessoa["nome"]),1,0,"C");
    $pdf->Cell(32,7,$pessoa["ano"],1,0,"C");
    $pdf->Cell(32,7,utf8_decode($pessoa["genero"]),1,0,"C");
    $pdf->Cell(32,7,$pessoa["classificacao_indicativa"],1,0,"C");
    $pdf->Cell(32,7,$pessoa["duracao"],1,0,"C");
    $pdf->Cell(32,7,utf8_decode($pessoa["diretor"]),1,0,"C");
    $pdf->Ln();
}

$pdf->Output();