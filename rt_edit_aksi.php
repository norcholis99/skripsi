<?php 
include '03_koneksi.php';


$no=$_POST['id1'];
$aa=$_POST['id2'];
$tanggal=date("Y-m-d", strtotime($aa));
$cc=$_POST['id3'];
$dd=$_POST['id4'];
$ee=$_POST['id5'];
$ff=$_POST['id6'];
$gg=$_POST['id7'];
$hh=$_POST['id8'];
$ii=$_POST['id9'];
$jj=$_POST['id10'];
$kk=$_POST['id11'];

$query=mysqli_query($kon,"update retur set tanggal='$aa', nama_pelanggan='$cc', alamat='$dd', kode_barang='$ee', nama_barang='$ff', quantity='$gg', satuan='$hh', harga='$ii', total_1='$jj', ppn='$kk'where no_retur='$no' ");

if ($query) {
	header("location:rt_retur.php");

} else {
	header("location:error.php");
}

 ?>
