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
					<div class="card-header">
						<div class="card-title">Ubah Kriteria</div>
						<div class="card-category">Ubah data kriteria bobot dan parameter</div>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Kode Kriteria</label>
								<div class="col-sm-2">
									<input type="text" class="form-control form-control-round" name="kode_kriteria" readonly="readonly" value="<?php echo $select->kode_kriteria; ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nama Kriteria</label>
								<div class="col-sm-10">
									<input type="text" class="form-control form-control-round" placeholder="Masukan Nama Kriteria" name="nama_kriteria" value="<?php echo $select->nama_kriteria; ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Bobot</label>
								<div class="col-sm-10">
									<input type="text" class="form-control form-control-round" placeholder="Masukan Bobot" name="bobot" value="<?php echo $select->bobot; ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-form-label">Parameter</label>
							</div>

							<?php for ($i = 0; $i < $jumlah_parameter->jumlah_parameter; $i++) { ?>
								<?php if (($i % 3) == 0) {
									echo '<div class="form-group row">';
								} ?>
								<div class="col-sm-<?php if((($jumlah_parameter->jumlah_parameter%3)==1)&&($jumlah_parameter->jumlah_parameter-$i<2)){echo '12';}elseif((($jumlah_parameter->jumlah_parameter%3)==2)&&($jumlah_parameter->jumlah_parameter-$i<3)){echo '6';}else{echo '4';}?>">
									<input type="text" class="form-control form-control-round" placeholder="Parameter<?php echo ($i + 1); ?>" name="par<?php echo $i; ?>" value="<?php echo $parameter[$i]->nama_parameter;?>">
								</div>
								<?php if (($i % 3) == 2) {
									echo '</div>';
								} ?>
							<?php if ((($i % 3) != 2)&&$jumlah_parameter->jumlah_parameter==($i+1)) {
									echo '</div>';
								} ?>
							<?php } ?>

				
							<div class="box-footer">
								<button type="submit" class="btn btn-primary btn-round" name="updatekriteria" value="updatekriteria">Simpan
									Data</button>
								<button type="submit" class="btn btn-warning btn-round" name="back" value="back">Kembali</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>