<?php 
include '03_koneksi.php';

$id=$_GET['id'];
$delete=mysqli_query($kon,"delete from sales where no='$id'");
if ($delete) {
	# code...
	header("location:sales.php");
}
 ?>