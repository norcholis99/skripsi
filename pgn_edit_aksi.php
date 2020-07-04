<?php 
include '03_koneksi.php';


$ni=$_POST['id6'];
$no=$_POST['id1'];
$jj=$_POST['id2'];
$mm=$_POST['id3'];
$aa=$_POST['id4'];
$dd=$_POST['id5'];

$query=mysqli_query($kon,"update pelanggan set no='$ni', nama_pelanggan='$jj', alamat='$mm', no_telpon='$aa', kategori='$dd' where npwp='$no' ");

if ($query) {
	header("location:pgn_pelanggan.php");

} else {
	header("location:error.php");
}

 ?>
