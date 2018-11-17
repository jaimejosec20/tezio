<?php
require('../fpdf.php');


$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
	// Leer las líneas del fichero
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}

// Pagina 1 Titulos Informe
function BasicTable($data1)
{
	// Cabecera
	//foreach($header as $col)
	//	$this->Cell(40,7,$col,1);
	//$this->Ln();
	// Datos
	foreach($data1 as $row)
	{
		foreach($row as $col)
			$this->Cell(40,6,$col,1);
		$this->Ln();
	}
}

// Una tabla más completa
function ImprovedTable($header, $data)
{
	// Anchuras de las columnas
	$w = array(40, 35, 45, 40);
	// Cabeceras
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C');
	$this->Ln();
	// Datos
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR');
		$this->Cell($w[1],6,$row[1],'LR');
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
		$this->Ln();
	}
	// Línea de cierre
	$this->Cell(array_sum($w),0,'','T');
}

// Tabla coloreada
function FancyTable($header, $data)
{
	// Colores, ancho de línea y fuente en negrita
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Cabecera
	$w = array(40, 35, 45, 40);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// Restauración de colores y fuentes
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Datos
	$fill = false;
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	// Línea de cierre
	$this->Cell(array_sum($w),0,'','T');
}


function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('courier','I',8);
	// Número de página
	$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();

$pdf->SetFont('courier','B',20);
$pdf->SetTextColor(255,255,255);

$pdf->AddPage();
$pdf->Image('../../images/portada.png',0,0,210);
$pdf->Cell(100,39,"",0);
$pdf->Ln();
$pdf->Cell(140,10,"FECHA: AGOSTO DE 2018",'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(4,60,"",0);
$pdf->Cell(80,16,"M-05",'',0,'C',0);
$pdf->Ln();

//CICLO DEL AGUA LUPA************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(190,10,"INFORME DE MANTENIMIENTO CORRECTIVO",'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"27 AGOSTO 2018 ",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"INSTALACIÓN:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Tercero",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"CICLO DEL AGUA LUPA",'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);



$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Se verificó el inicio automático",'',0,'L',0);
$pdf->Ln(4);

$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Se verificó la calibración del dispositivo",'',0,'L',0);
$pdf->Ln(4);

$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Se calibró la lupa, se verifico la conexión",'',0,'L',0);
$pdf->Ln(4);

$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Se realizaron pruebas de funcionamiento",'',0,'L',0);
$pdf->Ln(4);



$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"DIAGNÓSTICO Y PROBLEMAS DETECTADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"Se está presentando problemas de conexión",'',0,'L',0);
$pdf->MultiCell(180,5,"");

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen("");
$pdf->MultiCell(180,5,"Se realizó el cambio del cable de energía de la lupa, se reinstalo la aplicación y se reconfiguro la conexión del bluetooth, la lupa que queda instalada es la de repuesto, esta presenta una parte quebrada en el interior de la lupa. Se mantuvo en prueba y su funcionamiento es correcto.");

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Rodrigo Gómez Alvis",'',0,'L',0);

//*******************************************************************

$pdf->Ln(2);
$pdf->SetFont('courier','B',11);
$pdf->Cell(200,10,"Fotografía Antes de Mantenimiento",'',0,'C',0);

$pdf->Ln(8);

$pdf->Image('../../images/misFotos/lupa27-08-2018/DSC_0164.jpg',60,162,105);

$pdf->Image('../../images/misFotos/lupa27-08-2018/DSC_0167.jpg',60,224,105);


//OTRA PAGINA*****************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(190,10,"INFORME DE MANTEMINIENTO CORRECTIVO",'',0,'C',0);
$pdf->Ln();
$pdf->Ln();


$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(200,10,"Fotografía Después de Mantenimiento",'',0,'C',0);


$pdf->Ln(8);

$pdf->Image('../../images/misFotos/lupa27-08-2018/DSC_0173.jpg',60,50,105);

$pdf->Image('../../images/misFotos/lupa27-08-2018/DSC_0174.jpg',60,112,105);

$pdf->Image('../../images/misFotos/lupa27-08-2018/DSC_0176.jpg',60,174,105);


$pdf->Output();
?>
