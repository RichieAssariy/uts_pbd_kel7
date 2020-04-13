<div class="content">
  <div class="panel-header " style="min-height: 500px; background-image: url(<?= base_url('assets'); ?>/img/banner.png); background-size: cover; background-position: center top;">
    <div class="page-inner py-5">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
          <br><br><br><br><br>
          <h1 class="display-3 text-white pb-2 fw-bold">Profile</h1>>
          <a href="<?php echo base_url('editProfile')?>" class="btn btn-lg btn-white btn-round">Edit Profile</a>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
          
        </div>
      </div>
    </div>
  </div>
  <div class="page-inner mt--5">
    <div class="row justify-content-md-center">
      <div class="col-5">
        <div class="card card-stats card-round">
          <div class="card-body ">
            <div class="row align-items-center">
              <div class="col-icon">
                <div class="icon-big text-center icon-primary bubble-shadow-small">
                  <i class="flaticon-users"></i>
                </div>
              </div>
              <div class="col col-stats ml-3 ml-sm-0">
                <div class="numbers">
                  <p class="card-category">Terdaftar Sejak</p>
                  <h4 class="card-title"><?php echo $dtluser->date_created; ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-5">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div class="icon-big text-center icon-info bubble-shadow-small">
                  <i class="flaticon-interface-6"></i>
                </div>
              </div>
              <div class="col col-stats ml-3 ml-sm-0">
                <div class="numbers">
                  <p class="card-category">Hak Akses</p>
                  <h4 class="card-title"><?php echo $user->level; ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
    <div class="col-10">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-10">
              <h3 class="mb-0">Detail Pengguna</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form>
            <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Nama</label>
                    <input class="form-control" readonly="readonly" type="text" value="<?php echo $user->name; ?>">
                    <?= form_error('name', '<small class="text-danger" pl-3>', '</small>') ?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email</label>
                    <input class="form-control" readonly="readonly" type="text" value="<?php echo $user->email; ?>">
                    <?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Password</label>
                    <input class="form-control" id="password" name="password" readonly="readonly" type="password">
                    <?= form_error('password', '<small class="text-danger" pl-3>', '</small>') ?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Jenis Akun</label>
                    <input class="form-control" readonly="readonly" type="text" value="<?php echo $user->level; ?>">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Informasi Kontak</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Alamat</label>
                    <input class="form-control" readonly="readonly" type="text" value="<?php echo $dtluser->address; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-city">Kota</label>
                    <input class="form-control" readonly="readonly" type="text" value="<?php echo $dtluser->city; ?>">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Negara</label>
                    <input class="form-control" readonly="readonly" type="text" value="<?php echo $dtluser->country; ?>">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Nomer Telepon</label>
                    <input class="form-control" readonly="readonly" type="text" value="<?php echo $dtluser->phone; ?>">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">About me</h6>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label">Keterangan</label>
                <textarea rows="4" class="form-control" readonly="readonly" type="text"><?php echo $dtluser->note; ?></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>