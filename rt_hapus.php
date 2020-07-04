<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from retur where no_retur='$id'");

if ($delete) {
	# code...
	header("location:rt_retur.php");
}
 ?>