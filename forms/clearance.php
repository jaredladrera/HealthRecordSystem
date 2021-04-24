<?php 
require('../dependency/fpdf/fpdf.php');
require('../functions/mysqliConnection.php');
class PDF extends FPDF
{
    
// Page header
function Header()
{
    // Logo
     $this->Image('../images/bsulogo.png',50,10,100);
     $this->Image('../images/form-back.jpg',5,50,200);
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
    $database = new Database();
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = $database->conn->query("SELECT * FROM patients WHERE id='$id'");
        $data = $sql->fetch_array();
        $this->Cell(40,0,'Name: '.ucfirst($data['name']).' '.ucfirst($data['lastname']));
    }
    $this->Ln(10);
    // Colors, line width and bold font
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    // $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header

    $w = array(60, 55, 70);
    $x = array(60, 55, 70);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],8,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    if(isset($_GET['request'])) {
        if($_GET['request'] == 'only') {
            $this->Cell($x[0],8,$data['date_issue'],'LR',0,'C',$fill);
            $this->Cell($x[1],8,$data['issue'],'LR',0,'C',$fill);
            $this->Cell($x[2],8,$data['medecine_take'],'LR',0,'C',$fill);
            $this->Ln();
            $fill = !$fill;

        } else {
            $name = $data['name'];
            $lastname = $data['lastname'];
            $sql2 = $database->conn->query("SELECT * FROM patients WHERE name = '$name' AND lastname = '$lastname'");

            while($row = $sql2->fetch_array()) {
                $this->Cell($x[0],8,$row['date_issue'],'LR',0,'C',$fill);
                $this->Cell($x[1],8,$row['issue'],'LR',0,'C',$fill);
                $this->Cell($x[2],8,$row['medecine_take'],'LR',0,'C',$fill);
                $this->Ln();
                $fill = !$fill;
    
            }

        }

    }

    
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