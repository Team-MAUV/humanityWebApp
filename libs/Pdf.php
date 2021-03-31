<?php
 
class PDF 
{
  public static function report() {

    ob_start();
  require('fpdf182/fpdf.php');


  
    $name = "A.P. Nishshanka";
    $r_Number = "DHM001";
    $amount = "250";


  $pdf = new FPDF('p','mm', 'A4');
  $pdf->AddPage();

  $pdf->Image('https://lh3.googleusercontent.com/NCUT.tzuchin/RwifoWIXw2I/AAAAAAAAAWs/y3eQsZvVHTQ/s400/%E6%85%88%E9%9D%92logo.jpg',60,30,90,0,'JPEG');


  $pdf->SetFont('Arial','B',16);
  $pdf->Cell(190,20,'TzuChi Foundation - Hambantota, Sri Lanka',0,0,'C');
  $pdf->Ln(80);

  $pdf->SetFont('Arial','U',14);
  $pdf->Cell(190, 5, 'Token of Appreciation',0, 0,'C');
  $pdf->Ln(10);

  $pdf->SetFont('Arial','',14);
  $pdf->Cell(190, 5, 'Receipt No: '.$r_Number,0, 0,'C');
  $pdf->Ln(10);

  $pdf->SetFont('Arial','B',16);
  $pdf->Cell(190,20,'Being Grateful to :        '.$name,0,5,'C');
  $pdf->Ln(0);
  $pdf->SetFont('Arial','B',14);
  $pdf->Cell(190,20,'Donation Amount : Rs.'.$amount,0,5,'C');
  $pdf->Ln(10);

  $pdf->SetFont('Arial','I',12);
  $pdf->Cell(190, 0, "Every second, compete for goodness",0, 0,'C');
  $pdf->Line(1, 150, 400, 150);

 
  $pdf->Output();

  



  
  ob_end_flush(); 
  }
}
