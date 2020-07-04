<?php 
include '03_koneksi.php';

$ni=$_POST['no6'];
$no=$_POST['no1'];
$jj=$_POST['no2'];
$mm=$_POST['no3'];
$aa=$_POST['no4'];
$dd=$_POST['no5'];
$tanggal=date("Y-m-d", strtotime($dd));

$query=mysqli_query($kon,"insert into stok_barang values ('$ni','$no','$jj','$mm','$aa','$dd') ");
$query2=mysqli_query($kon,"insert into stokbarang2 values ('$ni','$no','$jj','$mm','$aa','$dd') ");

if ($query) {
	header("location:sb_stok_barang.php");

} else {
	header("location:error.php");
}

 ?>
