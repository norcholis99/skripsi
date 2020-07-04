<?php 
include '03_koneksi.php';

$no=$_POST['no1'];
$aa=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($aa) );
$cc=$_POST['no3'];
$dd=$_POST['no4'];
$ee=$_POST['no5'];
$ff=$_POST['no6'];
$gg=$_POST['no7'];
$hh=$_POST['no8'];
$ii=$_POST['no9'];
$jj=$_POST['no10'];
$kk=$_POST['no11'];

$query=mysqli_query($kon,"insert into retur values ('$no','$tanggal', '$cc','$dd','$ee','$ff','$gg','$hh','$ii','$jj','$kk') ");

if ($query) {
	header("location:rt_retur.php");

} else {
	header("location:error.php");
}

 ?>
