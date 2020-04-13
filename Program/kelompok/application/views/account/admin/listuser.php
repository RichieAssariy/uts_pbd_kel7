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
					<img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>List User</h1>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="listuser" class="display table table-striped table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Email</th>
										<th>Nama</th>
										<th>Level</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($user as $item) : ?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $item->email; ?></td>
											<td><?php echo $item->name; ?></td>
											<td><?php echo $item->level; ?></td>
											<td><a class="btn btn btn-primary" href="<?php echo base_url('detailUser/' . $item->id); ?>">Detail</a>
												<!-- <a class="btn btn btn-danger" href="<?php echo base_url('deleteUser/' . $item->id); ?>">Hapus</a> -->
												<a class="btn btn btn-danger deleteus" href="<?php echo base_url('deleteUser/' . $item->id); ?>">Hapus</a>
											</td>
											</td>
										</tr>
										<?php $i++;
									endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Email</th>
										<th>Nama</th>
										<th>Level</th>
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