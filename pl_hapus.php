<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from pembelian_lokal where no_pl='$id'");

if ($delete) {
	# code...
	header("location:pl_pembelian_lokal.php");
}
 ?>