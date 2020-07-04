<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from movement_on where no_mo='$id'");

if ($delete) {
	# code...
	header("location:mo_movement_on.php");
}
 ?>