<?php
include('dbconfig.php');
// $database = new Database();
require('fpdf/fpdf.php');
$id = $_GET['receipt'];
$sql = "Select * FROM booking WHERE bookid = '$id'";
$query = mysqli_query($handle, $sql);

$pdf = new FPDF();
$pdf->AddPage();
while($rows=mysqli_fetch_array($query))
   {

        $pdf->SetFont('Arial','B',10);
        $pdf->Ln();
        $pdf->Ln();
   }
   $pdf->Output();
$pdf->Output();
?>


  