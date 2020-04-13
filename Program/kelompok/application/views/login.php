<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tugas UTS PBD 2020">
    <meta name="author" content="Kelompok 7">
    <title>Halaman masuk</title>
    <!-- Favicon -->
    <link href="<?= base_url('assets'); ?>/img/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?= base_url('assets'); ?>/argon./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/argon./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?= base_url('assets'); ?>/argon/assets/css/argon.css?v=1.0.1" rel="stylesheet">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Docs CSS -->
    <link type="text/css" href="<?= base_url('assets'); ?>/argon./assets/css/docs.min.css" rel="stylesheet">
</head>

<body>
    <main>
        <section class="section section-shaped section-lg">
            <div class="shape shape-style-1 bg-gradient-default">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container pt-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <h3>Form Masuk</h3>
                                </div>
                                <form method="post" action="<?= base_url('login'); ?>">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-cloud-download-95"></i></span>
                                            </div>
                                            <input class="form-control" id="email" name="email" placeholder="E-mail" type="email" value="<?= set_value('email') ?>">
                                        </div>
                                        <?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-laptop"></i></span>
                                            </div>
                                            <input class="form-control" id="password" name="password" placeholder="Kata kunci" type="password">
                                        </div>
                                        <?= form_error('password', '<small class="text-danger" pl-3>', '</small>') ?>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary my-4">Masuk!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <br>
                                <a href="<?= base_url('registration'); ?>" class="text-light">
                                    <small>Buat akun baru?</small>
                                </a>
                            </div>
                            <div class="col-12 text-right">
                                <br>
                                <a href="<?= base_url('/'); ?>" class="text-light">
                                    <small>Kembali Ke Halaman Utama</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script>
        var msg = '<?= $this->session->flashdata('msg') ?>';
        var type = '<?= $this->session->flashdata('type') ?>';
        if (msg.length !== 0) {
            swal('', msg, type);
        }
    </script>

    <!-- Core -->
    <script src="<?= base_url('assets'); ?>/argon./assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argon/assets/vendor/popper/popper.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argon/assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argon/assets/vendor/headroom/headroom.min.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url('assets'); ?>/argon/assets/js/argon.js?v=1.0.1"></script>
</body>

</html>
