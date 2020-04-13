<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tugas UTS PBD 2020">
    <meta name="author" content="Kelompok 7">
    <title>UTS PBD 2020</title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Favicon -->
    <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/argondash/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/argondash/assets/vendor/fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/argondash/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/argondash/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/argondash/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/argondash/assets/css/argon.min.css?v=1.0.0" type="text/css">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <!-- Sidenav -->
    <?php
    //var_dump($this->session->userdata['previlleges']);die;
    if (($this->session->userdata['level'] == 'admin')) {
        $this->load->view('account/admin/sidebar');
    } else if (($this->session->userdata['level'] == 'user')) {
        $this->load->view('account/user/sidebar');
    } else (($this->session->userdata['level'] == 'operator')) {
        $this->load->view('account/operator/sidebar');
    }
    ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center ml-md-auto">


                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="<?= base_url('assets'); ?>/img/21120116130082.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><?php echo $this->session->userdata['name']; ?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="<?= base_url('logout'); ?>" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Keluar</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Main-Body-Start -->
        <?php $this->load->view($view_name); ?>

        <!-- Footer -->
        <footer class="footer pt-0 mx-4">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center text-lg-left text-muted">
                        &copy; 2020 <a href="WWW.TIKTOK.COM" class="font-weight-bold ml-1" target="_blank">Kelompok-7</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        var msg = '<?= $this->session->flashdata('msg') ?>';
        var type = '<?= $this->session->flashdata('type') ?>';
        if (msg.length !== 0) {
            swal('', msg, type);
        }
    </script>

    <script>
        function deleteuser($id)
        {
            Swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        },
        function(){
            $.ajax({
                url:"<?php echo base_url('deleteUser/'); ?>"
                type:"post",
                data:{id:id},
                success:function(){
                    swal('data berhasil','success');
                },
                error:function(){
                    swal('data gagal','error');
                }
            })
        });
        }
     
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var tb1 = document.getElementById("tb1");
            var tb2 = document.getElementById("tb2");
            var tb3 = document.getElementById("tb3");

            tb1.style.display = "block";
            tb2.style.display = "none";
            tb3.style.display = "none";
        });

        function myFunction1() {
            var tb1 = document.getElementById("tb1");
            var tb2 = document.getElementById("tb2");
            var tb3 = document.getElementById("tb3");

            tb1.style.display = "none";
            tb2.style.display = "block";
            tb3.style.display = "none";

        }

        function myFunction2() {
            var tb1 = document.getElementById("tb1");
            var tb2 = document.getElementById("tb2");
            var tb3 = document.getElementById("tb3");

            tb1.style.display = "none";
            tb2.style.display = "none";
            tb3.style.display = "block";

        }
    </script>

    

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js">
    </script>
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
    <!-- Optional JS -->
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- data-table js -->
    <script scr="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/datatables.net/js/jquery.dataTables.min.js">
    </script>
    <script src="<?= base_url('assets'); ?>/argondash/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <!-- Argon JS -->
    <script src="<?= base_url('assets'); ?>/argondash/assets/js/argon.min.js?v=1.0.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="<?= base_url('assets'); ?>/argondash/assets/js/demo.min.js"></script>
    <script src="<?= base_url('assets'); ?>/adistyle.css"></script>

    <script>
    	$(document).ready(function () {
    		$('#dt1').DataTable({
            "scrollX":        true,
            "paging":         true
    		});
    	});
         </script>

</body>

</html>