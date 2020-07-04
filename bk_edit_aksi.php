<?php 
include '03_koneksi.php';


$no=$_POST['id1'];
$aa=$_POST['id2'];
$tanggal=date("Y-m-d", strtotime($aa));
$bb=$_POST['id3'];
$tanggal2=date("Y-m-d", strtotime($bb));
$cc=$_POST['id4'];
$dd=$_POST['id5'];
$ee=$_POST['id6'];
$ff=$_POST['id7'];
$gg=$_POST['id8'];
$hh=$_POST['id9'];
$ii=$_POST['id10'];
$jj=$_POST['id11'];
$kk=$_POST['id12'];
$ll=$_POST['id13'];
$mm=$_POST['id14'];

$query=mysqli_query($kon,"update barang_keluar set tgl_faktur='$aa', tgl_jatuhtempo='$bb', nama_pelanggan='$cc', alamat='$dd', kode_barang='$ee', nama_barang='$ff', quantity='$gg', satuan='$hh', harga='$ii', total_1='$jj', ppn='$kk', ongkir='$ll', total_bayar='$mm' where no_faktur='$no' ");

if ($query) {
	header("location:bk_barang_keluar.php");

} else {
	header("location:error.php");
}

 ?>
