<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();

$pdf->image('mmp.png',35,11,10,10);
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'LAPORAN DATA PEMBELIAN LOKAL',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PT. MEGAH MEDIKA PHARMA Cabang Banjarmasin',0,1,'C');
	//buat garis horisontal
	$pdf->Line(10,25,200,25);

		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10,7,'',0,1);

$pdf->Cell(48,7,'Periode Bulan Mei 2020',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(12,6,'No',1,0,'C');
$pdf->Cell(18,6,'No PL',1,0,'C');
$pdf->Cell(25,6,'Tanggal',1,0,'C');
$pdf->Cell(15,6,'Kode',1,0,'C');
$pdf->Cell(40,6,'Nama Barang',1,0,'C');
$pdf->Cell(20,6,'Jumlah',1,0,'C');
$pdf->Cell(20,6,'Satuan',1,0,'C');
$pdf->Cell(40,6,'Penyedia',1,1,'C');

$pdf->SetFont('Arial','',10);

include '03_koneksi.php';
$movement_on = mysqli_query($kon, "select * from pembelian_lokal order by no asc");
while ($row = mysqli_fetch_array($movement_on)){
    $pdf->Cell(12,6,$row['no'],1,0);
    $pdf->Cell(18,6,$row['no_pl'],1,0,'C');
    $pdf->Cell(25,6,$row['tanggal'],1,0,'C');
    $pdf->Cell(15,6,$row['kode_barang'],1,0);
    $pdf->Cell(40,6,$row['nama_barang'],1,0); 
    $pdf->Cell(20,6,$row['jumlah'],1,0,'R'); 
    $pdf->Cell(20,6,$row['satuan'],1,0,'C'); 
    $pdf->Cell(40,6,$row['penyedia'],1,1); 
}

	//atur posisi 1.5 cm dari bawah
	$pdf->SetY(-20);
	//buat garis horizontal
	$pdf->Line(10,$pdf->GetY(),200,$pdf->GetY());
	//Arial italic 9
	$pdf->SetFont('Arial','I',9);
	//nomor halaman
	$pdf->Cell(0,-5,'Halaman '.$pdf->PageNo().'',0,0,'R');

$pdf->Output();
?>