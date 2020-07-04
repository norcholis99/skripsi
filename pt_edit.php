<?php
include '03_koneksi.php';
if ($_POST['getId']) {
	# code...
	$no=$_POST['getId'];
	$sql=mysqli_query($kon, "select * from piutang where no_faktur='$no'");	
	while ($aa=mysqli_fetch_array($sql)) {
		# code...
		?>	

			<form action="pt_edit_aksi.php" method="post">
				<div class="container">

          <div class="form-group row mt-3" hidden="">
            <label class="col-sm-4 col-sm-label">No Faktur</label>
            <div class="col-sm-8"><input type="text" name="id1" class="form-control" required="" value="<?php echo $aa['no_faktur'] ?>"></div>
          </div>  

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Tanggal Faktur</label>
      			<div class="col-sm-8"><input type="date" name="id2" class="form-control" required="" value="<?php echo $aa['tgl_faktur'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Tanggal Jatuh Tempo</label>
      			<div class="col-sm-8"><input type="date" name="id3" class="form-control" required="" value="<?php echo $aa['tgl_jatuhtempo'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Nama Pelanggan</label>
      			<div class="col-sm-8"><input type="text" name="id4" class="form-control" required="" value="<?php echo $aa['nama_pelanggan'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Alamat</label>
      			<div class="col-sm-8"><input type="text" name="id5" class="form-control" required="" value="<?php echo $aa['alamat'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Jumlah Tagihan</label>
      			<div class="col-sm-8"><input type="text" name="id6" class="form-control" required="" value="<?php echo $aa['jumlah_tagihan'] ?>"></div>
      		</div>

      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        		<button type="submit" class="btn btn-primary" name="submit">Simpan Perubahan</button>
      		</div>

     	</form>
     </div>
      	


		<?php 
	}
}


 ?>