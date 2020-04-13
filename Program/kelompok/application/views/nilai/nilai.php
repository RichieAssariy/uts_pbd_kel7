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
						<h1>Nilai</h1>
						<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Detail Kriteria</button> -->
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="nilai" class="display table table-striped table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Kode Alternatif</th>
										<th>Nama Alternatif</th>
										<?php
										if ($count > 0) :
											for ($a = 1; $a <= $count; $a++) {
												echo "<th>C0$a</th>";
											}
										endif;
										?>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($alternatif as $item) : ?>
										<tr>
											<td><?php echo $item->kode_alternatif; ?></td>
											<td><?php echo $item->nama_alternatif; ?></td>
											<?php foreach ($nilai[$item->kode_alternatif] as $k => $v) : ?>
												<td><?= $v; ?></td>
											<?php endforeach; ?>
											<td><a class="btn btn btn-info" href="<?php echo base_url('updateNilai/' . $item->kode_alternatif); ?>">Ubah</a>
											</td>
										</tr>
										<?php $i++;
									endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>Kode Alternatif</th>
										<th>Nama Alternatif</th>
										<?php
										if ($count > 0) :
											for ($a = 1; $a <= $count; $a++) {
												echo "<th>C$a</th>";
											}
										endif;
										?>
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
				<div class="modal-header">
					<h4 class="modal-title">Detail Kriteria</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-5 col-md-4">
									<div class="nav flex-column nav-pills nav-secondary nav-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
										<?php
										foreach ($kriteria as $row) : ?>
											<a class="nav-link " id="v-pills-home-tab-nobd" data-toggle="pill" href="#v-<?php echo $row->kode_kriteria ?>" role="tab" aria-controls="v-pills-home-nobd" aria-selected="true"><?php echo $row->kode_kriteria ?> <?php echo $row->nama_kriteria ?></a>
										<?php endforeach ?>
									</div>
								</div>
								<div class="col-7 col-md-8">
									
								<div class="tab-content" id="v-pills-without-border-tabContent">
										
									<?php foreach ($kriteria as $row) :?>
											<div class="tab-pane fade show" id="v-<?php echo $row->kode_kriteria ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
											<?php foreach ($parameter as $item) :  if ($item->kode_kriteria != $row->kode_kriteria) {
											continue;
										} ?>
												<input type="text" class="form-control form-control-round"  value="<?php echo $item->nama_parameter; ?> Nilai &nbsp <?php echo $item->nilai_parameter; ?>" disabled><br>
												<?php endforeach; ?>
										</div>
									<?php endforeach; ?>
								</div>
						
								</div>
								
							</div>
						</div>
					</div>
					<!-- <table id="basic-datatables2" class="display table table-striped table-hover" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Kode Kriteria</th>
								<th>Nama Kriteria</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;
							foreach ($kriteria as $item) : ?>
										<tr>
											<td><?php echo $item->kode_kriteria; ?></td>
											<td><?php echo $item->nama_kriteria; ?></td>
										</tr>
										<?php $i++;
									endforeach; ?>
						</tbody>
					</table> -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<a href="#" class="float" data-toggle="modal" data-target="#myModal">
<i class="fa fa-info my-float"></i>
</a>
<div class="label-container">
<div class="label-text">Detail Kriteria</div>
<i class="fa fa-play label-arrow"></i>
</div>
</div>