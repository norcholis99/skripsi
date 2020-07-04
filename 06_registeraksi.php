<?php 
include '03_koneksi.php';

$no=$_POST['no1'];
$jj=$_POST['no2'];
$mm=$_POST['no3'];
$nn=$_POST['no4'];


$query=mysqli_query($con,"insert into login values ('$no','$jj','$mm','$nn') ");

if ($query) {
	header("location:05_register.php");

}

 ?>
