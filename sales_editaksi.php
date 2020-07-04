<?php 
include '03_koneksi.php';


$ni=$_POST['id1'];
$no=$_POST['id2'];
$tanggal=date("Y-m-d", strtotime($no));
$jj=$_POST['id3'];
$mm=$_POST['id4'];
$aa=$_POST['id5'];
$dd=$_POST['id6'];


$query=mysqli_query($kon,"update sales set tanggal='$no', rumahsakit='$jj', ruangan='$mm', user='$aa', hasil='$dd' where no='$ni' ");

if ($query) {
	header("location:sales.php");

} else {
	echo "error";
}

 ?>
