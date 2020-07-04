<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A4');
// membuat halaman baru
$pdf->AddPage();

$pdf->image('mmp.png',70,11,10,10);
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
$pdf->Cell(270,7,'LAPORAN HASIL KUNJUNGAN MARKETING',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'PT. MEGAH MEDIKA PHARMA Cabang Banjarmasin',0,1,'C');
	//buat garis horisontal
	$pdf->Line(10,25,285,25);


		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10,7,'',0,1);
	

$pdf->Cell(48,7,'Periode Bulan Mei 2020',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No',1,0,'C');
$pdf->Cell(30,6,'Tanggal',1,0,'C');
$pdf->Cell(55,6,'Rumah Sakit',1,0,'C');
$pdf->Cell(35,6,'Ruangan',1,0,'C');
$pdf->Cell(30,6,'User',1,0,'C');
$pdf->Cell(115,6,'Hasil Kunjungan',1,1,'C');

$pdf->SetFont('Arial','',10);

include '03_koneksi.php';
$sales = mysqli_query($kon, "select * from sales order by no asc");
while ($row = mysqli_fetch_array($sales)){
    $pdf->Cell(10,6,$row['no'],1,0,'C');
    $pdf->Cell(30,6,$row['tanggal'],1,0,'C');
    $pdf->Cell(55,6,$row['rumahsakit'],1,0);
    $pdf->Cell(35,6,$row['ruangan'],1,0);
    $pdf->Cell(30,6,$row['user'],1,0); 
    $pdf->Cell(115,6,$row['hasil'],1,1); 
}
	//atur posisi 1.5 cm dari bawah
	$pdf->SetY(-20);
	//buat garis horizontal
	$pdf->Line(10,$pdf->GetY(),285,$pdf->GetY());
	//Arial italic 9
	$pdf->SetFont('Arial','I',9);
	//nomor halaman
	$pdf->Cell(0,-5,'Halaman '.$pdf->PageNo().'',0,0,'R');

$pdf->Output();
?>