<?php 
require('../dependency/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

// Cell(width, height, text, border, end line, [align])

$pdf->Cell(130, 5, 'Lance Jared', 0, 0);
$pdf->Cell(59, 5, 'Cabiscuelas', 0, 1);

$pdf->SetFont('Arial', '', 12);

$pdf->Cell(130, 5, '[Street]', 0, 0);
$pdf->Cell(59, 5, '', 0, 1);

$pdf->Cell(130, 5, '[City, Country, ZIP]', 0, 0);
$pdf->Cell(30, 5, 'Date', 0, 0);
$pdf->Cell(29, 5, '[dd/mm/yyyy]', 0, 1);

$pdf->Cell(130, 5, '[Phone #]', 0, 0);
$pdf->Cell(30, 5, '[Invoice #]', 0, 0);
$pdf->Cell(29, 5, '[dd/mm/yyyy]', 0, 1);

$pdf->Cell(130, 5, '[Fax #]', 0, 0);
$pdf->Cell(30, 5, 'Customer ID', 0, 0);
$pdf->Cell(29, 5, '[#595736]', 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Name]', 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Company Name]', 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Address]', 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Phone]', 0, 1);

//dummy empty cell
$pdf->Cell(189, 10, '', 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(130, 5, 'Description', 1, 0);
$pdf->Cell(25, 5, 'Taxable', 1, 0);
$pdf->Cell(34, 5, 'Amount', 1, 1);

$pdf->SetFont('Arial', '', 12);

$pdf->Cell(130, 5, 'Ultra coll fridge', 1, 0);
$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(34, 5, '2,350', 1, 1);

$pdf->Cell(130, 5, 'Super clean dishwasher', 1, 0);
$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(34, 5, '2,450', 1, 1);

$pdf->Cell(130, 5, 'Something else', 1, 0);
$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(34, 5, '2,450', 1, 1);

$pdf->Cell(130, 5, '', 1, 0);
$pdf->Cell(25, 5, 'Subtotal', 1, 0);
$pdf->Cell(4, 5, '-', 1, 0);
$pdf->Cell(30, 5, '4,539', 1, 1);

$pdf->Cell(130, 5, '', 1, 0);
$pdf->Cell(25, 5, 'Taxable', 1, 0);
$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(30, 5, '0', 1, 1);

$pdf->Cell(130, 5, '', 1, 0);
$pdf->Cell(25, 5, 'Tax rate', 1, 0);
$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(30, 5, '10%', 1, 1);

$pdf->Cell(130, 5, '', 1, 0);
$pdf->Cell(25, 5, 'Total due', 1, 0);
$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(30, 5, '4,050%', 1, 1);


$pdf->Output();

?>