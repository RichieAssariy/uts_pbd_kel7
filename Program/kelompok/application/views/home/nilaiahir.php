<div class="position-relative">
	<!-- shape Hero -->
	<section class="section section-lg section-hero section-shaped">
		<div class="shape shape-style-1 shape-primary">
			<span class="span-150"></span>
			<span class="span-50"></span>
			<span class="span-50"></span>
			<span class="span-75"></span>
			<span class="span-100"></span>
			<span class="span-75"></span>
			<span class="span-50"></span>
			<span class="span-100"></span>
			<span class="span-50"></span>
			<span class="span-100"></span>
		</div>
		<div class="container shape-container d-flex  py-lg">
			<div class="col px-0">
				<div class="row">
					<div class="col-lg-6">
						<h1 class="display-3  text-white">Hasil Perhitungan Sensus Penduduk USA
							<span></span>
						</h1>
						<p class="lead  text-white">Hasil Perangkingan dari perhitungan Sensus Penduduk USA</p>
					</div>
					<div class="col-12">
						<div class="card full-height">
							<div class="card-body">
								<div class="table-responsive">
									<table id="rank" class="display table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Negara Bagian</th>
												<th>Total</th>
												<th>Ranking</th>
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
		<!-- SVG separator -->
		<div class="separator separator-bottom separator-skew">
			<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
			</svg>
		</div>
	</section>
	<!-- 1st Hero Variation -->
</div>