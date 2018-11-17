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
	// Leer las l�neas del fichero
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

// Una tabla m�s completa
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
	// L�nea de cierre
	$this->Cell(array_sum($w),0,'','T');
}

// Tabla coloreada
function FancyTable($header, $data)
{
	// Colores, ancho de l�nea y fuente en negrita
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
	// Restauraci�n de colores y fuentes
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
	// L�nea de cierre
	$this->Cell(array_sum($w),0,'','T');
}


function Footer()
{
	// Posici�n: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('courier','I',8);
	// N�mero de p�gina
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
$pdf->Cell(140,10,"FECHA: JULIO DE 2018",'',0,'C',0);
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
$pdf->Cell(36,10,"16 JULIO 2018 ",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"INSTALACI�N:",'',0,'L',0);
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
$pdf->Cell(36,10,"Se verific� el inicio autom�tico",'',0,'L',0);
$pdf->Ln(4);

$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Se verific� la calibraci�n del dispositivo",'',0,'L',0);
$pdf->Ln(4);

$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Se calibr� la lupa, se verific� la conexi�n",'',0,'L',0);
$pdf->Ln(4);

$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Se realizaron pruebas de funcionamiento",'',0,'L',0);
$pdf->Ln(4);



$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"DIAGN�STICO Y PROBLEMAS DETECTADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"Se est� presentando problemas de conexi�n",'',0,'L',0);
$pdf->MultiCell(180,5,"");

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen("");
$pdf->MultiCell(180,5,"Se eliminaron todas las conexiones Bluethooth sobrantes. Teniendo en cuenta que puede volver a fallar.");
$pdf->Ln(4);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen("");
$pdf->MultiCell(180,5,"Se recomienda mover la l�mina que sujeta el infrarrojo pues lo est� tapando y lo ideal es que no est� sobre las luces.");

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,"Rodrigo G�mez Alvis",'',0,'L',0);

//*******************************************************************

$pdf->Ln(2);
$pdf->SetFont('courier','B',11);
$pdf->Cell(200,10,"Fotograf�a Antes de Mantenimiento",'',0,'C',0);

$pdf->Ln(8);

$pdf->Image('../../images/misFotos/lupa16-07-2018/DSC_0110.jpg',60,162,80);

$pdf->Image('../../images/misFotos/lupa16-07-2018/DSC_0109.jpg',60,224,80);


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
$pdf->Cell(180,10,"Fotograf�a Despu�s de Mantenimiento",'',0,'C',0);


$pdf->Ln(8);

$pdf->Image('../../images/misFotos/lupa16-07-2018/DSC_0112.jpg',60,50,80);

$pdf->Image('../../images/misFotos/lupa16-07-2018/DSC_0113.jpg',60,112,80);

$pdf->Output();
?>
