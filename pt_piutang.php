
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Piutang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
      .header{
      background-color: #00bfff;
      color: #ffffff;
      padding: 14px;
      text-align: left;
      margin: 5px;
    }

    html{
      font-family: "lucida sans", sans-serif;
      font-size: 12px;
    }

    img.kiri {
      float: left;
      margin: 2px 3px 5px 5px;
    }

    .button {
      background-color:#4CAF50;
      border: none;
      color: white;
      padding: 3px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      margin: 4px 2px;
      cursor: pointer;
      }
    </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="04_index.php" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <b><?php include 'tgl.php'; ?></b>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="04_index.php" class="brand-link">
      <img src="mmp.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>ADMIN</b></span>
    </a>

    <div class="sidebar">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">INVENTORY</li>
          
          <li class="nav-item">
            <a href="bm_barang_masuk.php" class="nav-link">
              <i class="nav-icon fas fa-file text-info"></i>
              <p>
                Barang Masuk
                <span class=""></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="bk_barang_keluar.php" class="nav-link">
              <i class="nav-icon fas fa-copy text-info"></i>
              <p>
                Barang Keluar
                <i class=""></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="sb_stok_barang.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie text-info"></i>
              <p>
                Stok Barang
                <span class="right badge badge-danger">Up</span>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="pgn_pelanggan.php" class="nav-link">
              <i class="nav-icon fas fa-heart text-info"></i>
              <p>
                Pelanggan
                <i class=""></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit text-info"></i>
              <p>
                Form
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mo_movement_on.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Movement On</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pl_pembelian_lokal.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Pembelian Lokal</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-header">PROFIT & LOSS</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt text-warning"></i>
              <p>
                Piutang
                <span class="right badge badge-danger">Yes</span>
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="rt_retur.php" class="nav-link">
              <i class="nav-icon far fa-envelope text-warning"></i>
              <p>
                Retur
                <i class="right badge badge-danger">No</i>
              </p>
            </a>  
          </li>

          <li class="nav-header">REPORT</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th text-success"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bm_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="bk_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Barang Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sb_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Stok Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pgn_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mo_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data MO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pl_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data PL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pt_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Piutang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rt_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Laporan Data Retur</p>
                </a>
              </li>
            </ul>
          </li>

          
          
          <li class="nav-header">Serba-serbi</li>
          <li class="nav-item">
            <a href="01_login.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Log Out</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content">
      <div class="header">
			<img class="kiri" src="mmp.png" width="45px" height="45px" alt="logo mmp"> 
			<h4> &nbsp Data Piutang<br> &nbsp PT. Megah Medika Pharma Cabang Banjarmasin</h4>
		</div>

		<div class="button" style="margin: 5px" data-target="#mdl" data-toggle="modal">Tambah Data

		<form method="GET" action="pt_piutang.php" style="float: left;"></div>
			<input placeholder=" Search" type="text" name="cari">
			<button type="submit" class="btn btn-navbar">
     <i class="fas fa-search"></i>   
      </button>
		</form>
	
		<a href="pt_report.php">
      <button onclick="return" class="btn-xs btn-primary" style="float: right; margin: 10px;">Cetak</button>
    </a>

	<div class="modal" tabindex="-1" role="dialog" id="mdl">
  		<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
        	<h5 class="modal-title">Input Data Barang Masuk</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      	</div>

      	<div class="modal-body">
			<form method="POST" action="pt_tambah.php">
      			<div class="container">

          <div class="form-group row mt-3">
            <label class="col-sm-4 col-sm-label">No Faktur</label>
            <div class="col-sm-8"><input type="text" name="no1" class="form-control" required=""></div>
          </div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Tanggal Faktur</label>
      			<div class="col-sm-8"><input type="date" name="no2" class="form-control" required=""></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Tanggal Jatuh Tempo</label>
      			<div class="col-sm-8"><input type="date" name="no3" class="form-control" required=""></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Nama Pelanggan</label>
      			<div class="col-sm-8"><input type="text" name="no4" class="form-control" required=""></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Alamat</label>
      			<div class="col-sm-8"><input type="text" name="no5" class="form-control" required=""></div>
      		</div>

      		<div class="form-group row mt-3">
      			<label class="col-sm-4 col-sm-label">Jumlah Tagihan</label>
      			<div class="col-sm-8"><input type="text" name="no6" class="form-control" required=""></div>
      		</div>
      	</div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="submit">Simpan Data</button>
    </div>
    </form>
