<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->load->view('dashboard/template/sidebar_user') ?>
		<!-- end of sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view('dashboard/template/topbar_user') ?>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800">Edit Kegiatan</h1>
				</div>
				<!-- /.container-fluid -->
				<!-- ISI INDEX -->


				<div class="container" style="margin-top: 8px">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="card">
								<div class="card-header">
									Input Kegiatan Siswa Magang
								</div>
								<div class="card-body">
									<form action="<?php echo base_url('kegiatan/edit') ?>" method="POST">

										<div class="form-group">
											<input type="hidden" name="id" value="<?= $kegiatan['id']; ?>">
										</div>

										<div class="form-group">
											<label>Kegiatan Hari ini</label>
											<textarea class="form-control" name="kegiatan" placeholder="Isi Kegiatan Hari ini" value=""><?= $kegiatan['isi_kegiatan']; ?></textarea>
										</div>

										<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin mengubah data ini?')">SUBMIT</button>
										<button type="reset" class="btn btn-warning">RESET</button>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>



			</div>



			<!-- END ISI INDEX         -->
			<!-- Footer -->
			<?php $this->load->view('dashboard/template/footer_user') ?>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>



	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
