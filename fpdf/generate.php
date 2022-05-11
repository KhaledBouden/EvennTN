<?php 
 require("fpdf.php") ; 

 $pdf= new FPDF(); 

 if (isset($_POST['create']))
 {
    $fusername=$_POST['username'];
    $femail=$_POST['email'];


     $pdf->AddPage(); 
     $pdf->SetFont("Arial","B",19) ; 

     $pdf->Cell(50,10,"username",1,10);
     $pdf->Cell(50,10,$fusername ,1,1) ; 

     $pdf->Cell(50,10,"email",1,10);
     $pdf->Cell(50,10,$femail ,1,1) ; 

 

  $pdf->Output();

  
 }



















?>