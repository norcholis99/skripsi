<?php 
include '03_koneksi.php';

$no=$_POST['no1'];
$jj=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($jj));
$mm=$_POST['no3'];
$tanggal2=date("Y-m-d", strtotime($jj));
$aa=$_POST['no4'];
$dd=$_POST['no5'];
$rr=$_POST['no6'];

$query=mysqli_query($kon,"insert into piutang values ('$no','$tanggal','$tanggal2','$aa','$dd','$rr') ");

if ($query) {
	header("location:pt_piutang.php");

} else {
	header("location:error.php");
}

 ?>
