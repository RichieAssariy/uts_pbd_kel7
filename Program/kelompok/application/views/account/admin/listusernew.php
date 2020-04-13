<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">List User</h2>
				</div>
				<div class="ml-md-auto py-2 py-md-0">
					<a href="#" class="btn btn-secondary btn-round">Tambah User</a>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<ul class="nav nav-pills nav-primary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
									<i class="flaticon-user"></i>
									Akun Admin
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
									<i class="flaticon-users"></i>
									Akun Staff
								</a>
							</li>
						</ul>
						<div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
							<div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
								<div class="row">
									<?php foreach ($user as $item) : if ($item->level != 'admin') {
											continue;
										} ?>

										<div class="col-md-4">

											<div class="card">
												<!-- <img class="card-img-top" src="<?php echo base_url('./assets/upload/' . $item->display_picture); ?>" alt="Card image cap"> -->
												<div class="card-body">
													<h5 class="card-title"><?php echo $item->name; ?></h5>
													<p class="card-text"><?php echo $item->email ?></p>
													<a href="<?php echo base_url('detailUser/' . $item->id); ?>" class="btn btn-primary">Detail Akun</a>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
								<div class="card-body">
									<div class="table-responsive">
										<table id="listuser" class="display table table-striped table-hover" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Pengguna</th>
													<th>Email</th>
													<th>Opsi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Nama Pengguna</th>
													<th>Email</th>
													<th>Opsi</th>
												</tr>
											</tfoot>
											<tbody>
												<?php $i = 1;
												foreach ($user as $item) : if ($item->level != 'user') {
														continue;
													} ?>
													<tr>
														<td><?php echo $i; ?></td>
														<td><?php echo $item->name ?></td>
														<td><?php echo $item->email ?></td>
														<td> <a href="<?php echo base_url('detailUser/' . $item->id); ?>" class="btn btn-primary"> Detail </a> </td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>