<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from stok_barang where kode_barang='$id'");
$delete2=mysqli_query($kon,"delete from stokbarang2 where kode_barang='$id'");

if ($delete) {
	# code...
	header("location:sb_stok_barang.php");
}
 ?>