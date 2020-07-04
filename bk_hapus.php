<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from barang_keluar where no_faktur='$id'");

if ($delete) {
	# code...
	header("location:bk_barang_keluar.php");
}
 ?>