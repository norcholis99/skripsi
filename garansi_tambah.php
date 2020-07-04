<?php 
include '03_koneksi.php';

$ni=$_POST['no1'];
$no=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($no));
$jj=$_POST['no3'];
$mm=$_POST['no4'];
$aa=$_POST['no5'];
$dd=$_POST['no6'];
$cc=$_POST['no7'];
$ee=$_POST['no8'];
$ff=$_POST['no9'];
$gg=$_POST['no10'];


$query=mysqli_query($kon,"insert into garansi values ('$ni','$no','$jj','$mm','$aa','$dd','$cc','$ee','$ff','$gg') ");
if ($query) {
	header("location:garansi.php");

} else {
	echo "error";
}

 ?>
