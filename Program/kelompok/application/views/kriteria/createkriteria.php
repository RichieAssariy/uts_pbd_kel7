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
				<div class="card ">
					<div class="card-header" alt="Card image" style="width:100%; background-image: url(<?= base_url('assets'); ?>/img/3.png); background-size: cover; ">
						<div class="card-title">Tambah Kriteria</div>
						<div class="card-category">Masukan Data kriteria bobot dan parameter</div>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Kode Kriteria</label>
								<div class="col-2">
									<input type="text" class="form-control form-control-round" readonly="readonly" name="kode_kriteria" value="<?php echo $gen; ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nama Kriteria</label>
								<div class="col-sm-8">
									<input type="text" class="form-control form-control-round" placeholder="Masukan Nama Kriteria" name="nama_kriteria" value="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Bobot</label>
								<div class="col-sm-8">
									<input type="text" class="form-control form-control-round" placeholder="Masukan Bobot" name="bobot" value="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-form-label">Parameter</label>
							</div>

							
							<?php for ($i = 0; $i < $jumlahpara; $i++) { ?>
								<?php if (($i % 3) == 0) {
									echo '<div class="form-group row">';
								} ?>
								<div class="col-sm-<?php if((($jumlahpara%3)==1)&&($jumlahpara-$i<2)){echo '12';}elseif((($jumlahpara%3)==2)&&($jumlahpara-$i<3)){echo '6';}else{echo '4';}?>">
									<input type="text" class="form-control form-control-round" placeholder="Parameter<?php echo ($i + 1); ?>" name="par<?php echo $i; ?>" value="">
								</div>
								<?php if (($i % 3) == 2) {
									echo '</div>';
								} ?>
							<?php if ((($i % 3) != 2)&&$jumlahpara==($i+1)) {
									echo '</div>';
								} ?>
							<?php } ?>
							<!--cepet seminar oi wkwkwk ~MyLogicalWorld-->
					<br><br>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary " name="tambahkriteria" value="tambahkriteria">Simpan
							Data</button>
						<button type="submit" class="btn btn-warning " name="back" value="back">Kembali</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>