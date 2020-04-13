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
					<img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Negara Bagian</h1>
						<a class="btn btn-primary" href="<?php echo base_url('createAlternatif'); ?>">Tambah
						Negara Bagian</a>
						<br>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="alternatif" class="display table table-striped table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Negara Bagian</th>
										<th>Nama Negara Bagian</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($alternatif as $item) : ?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $item->kode_alternatif; ?></td>
											<td><?php echo $item->nama_alternatif; ?></td>
											<td><a class="btn btn btn-info" href="<?php echo base_url('updateAlternatif/' . $item->kode_alternatif); ?>">Ubah</a>
												<!-- <a class="btn btn btn-danger" href="<?php echo base_url('deleteAlternatif/' . $item->kode_alternatif); ?>">Hapus</a> -->
												<a class="btn btn btn-danger deletekec" href="<?php echo base_url('deleteAlternatif/' . $item->kode_alternatif); ?>">Hapus</a>
											</td>


										</tr>
										<?php $i++;
									endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Kode Negara Bagian</th>
										<th>Nama Negara Bagian</th>
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
</div>