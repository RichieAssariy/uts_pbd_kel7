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
			<div class="col-md-8 ml-auto mr-auto">
				<div class="card" id="tbahir">
					<img class="card-img-top" src="<?= base_url('assets'); ?>/img/3.png"" alt=" Card image" style="width:100%">
					<div class="card-img-overlay ">
						<br>
						<h1>Nilai Ahir</h1>
					</div>
					<div class="card-block mx-3 my-2">
						<div class="table-responsive">
							<table id="nilaiahir" class="display table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Negara Bagian</th>
										<th>Total</th>
										<th>Rank</th>
									</tr>
								</thead>
								<?php
								$rank = $rank;
								foreach ($rank as $key => $val) : ?>
									<tr>
										<td><?= $alt[$key] ?></td>
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

<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Modal Heading</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				Modal body..111
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="myModa2">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Modal Heading</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				Modal body..222
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="myModa3">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Modal Heading</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				Modal body..333
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>