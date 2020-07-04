<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from barang_masuk where no_register='$id'");

if ($delete) {
	# code...
	header("location:bm_barang_masuk.php");
}
 ?>