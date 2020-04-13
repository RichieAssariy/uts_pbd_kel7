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
						<div class="card-title">Ubah Nilai Bobot &raquo; <h4><?= $selectalt->nama_alternatif ?></div>
						<div class="card-category">Ubah nilai masing masing parameter</div>
					</div>
					<div class="card-body">
					<form method="post">
						<!-- <?php
						foreach ($form as $row) : ?>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><?= $row->nama_kriteria ?></label>
								<div class="col-sm-60">
									<input type="text" class="form-control form-control-round" placeholder="Masukan Nama Kriteria" name="ID-<?= $row->ID ?>" value="<?= $row->nilai ?>">
								</div>
							</div>
						<?php endforeach ?> -->

						<div class="form-group row">
								<?php
							foreach ($form as $row) : ?>
									<label class="col-sm-2 col-form-label"><?= $row->nama_kriteria ?></label>
									<div class="col-sm-2">
										<!-- <input type="text" class="form-control form-control-round" placeholder="Masukan Nilai" name="ID-<?= $row->kode_kriteria ?>" value=""> -->
										<select class="form-control form-control" placeholder="Masukan Nilai" name="ID-<?= $row->kode_kriteria ?>">
										<?php  foreach($parameter as $item): if($item->kode_kriteria != $row->kode_kriteria){continue;} ?>
										<option value="<?php echo $item->nilai_parameter; ?>" <?php if($row->nama_parameter == $item->nama_parameter){echo 'selected';} ?>>(<?php echo $item->nilai_parameter;?>) <?php echo $item->nama_parameter;?></option>
										<?php endforeach;?>
									</select>
									</div>
									<?php endforeach ?>
								</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-round" name="updaterelasi" value="updaterelasi">Simpan
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