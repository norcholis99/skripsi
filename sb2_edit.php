<?php
include '03_koneksi.php';
if ($_POST['getId']) {
	# code...
	$no=$_POST['getId'];
	$sql=mysqli_query($kon, "select * from stokbarang2 where kode_barang='$no'");	
	while ($aa=mysqli_fetch_array($sql)) {
		# code...
		?>	

			<form action="sb_edit_aksi.php" method="post">
				<div class="container">

			    <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">No</label>
            <div class="col-sm-8"><input type="text" name="id6" class="form-control" required="" value="<?php echo $aa['no'] ?>"></div>
          </div>

          <div class="form-group row mt-3" hidden="">
      			<label class="col-sm-4 col-sm-label">Kode Barang</label>
      			<div class="col-sm-8"><input type="text" name="id1" class="form-control" required="" value="<?php echo $aa['kode_barang'] ?>"></div>
      		</div>	

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Nama Barang</label>
      			<div class="col-sm-8"><input type="text" name="id2" class="form-control" required="" value="<?php echo $aa['nama_barang'] ?>"></div>
      		</div>

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Satuan</label>
            <div class="col-sm-8"><input type="text" name="id3" class="form-control" required="" value="<?php echo $aa['satuan'] ?>"></div>
          </div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Stok Akhir</label>
      			<div class="col-sm-8"><input type="text" name="id4" class="form-control" required="" value="<?php echo $aa['stok_akhir'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Tanggal Expired</label>
      			<div class="col-sm-8"><input type="date" name="id5" class="form-control" required="" value="<?php echo $aa['kadaluarsa'] ?>"></div>
      		</div>

      	

     	</form>
     </div>
      	


		<?php 
	}
}


 ?>