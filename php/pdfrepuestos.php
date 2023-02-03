<?php
	include 'plantillarepuestos.php';
   include("conn.php"); //$dbconn 
 

	
   $resultados = pg_query($dbconn, "SELECT * FROM repuesto");	
	//$resultado = $pg->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'Codigo',1,0,'C',1);
	$pdf->Cell(40,6,'Nombre',1,0,'C',1);
	$pdf->Cell(20,6,'Cantidad',1,0,'C',1);
	$pdf->Cell(30,6,'Serie',1,0,'C',1);
   $pdf->Cell(20,6,'Precio',1,0,'C',1);
	$pdf->Cell(30,6,'Cod_prove',1,1,'C',1);
	$pdf->SetFont('Arial','',10);
	
	  while($consulta = pg_fetch_array($resultados)) 
   {
	$pdf->Cell(20,6,$consulta['cod_rep'],1,0,'C',1);
	$pdf->Cell(40,6,$consulta['nombre'],1,0,'C',1);
	$pdf->Cell(20,6,$consulta['cantidad'],1,0,'C',1);
   $pdf->Cell(30,6,$consulta['numero_serie'],1,0,'C',1);
	$pdf->Cell(20,6,$consulta['precio'],1,0,'C',1);
	$pdf->Cell(30,6,$consulta['ci_prove'],1,1,'C',1);
  	}

	$pdf->Output();
?>