<?php
    
    define('FPDF_FONTPACH', 'font/');
    require ('pdf/fpdf.php');
    require_once 'Produtos.php';
    
    $dt1 = $_POST['dt1'];
    $dt2 = $_POST['dt2'];

    $pdf = new FPDF('P', 'cm', 'A4');
    $pdf->Open();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
    
    $produto = new Produtos();
        $pdf->Cell(3,1, 'Id' ,1,0,'C');
        $pdf->Cell(5,1, 'Nome',1,0,'C');
        $pdf->Cell(4,1, 'Categoria',1,0,'C');
        $pdf->Cell(4,1, 'Quantidade',1,0,'C');
        $pdf->Cell(3,1, 'Preco',1,1,'C');
    foreach ($produto->relatorioEntrada($dt1, $dt2) as $key => $value) {
        $pdf->Cell(3,1, $value->id_Produto,1,0,'C');
        $pdf->Cell(5,1, $value->nome_Produto,1,0,'C');
        $pdf->Cell(4,1, $value->categoria,1,0,'C');
        $pdf->Cell(4,1, $value->quantidade_Produto,1,0,'C');
        $pdf->Cell(3,1, $value->preco_Unitario,1,1,'C');
    }
    $pdf->Output();
    