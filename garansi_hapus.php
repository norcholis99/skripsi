<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from garansi where beritaacara='$id'");

if ($delete) {
	# code...
	header("location:garansi.php");
}
 ?>