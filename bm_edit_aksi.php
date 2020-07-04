<?php 
include '03_koneksi.php';


$ni=$_POST['id8'];
$no=$_POST['id1'];
$jj=$_POST['id2'];
$tanggal=date("Y-m-d", strtotime($jj));
$mm=$_POST['id3'];
$aa=$_POST['id4'];
$dd=$_POST['id5'];
$rr=$_POST['id6'];
$qq=$_POST['id7'];

$query=mysqli_query($kon,"update barang_masuk set no='$ni', tanggal='$jj', kode_barang='$mm', nama_barang='$aa', jumlah='$dd', satuan='$rr', keterangan='$qq' where no_register='$no' ");

if ($query) {
	header("location:bm_barang_masuk.php");

} else {
	header("location:error.php");
}

 ?>
