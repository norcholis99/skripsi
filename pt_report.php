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
$pdf->Cell(190,7,'LAPORAN DATA PIUTANG',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PT. MEGAH MEDIKA PHARMA Cabang Banjarmasin',0,1,'C');
	//buat garis horisontal
	$pdf->Line(10,25,200,25);

		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10,7,'',0,1);

$pdf->Cell(48,7,'Periode Bulan Mei 2020',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'No Faktur',1,0,'C');
$pdf->Cell(25,6,'Tgl Faktur',1,0,'C');
$pdf->Cell(30,6,'Tgl Jatuh Tempo',1,0,'C');
$pdf->Cell(40,6,'Nama Pelanggan',1,0,'C');
$pdf->Cell(40,6,'Alamat',1,0,'C');
$pdf->Cell(30,6,'Jumlah Tagihan',1,1,'C');

$pdf->SetFont('Arial','',10);

include '03_koneksi.php';
$piutang = mysqli_query($kon, "select * from piutang order by no_faktur asc");
while ($row = mysqli_fetch_array($piutang)){
    $pdf->Cell(25,6,$row['no_faktur'],1,0);
    $pdf->Cell(25,6,$row['tgl_faktur'],1,0,'C');
    $pdf->Cell(30,6,$row['tgl_jatuhtempo'],1,0,'C');
    $pdf->Cell(40,6,$row['nama_pelanggan'],1,0); 
    $pdf->Cell(40,6,$row['alamat'],1,0); 
    $pdf->Cell(30,6,$row['jumlah_tagihan'],1,1,'R'); 
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