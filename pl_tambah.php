<?php 
include '03_koneksi.php';

$ni=$_POST['no8'];
$no=$_POST['no1'];
$jj=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($jj));
$mm=$_POST['no3'];
$aa=$_POST['no4'];
$dd=$_POST['no5'];
$rr=$_POST['no6'];
$qq=$_POST['no7'];

$query=mysqli_query($kon,"insert into pembelian_lokal values ('$ni','$no','$tanggal','$mm','$aa','$dd','$rr','$qq') ");

if ($query) {
	header("location:pl_pembelian_lokal.php");

} else {
	header("location:error.php");
}

 ?>
