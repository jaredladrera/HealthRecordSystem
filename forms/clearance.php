<?php 
require('../dependency/fpdf/fpdf.php');
class PDF extends FPDF
{

// Page header
function Header()
{
    // Logo
     $this->Image('../images/bsulogo.png',50,10,100);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Ln(25);
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Medical History',0,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
}


// Colored table
function FancyTable($header)
{
    if(isset($_POST['id'])) {
        
        $this->Cell(40,0,'Name: Firstname Lastname '.$_POST['id'].'');
    }
    $this->Cell(40,0,'Name: Firstname Lastname ');
    $this->Ln(10);
    // Colors, line width and bold font
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    // $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header

    $w = array(60, 55, 70);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],8,$header[$i],2,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    // foreach($data as $row)
    // {
    //     $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
    //     $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
    //     $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
    //     $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
    //     $this->Ln();
    //     $fill = !$fill;
    // }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Ln(8);
$pdf->AddPage();
$pdf->SetFont('Times','',12);
// Column headings


$pdf->SetFont('Arial','',14);
$header = array('Date issue', 'Health issue', 'Medicine take');
$pdf->FancyTable($header);

// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output('','Medical history.pdf'); 
?>

?>