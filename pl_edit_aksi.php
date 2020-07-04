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

$query=mysqli_query($kon,"update pembelian_lokal set no='$ni', tanggal='$jj', kode_barang='$mm', nama_barang='$aa', jumlah='$dd', satuan='$rr', penyedia='$qq' where no_pl='$no' ");

if ($query) {
	header("location:pl_pembelian_lokal.php");

} else {
	header("location:error.php");
}

 ?>
