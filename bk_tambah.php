<?php 
include '03_koneksi.php';

$no=$_POST['no1'];
$aa=$_POST['no2'];
$tanggal=date("Y-m-d", strtotime($aa) );
$bb=$_POST['no3'];
$tanggal2=date("Y-m-d", strtotime($bb) );
$cc=$_POST['no4'];
$dd=$_POST['no5'];
$ee=$_POST['no6'];
$ff=$_POST['no7'];
$gg=$_POST['no8'];
$hh=$_POST['no9'];
$ii=$_POST['no10'];
$jj=$_POST['no11'];
$kk=$_POST['no12'];
$ll=$_POST['no13'];
$mm=$_POST['no14'];

$aku=mysqli_num_rows(mysqli_query($kon,"select kode_barang from barang_keluar where kode_barang='$ee'"));
$aku2=mysqli_query($kon,"select * from stok_barang where kode_barang='$ee'");
 
		$stokawal=mysqli_fetch_array($aku2);
		$kaka=$stokawal['stok_akhir'];
	
	$kurang=$kaka-$gg;	

if ($aku2>0) {$mmp=mysqli_query($kon, "update stok_barang set stok_akhir='$kurang' where kode_barang='$ee'");

			 $mmp2=mysqli_query($kon, "update stokbarang2 set stok_akhir='$kurang' where kode_barang='$ee'");
	# code...
	$query=mysqli_query($kon,"insert into barang_keluar values ('$no','$tanggal', '$tanggal2', '$cc','$dd','$ee','$ff','$gg','$hh','$ii','$jj','$kk','$ll','$mm') ");


	header("location:bk_barang_keluar.php");
} else {
	header("location:error.php");
}
	$query2=mysqli_query($kon,"insert into piutang values ('$no','$tanggal', '$tanggal2', '$cc','$dd','$mm') ");
	
	$query4=mysqli_query($kon,"insert into piutang2 values ('$no','$tanggal', '$tanggal2', '$cc','$dd','$mm') ");
 ?>
