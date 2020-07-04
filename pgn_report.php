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
$pdf->Cell(190,7,'LAPORAN DATA PELANGGAN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PT. MEGAH MEDIKA PHARMA Cabang Banjarmasin',0,1,'C');
	//buat garis horisontal
	$pdf->Line(10,25,200,25);

		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10,7,'',0,1);

$pdf->Cell(48,7,'Periode Bulan Mei 2020',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No',1,0,'C');
$pdf->Cell(30,6,'NPWP',1,0,'C');
$pdf->Cell(50,6,'Nama Pelanggan',1,0,'C');
$pdf->Cell(40,6,'Alamat',1,0,'C');
$pdf->Cell(30,6,'No Telpon',1,0,'C');
$pdf->Cell(30,6,'Kategori',1,1,'C');

$pdf->SetFont('Arial','',10);

include '03_koneksi.php';
$pelanggan = mysqli_query($kon, "select * from pelanggan order by no asc");
while ($row = mysqli_fetch_array($pelanggan)){
    $pdf->Cell(10,6,$row['no'],1,0,'C');
    $pdf->Cell(30,6,$row['npwp'],1,0);
    $pdf->Cell(50,6,$row['nama_pelanggan'],1,0);
    $pdf->Cell(40,6,$row['alamat'],1,0);
    $pdf->Cell(30,6,$row['no_telpon'],1,0); 
    $pdf->Cell(30,6,$row['kategori'],1,1,'C'); 
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