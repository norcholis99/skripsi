<?php
include '03_koneksi.php';
if ($_POST['getId']) {
	# code...
	$no=$_POST['getId'];
	$sql=mysqli_query($kon, "select * from retur where no_retur='$no'");	
	while ($aa=mysqli_fetch_array($sql)) {
		# code...
		?>	

			<form action="rt_edit_aksi.php" method="post">
				<div class="container">

			    <div class="form-group row mt-3" hidden="">
      			<label class="col-sm-4 col-sm-label">No Retur</label>
      			<div class="col-sm-8"><input type="text" name="id1" class="form-control" required="" value="<?php echo $aa['no_retur'] ?>"></div>
      		</div>	

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Tanggal</label>
      			<div class="col-sm-8"><input type="date" name="id2" class="form-control" required="" value="<?php echo $aa['tanggal'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Nama Pelanggan</label>
      			<div class="col-sm-8"><input type="text" name="id3" class="form-control" required="" value="<?php echo $aa['nama_pelanggan'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Alamat</label>
      			<div class="col-sm-8"><input type="text" name="id4" class="form-control" required="" value="<?php echo $aa['alamat'] ?>"></div>
      		</div>

                  <div class="form-group row mt-3">
                        <label class="col-sm-4 col-sm-label">Kode Barang</label>
                        <div class="col-sm-8"><input type="text" name="id5" class="form-control" required="" value="<?php echo $aa['kode_barang'] ?>"></div>
                  </div>

                  <div class="form-group row mt-3">
                        <label class="col-sm-4 col-sm-label">Nama Barang</label>
                        <div class="col-sm-8"><input type="text" name="id6" class="form-control" required="" value="<?php echo $aa['nama_barang'] ?>"></div>
                  </div>

                  <div class="form-group row mt-3">
                        <label class="col-sm-4 col-sm-label">Quantity</label>
                        <div class="col-sm-8"><input type="text" name="id7" class="form-control" required="" value="<?php echo $aa['quantity'] ?>"></div>
                  </div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Satuan</label>
      			<div class="col-sm-8"><input type="text" name="id8" class="form-control" required="" value="<?php echo $aa['satuan'] ?>"></div>
      		</div>

                  <div class="form-group row mt-3">
                        <label class="col-sm-4 col-sm-label">Harga</label>
                        <div class="col-sm-8"><input type="text" name="id9" class="form-control" required="" value="<?php echo $aa['harga'] ?>"></div>
                  </div>

                  <div class="form-group row mt-3">
                        <label class="col-sm-4 col-sm-label">Total Sementara</label>
                        <div class="col-sm-8"><input type="text" name="id10" class="form-control" required="" value="<?php echo $aa['total_1'] ?>"></div>
                  </div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Ppn</label>
      			<div class="col-sm-8"><input type="text" name="id11" class="form-control" required="" value="<?php echo $aa['ppn'] ?>"></div>
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