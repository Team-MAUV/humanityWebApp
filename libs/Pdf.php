<?php
 
class PDF 
{
  public static function report() {

    ob_start();
  require('fpdf182/fpdf.php');


  



  $pdf = new FPDF();
  $pdf->AddPage();

  $pdf->Image('https://lh3.googleusercontent.com/NCUT.tzuchin/RwifoWIXw2I/AAAAAAAAAWs/y3eQsZvVHTQ/s400/%E6%85%88%E9%9D%92logo.jpg',60,30,90,0,'JPEG');


  $pdf->SetFont('Arial','B',16);
  $pdf->Cell(190,20,'Humanity Token of Gratitude!',0,0,'C');


 
  $pdf->Output();

  



  
  ob_end_flush(); 
  }
}
