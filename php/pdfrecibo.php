<?php
	include 'plantillarecibo.php';
   include("conn.php"); //$dbconn 
 

  $sql="SELECT * FROM cliente WHERE ci='0201974987' ";
  $resul=pg_query($dbconn,$sql);
                                  
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
   $pdf->SetFont('Arial','B',14);   
   $pdf->ln();

   $pdf->Cell(30,6,Cliente,0,0,'C',0);
   $pdf->ln();
   $pdf->ln();
    while($ver=pg_fetch_row($resul)) 
    {

	$pdf->Cell(40,6,'Cedula:',0,0,'C',0);
	$pdf->Cell(30,6, $ver[0] ,0,0,'C',0);
	
	$pdf->ln();
   $pdf->ln();
   $pdf->Cell(40,6,'Nombre:',0,0,'C',0);
	$pdf->Cell(50,6, $ver[1] ,0,0,'C',0);
	
	$pdf->ln();
	$pdf->ln();
   $pdf->Cell(40,6,'Apellido:',0,0,'C',0);
	$pdf->Cell(50,6, $ver[2],0,0,'C',0);	

	$pdf->ln();
	$pdf->ln();
   $pdf->Cell(40,6,'Direccion:',0,0,'C',0);
	$pdf->Cell(75,6, $ver[3],0,0,'C',0);	
		
	$pdf->ln();
  $pdf->ln();
   $pdf->Cell(40,6,'Telefono:',0,0,'C',0);
	$pdf->Cell(30,6,$ver[4] ,0,0,'C',0);	

   }
   $pdf->ln();
   $pdf->ln();
   $pdf->Cell(40,6,'Electrodomestico',0,0,'C',0);
   $pdf->ln();
   $pdf->ln();
   
  $sql="SELECT * FROM electrodomestico WHERE ci='0201974987' ";
  $resul=pg_query($dbconn,$sql);
                                  
    while($ver=pg_fetch_row($resul)) 
    {

	$pdf->Cell(40,6,'Codogo :',0,0,'C',0);
	$pdf->Cell(20,6, $ver[0] ,0,0,'C',0);
	
	$pdf->ln();
   $pdf->ln();
   $pdf->Cell(40,6,'Serie:',0,0,'C',0);
	$pdf->Cell(15,6, $ver[1] ,0,0,'C',0);
	
	$pdf->ln();
	$pdf->ln();
   $pdf->Cell(40,6,'Fecha:',0,0,'C',0);
	$pdf->Cell(28,6, $ver[2],0,0,'C',0);	

	$pdf->ln();
	$pdf->ln();
   $pdf->Cell(40,6,'Tipo:',0,0,'C',0);
	$pdf->Cell(40,6, $ver[3],0,0,'C',0);	
		
	$pdf->ln();
   $pdf->ln();
   $pdf->Cell(40,6,'Falla:',0,0,'C',0);
	$pdf->Cell(40,6,$ver[4] ,0,0,'C',0);	
	
   $pdf->ln();
   $pdf->ln();
   $pdf->Cell(40,6,'Modelo:',0,0,'C',0);
	$pdf->Cell(40,6,$ver[5] ,0,0,'C',0);


   $pdf->ln();
   $pdf->ln();
   $pdf->Cell(40,6,'marca:',0,0,'C',0);
	$pdf->Cell(30,6,$ver[6] ,0,0,'C',0);
   }   
  
$pdf->SetFont('Arial','',10);
	
   $pdf->ln();
   $pdf->ln();
   
     $pdf->Cell(40,6,'Firma cliente:',0,0,'C',0);
	$pdf->Cell(30,6,'---------------------',0,0,'C',0);
	     $pdf->Cell(40,6,'Firma tecnico:',0,0,'C',0);
	$pdf->Cell(30,6,'---------------------',0,0,'C',0);
	$pdf->Output();
?>