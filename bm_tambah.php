<?php 
include '03_koneksi.php';

if (isset($_REQUEST['submit'])) {
	# code...

$ni=$_POST['no8'];
$no=$_POST['no1'];
$jj=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($jj));
$mm=$_POST['no3'];
$aa=$_POST['no4'];
$dd=$_POST['no5'];
$rr=$_POST['no6'];
$qq=$_POST['no7'];

$aku=mysqli_num_rows(mysqli_query($kon,"select kode_barang from barang_masuk where kode_barang='$mm'"));
$aku2=mysqli_query($kon,"select * from stok_barang where kode_barang='$mm'");
 
		$stokawal=mysqli_fetch_array($aku2);
		$kaka=$stokawal['stok_akhir'];
	
	$tambah=$kaka+$dd;	

if ($aku2>0) {$mmp=mysqli_query($kon, "update stok_barang set stok_akhir='$tambah' where kode_barang='$mm'");
	# code...
	$query=mysqli_query($kon,"insert into barang_masuk values ('$ni','$no','$tanggal','$mm','$aa','$dd','$rr','$qq') ");

	header("location:bm_barang_masuk.php");
	
} elseif($aku2=='0') {
	
	$query=mysqli_query($kon,"insert into barang_masuk values ('$ni','$no','$tanggal','$mm','$aa','$dd','$rr','$qq') ");
	$query3=mysqli_query($kon,"insert into stok_barang values ('$no','$jj','$mm','$aa','$dd') ");

if ($query3) {
	header("location:bm_barang_masuk.php");

} else {
	header("location:error.php");
}


}
}

 ?>