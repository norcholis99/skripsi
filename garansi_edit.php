<?php
include '03_koneksi.php';
if ($_POST['getId']) {
	# code...
	$no=$_POST['getId'];
	$sql=mysqli_query($kon, "select * from garansi where beritaacara='$no'");	
	while ($aa=mysqli_fetch_array($sql)) {
		# code...
		?>	

			<form action="garansi_editaksi.php" method="post">
				<div class="container">

			    <div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Tanggal</label>
      			<div class="col-sm-8"><input type="date" name="id1" class="form-control" required="" value="<?php echo $aa['tanggal'] ?>"></div>
      		</div>

          <div class="form-group row mt-3" hidden="">
            <label class="col-sm-4 col-sm-label">Berita Acara</label>
            <div class="col-sm-8"><input type="text" name="id2" class="form-control" required="" value="<?php echo $aa['beritaacara'] ?>"></div>
          </div>	

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Kode Barang</label>
      			<div class="col-sm-8"><input type="text" name="id3" class="form-control" required="" value="<?php echo $aa['kodebarang'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Nama Barang</label>
      			<div class="col-sm-8"><input type="text" name="id4" class="form-control" required="" value="<?php echo $aa['namabarang'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Pelanggan</label>
      			<div class="col-sm-8"><input type="text" name="id5" class="form-control" required="" value="<?php echo $aa['pelanggan'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Masa Pembelian</label>
      			<div class="col-sm-8"><input type="text" name="id6" class="form-control" required="" value="<?php echo $aa['masapembelian'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Keterangan Kerusakan</label>
      			<div class="col-sm-8"><input type="text" name="id7" class="form-control" required="" value="<?php echo $aa['ketrusak'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Jenis Perbaikan</label>
      			<div class="col-sm-8"><input type="text" name="id8" class="form-control" required="" value="<?php echo $aa['jenisperbaikan'] ?>"></div>
      		</div>

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Estimasi Waktu</label>
            <div class="col-sm-8"><input type="text" name="id9" class="form-control" required="" value="<?php echo $aa['eswaktu'] ?>"></div>
          </div>

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Estimasi Biaya</label>
            <div class="col-sm-8"><input type="text" name="id10" class="form-control" required="" value="<?php echo $aa['esbiaya'] ?>"></div>
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