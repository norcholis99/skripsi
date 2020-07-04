<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from pelanggan where npwp='$id'");

if ($delete) {
	# code...
	header("location:pgn_pelanggan.php");
}
 ?>