<div class="content">
	<div class="panel-header bg-primary-gradient ">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Perhitungan Sensus Penduduk USA</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-12">
				<div class="card mx-auto" id="tb1">
				<div class="card-header">
					<br>
					<h1>Nilai</h1>
					<br><br><br>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Nilai</h1>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="base_1" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->kriteria as $key => $val) : ?>
											<th><?= $krt[$key]['nama_kriteria'] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($olah as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= $v ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb2">
					<div class="card-header">
					<br>
					<h1>Perhitungan Normalisasi</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse1">
							<div class="card card-body">
							<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/1.png" alt="Card image" overflow="hidden" width="40%" height="auto">	
							</div>
						</div>
					</div>
					<!-- <img class="img-responsive" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Perhitungan Normalisasi</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Formula</button>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
							Button with data-target
						</button>
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								Test collapse
								<br><br><br><br>
							</div>
						</div>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="base_2" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->kriteria as $key => $val) : ?>
											<th><?= $krt[$key]['nama_kriteria'] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($electre->normal as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= round($v, 4) ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb3">
				<div class="card-header">
					<br>
					<h1>Pembobotan</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse2">
							<div class="card card-body">
								<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/2.png" alt="Card image" overflow="hidden" width="40%" height="auto">		
							</div>
						</div>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Pembobotan</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModa2">Formula</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="base_3" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->kriteria as $key => $val) : ?>
											<th><?= $krt[$key]['nama_kriteria'] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($electre->terbobot as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= round($v, 4) ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb4">
					<div class="card-header">
					<br>
					<h1>Concordance</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse3">
							<div class="card card-body">
								<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/3.png" alt="Card image" overflow="hidden" width="40%" height="auto">	
							</div>
						</div>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Concordance</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModa3">Formula</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_1" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->concordance as $key => $val) : ?>
											<th><?= $alt[$key] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($electre->concordance as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= $key == $k ? '-' : implode(', ', $v) ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb5">
				<div class="card-header">
					<br>
					<h1>Disordance</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse4">
							<div class="card card-body">
								<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/4.png" alt="Card image" overflow="hidden" width="40%" height="auto">	
							</div>
						</div>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Disordance</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModa3">Formula</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_2" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->discordance as $key => $val) : ?>
											<th><?= $alt[$key] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($electre->discordance as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= $key == $k ? '-' : implode(', ', $v) ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb6">
				<div class="card-header">
					<br>
					<h1>Matriks C</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse5">
							<div class="card card-body">
								<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/5.png" alt="Card image" overflow="hidden" width="30%" height="auto">	
							</div>
						</div>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Matriks C</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModa3">Formula</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_3" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->m_concordance as $key => $val) : ?>
											<th><?= $alt[$key] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($electre->m_concordance as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= $key == $k ? '-' : $v ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb7">
				<div class="card-header">
					<br>
					<h1>Matriks D</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse6">
							<div class="card card-body">
								<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/6.png" alt="Card image" overflow="hidden" width="30%" height="auto">	
							</div>
						</div>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Matriks D</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModa3">Formula</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_4" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->m_discordance as $key => $val) : ?>
											<th><?= $alt[$key] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($electre->m_discordance as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= $key == $k ? '-' : round($v, 4) ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb8">
				<div class="card-header">
					<br>
					<h1>Matriks Dominan C</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse7">
							<div class="card card-body">
								<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/7.png" alt="Card image" overflow="hidden" width="30%" height="auto">	
							</div>
						</div>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Matriks Dominan C</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModa3">Formula</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_5" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->md_concordance as $key => $val) : ?>
											<th><?= $alt[$key] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($electre->md_concordance as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= $key == $k ? '-' : $v ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb9">
				<div class="card-header">
					<br>
					<h1>Matriks Dominan D</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse8">
							<div class="card card-body">
								<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/8.png" alt="Card image" overflow="hidden" width="30%" height="auto">	
							</div>
						</div>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Matriks Dominan D</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModa3">Formula</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_6" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->md_discordance as $key => $val) : ?>
											<th><?= $alt[$key] ?></th>
										<?php endforeach ?>
									</tr>
								</thead>
								<?php foreach ($electre->md_discordance as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($val as $k => $v) : ?>
											<td><?= $key == $k ? '-' : round($v, 4) ?></td>
										<?php endforeach ?>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

				<div class="card" id="tb10">
				<div class="card-header">
					<br>
					<h1>Agregat Matriks E</h1>
						<br>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseExample">
							Keterangan
						</button>
						<div class="collapse" id="collapse9">
							<div class="card card-body">
								<img class="img img-fluid" src="<?= base_url('assets'); ?>/img/electre/9.png" alt="Card image" overflow="hidden" width="20%" height="auto">	
							</div>
						</div>
					</div>
					<!-- <img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<br>
						<h1>Agregat Matriks E</h1>
						<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModa3">Formula</button>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_7" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<?php foreach ($electre->agregate as $key => $val) : ?>
											<th><?= $alt[$key] ?></th>
										<?php endforeach ?>
										<th>Total</th>
										<th>Rank</th>
									</tr>
								</thead>
								<?php
								$rank = $rank;
								foreach ($rank as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
										<?php foreach ($electre->agregate[$key] as $k => $v) : ?>
											<td><?= $key == $k ? '-' : round($v, 4) ?></td>
										<?php endforeach ?>
										<td><?= $electre->total[$key] ?></td>
										<td><?= $rank[$key] ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>