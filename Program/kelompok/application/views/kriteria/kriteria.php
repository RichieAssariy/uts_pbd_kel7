<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-12">
				<div class="card full-height">
					<img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png" alt="Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Kriteria</h1>

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Kriteria</button>
						<br>
					</div>
					<!-- <div class="card-header" alt="Card image" style="width:100%; background-image: url(<?= base_url('assets'); ?>/img/3.png); background-size: cover; ">
					<br>
					<h1>Kriteria</h1>
						<br>
						<br>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Kriteria</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="kriteria" class="display table table-striped table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Kriteria</th>
										<th>Nama Kriteria</th>
										<th>Bobot</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($kriteria as $item) : ?>
										<tr id="<?php echo $item->kode_kriteria; ?>">
											<td><?php echo $i; ?></td>
											<td><?php echo $item->kode_kriteria; ?></td>
											<td><?php echo $item->nama_kriteria; ?></td>
											<td><?php echo $item->bobot; ?></td>
											<td><a class="btn btn btn-info" href="<?php echo base_url('updateKriteria/' . $item->kode_kriteria); ?>">Ubah</a>
												<!-- <a class="btn btn btn-danger" href="<?php echo base_url('deleteKriteria/' . $item->kode_kriteria); ?>">Hapus</a> -->
												<a class="btn btn btn-danger deletea" href="<?php echo base_url('deleteKriteria/' . $item->kode_kriteria); ?>">Hapus</a>
											</td>
										</tr>
										<?php $i++;
									endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Kode Kriteria</th>
										<th>Nama Kriteria</th>
										<th>Bobot</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<form method="post">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Kriteria</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-sm-6 col-form-label">Masukan Jumlah Parameter</label>
							<div class="col-4">
								<input type="text" class="form-control form-control-round" name="jumlahpara" value="">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary " name="createkriteria" value="createkriteria">Lanjutkan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>