<?php 
include '03_koneksi.php';


$no=$_POST['id1'];
$jj=$_POST['id2'];
$tanggal=date("Y-m-d", strtotime($jj));
$mm=$_POST['id3'];
$tanggal2=date("Y-m-d", strtotime($mm));
$aa=$_POST['id4'];
$dd=$_POST['id5'];
$rr=$_POST['id6'];

$query=mysqli_query($kon,"update piutang set tgl_faktur='$jj', tgl_jatuhtempo='$mm', nama_pelanggan='$aa', alamat='$dd', jumlah_tagihan='$rr' where no_faktur='$no' ");
$query2=mysqli_query($kon,"update piutang2 set tgl_faktur='$jj', tgl_jatuhtempo='$mm', nama_pelanggan='$aa', alamat='$dd', jumlah_tagihan='$rr' where no_faktur='$no' ");

if ($query) {
	header("location:pt_piutang.php");

} else {
	header("location:error.php");
}

 ?>
