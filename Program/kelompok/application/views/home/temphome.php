<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tugas UTS PBD 2020">
    <meta name="author" content="Kelompok 7">
  <title>UTS PBD 2020</title>
  <!-- Favicon -->
  <link href="<?= base_url('assets'); ?>/img/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= base_url('assets'); ?>/argon/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?= base_url('assets'); ?>/argon/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= base_url('assets'); ?>/argon/assets/css/argon.css?v=1.0.1" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="<?= base_url('assets'); ?>/argon/assets/css/docs.min.css" rel="stylesheet">
  <!-- <link href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"> -->

  <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: gray;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #212;
    }
  </style>
</head>

<body>
  <a href="#satu" id="myBtn" title="Kembali ke atas"><i class="fa fa-arrow-circle-o-up my-float"></i></a>
  <header id="satu" class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom headroom--unpinned">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="<?= base_url('/'); ?>">
          <img src="<?= base_url('assets'); ?>/img/Logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?= base_url('/'); ?>">
                  <img src="<?= base_url('assets'); ?>/img/Logo-mini.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Perhitungan</span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                  <a href="<?= base_url('homeKriteria'); ?>" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="fa fa-tasks"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">List Kriteria</h6>
                      <p class="description d-none d-md-inline-block mb-0">Kriteria yang sudah ditambahkan ke sistem ini</p>
                    </div>
                  </a>
                  <a href="<?= base_url('homeAlternatif'); ?>" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="fa fa-file-code-o"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">List Negara Bagian</h6>
                      <p class="description d-none d-md-inline-block mb-0">Negara Bagian yang sudah ditambahkan ke sistem ini</p>
                    </div>
                  </a>
                  <a href="<?= base_url('homeNilaiAhir'); ?>" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Perhitungan Ahir</h6>
                      <p class="description d-none d-md-inline-block mb-0">Hasil Perhitungan dari data Sensus Penduduk USA</p>
                    </div>
                  </a>
                </div>
              </div>
						</li>
						<a href="<?= base_url('registration'); ?>" class="nav-link" role="button">Pendaftaran</a>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="<?= base_url('login'); ?>" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class="fa fa-unlock-alt  mr-2"></i>
                </span>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <?php $this->load->view($view_name); ?>
  </main>
  <footer class="footer has-cards">
    <div class="container">
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2020
            <a href="https://www.tiktok.com" target="_blank">Kelompok-7</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="<?= base_url('assets'); ?>/atlantis/assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="<?= base_url('assets'); ?>/argon/assets/vendor/popper/popper.min.js"></script>
  <script src="<?= base_url('assets'); ?>/argon/assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?= base_url('assets'); ?>/argon/assets/vendor/headroom/headroom.min.js"></script>
  <!-- Datatables -->
  <script src="<?= base_url('assets'); ?>/atlantis/assets/js/plugin/datatables/datatables.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url('assets'); ?>/argon/assets/js/argon.js"></script>

  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <script>
    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
  </script>

  <script>
    $(document).ready(function() {
      $('#base').DataTable({
        "order": [
          [1, "asc"]
        ],
        "lengthMenu": [
          [5, 10, 25],
          [5, 10, 25]
        ],
        "dom": '<"pull-right"f><"pull-left"l>tip',
        language: {
          searchPlaceholder: "Cari Data",
          paginate: {
            previous: "<",
            next: ">"
          }
        }
      });

      $('#rank').DataTable({
        "order": [
          [2, "asc"]
        ],
        "lengthMenu": [
          [5, 10, 25],
          [5, 10, 25]
        ],
        "dom": '<"pull-right"f><"pull-left"l>tip',
        language: {
          searchPlaceholder: "Cari Data",
          paginate: {
            previous: "<",
            next: ">"
          }
        }
      });

    });
  </script>

</body>

</html>
