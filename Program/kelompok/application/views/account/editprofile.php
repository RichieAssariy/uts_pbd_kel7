<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-md-10 ml-auto mr-auto">
      <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Update Pengguna</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="post">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama</label>
                        <input class="form-control" id="name" name="name" placeholder="Nama" type="text" value="<?php echo $user->name; ?>">
                        <?= form_error('name', '<small class="text-danger" pl-3>', '</small>') ?>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email</label>
                        <input class="form-control" id="email" name="email" placeholder="Email" type="text" value="<?php echo $user->email; ?>">
                        <?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Password</label>
                        <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                        <?= form_error('password', '<small class="text-danger" pl-3>', '</small>') ?>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Jenis Akun</label>
                        <select class="form-control" name="account" value="<?php echo $user->level; ?>">
                            <option value="admin">admin</option>
                            <option value="operator">operator</option>
                            <option value="user">user</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Alamat</label>
                        <input class="form-control" id="address" name="address" placeholder="Alamat" type="text" value="<?php echo $dtluser->address; ?>">
                        <?= form_error('address', '<small class="text-danger" pl-3>', '</small>') ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Kota</label>
                        <input class="form-control" id="city" name="city" placeholder="Kota Asal" type="text" value="<?php echo $dtluser->city; ?>">
                        <?= form_error('city', '<small class="text-danger" pl-3>', '</small>') ?>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Negara</label>
                        <input class="form-control" id="country" name="country" placeholder="Negara Asal" type="text" value="<?php echo $dtluser->country; ?>">
                        <?= form_error('country', '<small class="text-danger" pl-3>', '</small>') ?>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Nomer Telepon</label>
                        <input class="form-control" id="phone" name="phone" placeholder="Nomer Telepon" type="text" value="<?php echo $dtluser->phone; ?>">
                        <?= form_error('phone', '<small class="text-danger" pl-3>', '</small>') ?>
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
                    <textarea rows="4" class="form-control" id="note" name="note" placeholder="Keterangan" type="text" value=""><?php echo $dtluser->note; ?></textarea>
                        <?= form_error('note', '<small class="text-danger" pl-3>', '</small>') ?>
                  </div>
                </div>
                <div class="box-footer">
                        <button type="submit" name="updateUser" value="updateUser" class="btn btn-primary ">Simpan Data</button>
                        <a href="<?php echo base_url($this->session->userdata['level']); ?>" class="btn btn-warning ">Kembali</a>
                    </div>
              </form>
            </div>
          </div>
			</div>
		</div>
	</div>
</div>