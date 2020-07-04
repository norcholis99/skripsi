<?php 


if ($_SERVER["REQUEST_METHOD"]=="POST") {
	# code...
	include '03_koneksi.php';
	session_start();
	$nama=($_POST['email']);
	$pass=($_POST['password']);

	$sql="select * from login where email='".$nama."' and password='".$pass."' limit 1";

	$hasil=mysqli_query ($kon,$sql);
	$jumlah=mysqli_num_rows($hasil);

	if ($jumlah>0) {
		# code...
		$row=mysqli_fetch_assoc($hasil);
		$_SESSION["username"]=$row["username"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["level"]=$row["level"];
		


	if ($_SESSION["level"]=$row["level"]==1)
	{
		header("location:04_index.php");
	} else if ($_SESSION["level"]=$row["level"]==2)
	{
		header("location:07_indexspr.php");

	} 

} else {
	header("location:01_login.php");

}
}


 ?>