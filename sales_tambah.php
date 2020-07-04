<?php 
include '03_koneksi.php';

$ni=$_POST['no1'];
$no=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($no));
$jj=$_POST['no3'];
$mm=$_POST['no4'];
$aa=$_POST['no5'];
$dd=$_POST['no6'];


$query=mysqli_query($kon,"insert into sales values ('$ni','$no','$jj','$mm','$aa','$dd') ");
if ($query) {
	header("location:sales.php");

} else {
	echo "error";
}

 ?>
