<?php
include '03_koneksi.php';
if ($_POST['getId']) {
	# code...
	$no=$_POST['getId'];
	$sql=mysqli_query($kon, "select * from sales where no='$no'");	
	while ($aa=mysqli_fetch_array($sql)) {
		# code...
		?>	

			<form action="sales_editaksi.php" method="post">
				<div class="container">

			    <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">No</label>
            <div class="col-sm-8"><input type="text" name="id1" class="form-control" required="" value="<?php echo $aa['no'] ?>"></div>
          </div>

          <div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Tanggal</label>
      			<div class="col-sm-8"><input type="date" name="id2" class="form-control" required="" value="<?php echo $aa['tanggal'] ?>"></div>
      		</div>	

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Rumah Sakit</label>
      			<div class="col-sm-8"><input type="text" name="id3" class="form-control" required="" value="<?php echo $aa['rumahsakit'] ?>"></div>
      		</div>

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">Ruangan</label>
            <div class="col-sm-8"><input type="text" name="id4" class="form-control" required="" value="<?php echo $aa['ruangan'] ?>"></div>
          </div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">User</label>
      			<div class="col-sm-8"><input type="text" name="id5" class="form-control" required="" value="<?php echo $aa['user'] ?>"></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Hasil</label>
      			<div class="col-sm-8"><input type="text" name="id6" class="form-control" required="" value="<?php echo $aa['hasil'] ?>"></div>
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