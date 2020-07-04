<?php 
include '03_koneksi.php';


$ni=$_POST['id1'];
$tanggal=date("Y-m-d", strtotime($ni));
$no=$_POST['id2'];
$jj=$_POST['id3'];
$mm=$_POST['id4'];
$aa=$_POST['id5'];
$dd=$_POST['id6'];
$rr=$_POST['id7'];
$qq=$_POST['id8'];
$zz=$_POST['id9'];
$xx=$_POST['id10'];

$query=mysqli_query($kon,"update garansi set tanggal='$ni', kodebarang='$jj', namabarang='$mm', pelanggan='$aa', masapembelian='$dd', ketrusak='$rr', jenisperbaikan='$qq', eswaktu='$zz', esbiaya='$xx' where beritaacara='$no' ");

if ($query) {
	header("location:garansi.php");

} else {
	header("location:error.php");
}

 ?>
