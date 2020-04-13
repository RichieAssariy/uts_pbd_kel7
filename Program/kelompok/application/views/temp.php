<!DOCTYPE html>
<html lang="id">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>UTS PBD 2020</title>
	<meta name="description" content="Tugas UTS PBD 2020">
    <meta name="author" content="Kelompok 7">
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets'); ?>/img/favicon.png" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['<?= base_url('assets'); ?>/atlantis/assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/atlantis/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/atlantis/assets/css/atlantis.min.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/adistyle.css">
	<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
	<!-- SweetAlert -->
	<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
	<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href=".<?= base_url('assets'); ?>/atlantis/assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="<?php
							if (($this->session->userdata['level'] == 'admin')) {
								base_url('admin');
							} else if (($this->session->userdata['level'] == 'user')) {
								base_url('user');
							} else if (($this->session->userdata['level'] == 'operator')) {
								base_url('operator');
							}
							?>" class="logo">
					<img src="<?= base_url('assets'); ?>/img/Logo-tiny.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= base_url('assets'); ?>/img/<?php
									if (($this->session->userdata['level'] == 'admin')) {
										echo "21120116130082.jpg";
									} else if (($this->session->userdata['level'] == 'user')) {
										echo "21120116130048.jpg";
									} else if (($this->session->userdata['level'] == 'operator')) {
										echo "21120115130090.jpg";
									}
							?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?= base_url('assets'); ?>/img/<?php
									if (($this->session->userdata['level'] == 'admin')) {
										echo "21120116130082.jpg";
									} else if (($this->session->userdata['level'] == 'user')) {
										echo "21120116130048.jpg";
									} else if (($this->session->userdata['level'] == 'operator')) {
										echo "21120115130090.jpg";
									}
							?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo $this->session->userdata['name']; ?></h4>
												<p class="text-muted"><?php echo $this->session->userdata['email']; ?></p><a href="<?php echo base_url('profile'); ?>" class="btn btn-xs btn-secondary btn-sm">Lihat Profil</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= base_url('logout'); ?>">Keluar</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<?php
		//var_dump($this->session->userdata['previlleges']);die;
		if (($this->session->userdata['level'] == 'admin')) {
			$this->load->view('account/admin/sidebar');
		} else if (($this->session->userdata['level'] == 'user')) {
			$this->load->view('account/user/sidebar');
		}  else if (($this->session->userdata['level'] == 'operator')) {
			$this->load->view('account/operator/sidebar');
		}
		?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<?php $this->load->view($view_name); ?>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2020, dibuat dengan <i class="fa fa-heart heart text-danger"></i> dari <a href="">kELOMPOK 7</a>
					</div>
				</div>
			</footer>
		</div>

	</div>

	<script>
		var msg = '<?= $this->session->flashdata('msg') ?>';
		var type = '<?= $this->session->flashdata('type') ?>';
		if (msg.length !== 0) {
			swal('', msg, type);
		}
	</script>


	<script>
		function ShowDiv(tableNum) {
			let jumlahTable = 10
			var table = [];

			for (i = 1; i <= jumlahTable; i++) {
				table[i] = document.getElementById("tb" + i);
				console.log(table[i]);

				if (tableNum == i) {
					table[i].style.display = "block";
				} else {
					table[i].style.display = "none";
				}
			}
		}

		ShowDiv(1);
	</script>


	<!--   Core JS Files   -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/core/popper.min.js"></script>
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/datatables/datatables.min.js"></script>
	<script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<!-- <script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/sweetalert/sweetalert.min.js"></script> -->

	<!-- Atlantis JS -->
	<script src="<?= base_url('assets'); ?>/atlantis/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>
	<script src="../assets/js/demo.js"></script>


	<script>
		$(document).ready(function() {
			$('#kriteria').DataTable({
				"columnDefs": [{
					"orderable": false,
					"targets": [3, 4]
				}]
			});

			$('#alternatif').DataTable({
				"columnDefs": [{
					"orderable": false,
					"targets": [2, 3]
				}]
			});

			$('#nilai').DataTable({
				"columnDefs": [{
					"orderable": false,
					"targets": [2, 3, 4, 5, 6, 7, 8]
				}]
			});

			$('#listuser').DataTable({
				"columnDefs": [{
					"orderable": false,
					"targets": [3, 4]
				}]
			});

			$("table[id^='base']").DataTable({
				"ordering": false,
				"paging": false,
				language: {
					searchPlaceholder: "Cari Data"
				}
			});

			$("table[id^='table']").DataTable({
				"scrollX": true,
				"ordering": false,
				"paging": false
			});

			$('#rank').DataTable({
				"order": [
					[1, "asc"]
				],
				"lengthMenu": [
					[5, 10, 25],
					[5, 10, 25]
				]
			});


		});
	</script>

<script type="text/javascript">
$('.deletea').on("click", function(e) {
  e.preventDefault();
  var url = $(this).attr('href');
  swal({
      title: "Hapus Data Kriteria?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Hapus!',
      cancelButtonText: "Batal!",
      confirmButtonClass: "btn-danger",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
        window.location.replace(url);
      } else {
        swal("Data Gagal Dihapus", "", "error");
      }
    });
});

$('.deletekec').on("click", function(e) {
  e.preventDefault();
  var url = $(this).attr('href');
  swal({
      title: "Hapus Data Negara Bagian?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Hapus!',
      cancelButtonText: "Batal!",
      confirmButtonClass: "btn-danger",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
        window.location.replace(url);
      } else {
        swal("Data Gagal Dihapus", "", "error");
      }
    });
});

$('.deleteus').on("click", function(e) {
  e.preventDefault();
  var url = $(this).attr('href');
  swal({
      title: "Hapus Data User?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Hapus!',
      cancelButtonText: "Batal!",
      confirmButtonClass: "btn-danger",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
        window.location.replace(url);
      } else {
        swal("Data Gagal Dihapus", "", "error");
      }
    });
});

    
</script>

</body>

</html>