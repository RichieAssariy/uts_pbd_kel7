<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tugas UTS PBD 2020">
    <meta name="author" content="Kelompok 7">
    <title>Halaman Pendaftaran</title>
    <!-- Favicon -->
    <link href="<?= base_url('assets'); ?>/argon/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?= base_url('assets'); ?>/argon./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/argon./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?= base_url('assets'); ?>/argon/assets/css/argon.css?v=1.0.1" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="<?= base_url('assets'); ?>/argon./assets/css/docs.min.css" rel="stylesheet">
</head>

<body>
    <main>
        <section class="section section-shaped section-lg">
            <div class="shape shape-style-1 bg-gradient-dark">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container pt-lg">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <h3>Form Pendaftaran</h3>
                                </div>
                                <form method="post" action="<?= base_url('registration'); ?>">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" id="name" name="name" placeholder="Nama" type="text" value="<?= set_value('name') ?>">
                                        </div>
                                        <?= form_error('name', '<small class="text-danger" pl-3>', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="text" value="<?= set_value('email') ?>">
                                        </div>
                                        <?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" id="password1" name="password1" placeholder="Password" type="password">
                                        </div>
                                        <?= form_error('password1', '<small class="text-danger" pl-3>', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" id="password2" name="password2" placeholder="Ulangi Password" type="password">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4">Buat akun</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 text-left">
                                <a href="<?= base_url('login'); ?>" class="text-light">
                                    <small>Sudah Punya Akun!</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
    <script src="<?= base_url('assets'); ?>/argon./assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argon/assets/vendor/popper/popper.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argon/assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/argon/assets/vendor/headroom/headroom.min.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url('assets'); ?>/argon/assets/js/argon.js?v=1.0.1"></script>
</body>

</html>