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
$pdf->Cell(190,7,'LAPORAN STOK BARANG',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PT. MEGAH MEDIKA PHARMA Cabang Banjarmasin',0,1,'C');
	//buat garis horisontal
	$pdf->Line(10,25,200,25);

		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10,7,'',0,1);

$pdf->Cell(48,7,'Periode Bulan Mei 2020',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No',1,0,'C');
$pdf->Cell(30,6,'Kode Barang',1,0,'C');
$pdf->Cell(55,6,'Nama Barang',1,0,'C');
$pdf->Cell(35,6,'Satuan',1,0,'C');
$pdf->Cell(30,6,'Stok Akhir',1,0,'C');
$pdf->Cell(30,6,'Tanggal Expired',1,1,'C');

$pdf->SetFont('Arial','',10);

include '03_koneksi.php';
$stokbarang = mysqli_query($kon, "select * from stok_barang order by no asc");
while ($row = mysqli_fetch_array($stokbarang)){
    $pdf->Cell(10,6,$row['no'],1,0);
    $pdf->Cell(30,6,$row['kode_barang'],1,0);
    $pdf->Cell(55,6,$row['nama_barang'],1,0);
    $pdf->Cell(35,6,$row['satuan'],1,0,'C');
    $pdf->Cell(30,6,$row['stok_akhir'],1,0,'R'); 
    $pdf->Cell(30,6,$row['tgl_expired'],1,1,'C'); 
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