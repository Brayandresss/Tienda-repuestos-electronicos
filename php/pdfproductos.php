<?php
	include 'plantilla.php';
   include("conn.php"); //$dbconn 
 
 	
	//$query = "SELECT * FROM productos";
	
   $resultados = pg_query($dbconn, "SELECT * FROM productos");	
	//$resultado = $pg->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(30,6,'Codigo',1,0,'C',1);
	$pdf->Cell(60,6,'Nombre',1,0,'C',1);
	$pdf->Cell(30,6,'Cantidad',1,0,'C',1);
   $pdf->Cell(30,6,'precio',1,0,'C',1);
	$pdf->Cell(30,6,'unidad',1,1,'C',1);
	$pdf->SetFont('Arial','',10);
	
	  while($consulta = pg_fetch_array($resultados)) 
   {
	$pdf->Cell(30,6,$consulta['cod_prod'],1,0,'C',1);
	$pdf->Cell(60,6,$consulta['nombre'],1,0,'C',1);
	$pdf->Cell(30,6,$consulta['cantidad'],1,0,'C',1);
   $pdf->Cell(30,6,$consulta['precio'],1,0,'C',1);
	$pdf->Cell(30,6,$consulta['unidad'],1,1,'C',1);
	
  	}

	$pdf->Output();
?>