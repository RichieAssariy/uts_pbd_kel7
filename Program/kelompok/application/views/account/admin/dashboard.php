<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
				</div>
				<div class="ml-md-auto py-2 py-md-0">
					<a href="<?= base_url('createUser');?>" class="btn btn-secondary btn-round">Tambah User</a>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-primary bubble-shadow-small">
									<i class="fa fa-users"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Admin Terdaftar</p>
									<h4 class="card-title"><?php echo $record_admin->jumlah_admin; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-info bubble-shadow-small">
									<i class="fa fa-tasks"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Jumlah Kriteria</p>
									<h4 class="card-title"><?php echo $record_kriteria->jumlah_kriteria; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-success bubble-shadow-small">
									<i class="fa fa-book"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Jumlah Alternatif</p>
									<h4 class="card-title"><?php echo $record_alternatif->jumlah_alternatif; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-secondary bubble-shadow-small">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">User Terdaftar</p>
									<h4 class="card-title"><?php echo $record_user->jumlah_user; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card full-height">
					<div class="card-body">
						<div class="card-title">Tabel Perangkingan</div>
						<div class="table-responsive">
						<table id="rank" class="display table table-striped table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<th>Ranking</th>
									</tr>
								</thead>
								<?php
								$rank = $rank;
								foreach ($rank as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<td><?= $rank[$key] ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card full-height">
					<div class="card-body">
						<div class="card-title">Peta Klasifikasi USA</div>
						<iframe width="100%" height="520" frameborder="0" src="https://rtr23.carto.com/builder/188612e6-c459-4ae0-a3bc-c5fa111565fc/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>