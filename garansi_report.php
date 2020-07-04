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
$pdf->Cell(270,7,'LAPORAN KERUSAKAN & MAINTENANCE',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'PT. MEGAH MEDIKA PHARMA Cabang Banjarmasin',0,1,'C');
	//buat garis horisontal
	$pdf->Line(10,25,285,25);

		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10,7,'',0,1);

$pdf->Cell(48,7,'Periode Bulan Mei 2020',0,1);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,6,'Tanggal',1,0,'C');
$pdf->Cell(25,6,'No Berita Acara',1,0,'C');
$pdf->Cell(25,6,'Kode Barang',1,0,'C');
$pdf->Cell(25,6,'Nama Barang',1,0,'C');
$pdf->Cell(25,6,'Pelanggan',1,0,'C');
$pdf->Cell(35,6,'Masa Pembelian',1,0,'C');
$pdf->Cell(50,6,'Keterangan Rusak',1,0,'C');
$pdf->Cell(25,6,'Jenis Perbaikan',1,0,'C');
$pdf->Cell(25,6,'Estimasi Waktu',1,0,'C');
$pdf->Cell(25,6,'Estimasi Biaya',1,1,'C');


include '03_koneksi.php';
$sales = mysqli_query($kon, "select * from garansi order by tanggal asc");
while ($row = mysqli_fetch_array($sales)){
    $pdf->Cell(15,6,$row['tanggal'],1,0,'C');
    $pdf->Cell(25,6,$row['beritaacara'],1,0,'C');
    $pdf->Cell(25,6,$row['kodebarang'],1,0,'C');
    $pdf->Cell(25,6,$row['namabarang'],1,0); 
    $pdf->Cell(25,6,$row['pelanggan'],1,0); 
    $pdf->Cell(35,6,$row['masapembelian'],1,0); 
    $pdf->Cell(50,6,$row['ketrusak'],1,0); 
    $pdf->Cell(25,6,$row['jenisperbaikan'],1,0); 
    $pdf->Cell(25,6,$row['eswaktu'],1,0); 
    $pdf->Cell(25,6,$row['esbiaya'],1,1,'R'); 
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