</div>
</div>
</div>

	<div style="margin: 5px">
    <table class="table table-bordered">

    	<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari'];
		} ?>

		<tr bgcolor="ffff00">
			<th style="text-align: center;">No Faktur</th>
			<th style="text-align: center;">Tanggal Faktur</th>
			<th style="text-align: center;">Tanggal Jatuh Tempo</th>
			<th style="text-align: center;">Nama Pelanggan</th>
			<th style="text-align: center;">Alamat</th>
			<th style="text-align: center;">Jumlah Tagihan</th>

			<th style="text-align: center;">Opsi</th>
		</tr>

	<tbody>
   

		<?php 
			include '03_koneksi.php';
     
      

			if(isset($_GET['cari'])){ $cari = $_GET['cari'];

			$sql=mysqli_query($kon,"select * from piutang where no_faktur like '%".$cari."%' or nama_pelanggan like '%".$cari."%' order by no_faktur asc ");
		} else {$sql = mysqli_query($kon,"select * from piutang order by no_faktur asc");
			}
			while ($saa=mysqli_fetch_array($sql)) {

				# code...
			 ?>


			<tr>
        <td style="text-align: center;"><?php echo $saa['no_faktur']; ?></td>
				<td style="text-align: center;"><?php echo $saa['tgl_faktur']; ?></td>
				<td style="text-align: center;"><?php echo $saa['tgl_jatuhtempo']; ?></td>
				<td><?php echo $saa['nama_pelanggan']; ?></td>
				<td><?php echo $saa['alamat']; ?></td>
				<td style="text-align: right;"><?php echo "Rp " . (number_format($saa['jumlah_tagihan'],0,',','.')); ?></td>

				<td style="text-align: center;">
							
					<a class="edit.record" href="#" data-target="#md2" data-toggle="modal" data-id=<?php echo $saa ['no_faktur'] ; ?>>
            <i class="nav-icon fas fa-key text-info"></i>
          </a>&nbsp&nbsp
					
					<a href="pt_hapus.php?id=<?php echo $saa ['no_faktur'];?>">
            <i onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini !')" class="nav-icon fas fa-trash text-danger"></i>
          </a>
				</td>
			</tr>

		<tr>

		
			<div class="modal fade" tabindex="-1" role="dialog" id="md2">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h5 class="modal-title">Edit Data Piutang</h5>
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
      					</div>

      		<div class="modal-body">
      			<div class="modal-data">
        			text disini...
      			</div>
      		</div>
      
    				</div>
 				</div>
			</div>
		</div>
	</tr>
	
		</tbody>
			<?php 
      $jumlah_tagihan=$jumlah_tagihan+$saa['jumlah_tagihan'];
    

    } 
    ?>

     <th colspan="5" style="text-align: center; font-size: 12px">Total</th>
    <th style="text-align: right; font-size: 12px"><?php echo "Rp".(number_format($jumlah_tagihan,0,',','.')); ?></th>
	</table>
</div>

	
	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  	</body>
</html>

<script>
  $("#no_faktur").keyup(function(event){
    if (event.which == 13 || event.keycode == 13){
      $("#tgl_faktur").focus();
    }
  });
  $("#tgl_faktur").keyup(function(event){
    if (event.which == 13 || event.keycode == 13){
      $("#tgl_jatuhtempo").focus();
    }
  });
  $("#tgl_jatuhtempo").keyup(function(event){
    if (event.which == 13 || event.keycode == 13){
      $("#nama_pelanggan").focus();
    }
  });
  $("#nama_pelanggan").keyup(function(event){
    if (event.which == 13 || event.keycode == 13){
      $("#alamat").focus();
    }
  });
  $("#alamat").keyup(function(event){
    if (event.which == 13 || event.keycode == 13){
      $("#jumlah_tagihan").focus();
    }
  });
</script>

<script>
	$(document).ready(function(){
		$('#md2').on('show.bs.modal', function(e) {
			var getId= $(e.relatedTarget).data('id');
			$.ajax({
				type : 'POST',
				url : 'pt_edit.php',
				data : 'getId='+getId,

				success:function(data){
					$('.modal-data').html(data);

				}

			});
		});
	});
</script>

          </section>
        </div>
    </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="#">AdminLTE.io & Norcholis</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>