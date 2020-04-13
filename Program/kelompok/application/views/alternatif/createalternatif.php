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
						<div class="card-title">Tambah Negara Bagian</div>
						<div class="card-category">Masukan data Negara Bagian dan parameternya</div>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Kode Negara Bagian</label>
								<div class="col-sm-4">
									<input type="text" class="form-control form-control-round" name="kode_alternatif" readonly="readonly" value="<?php echo $gen; ?>">
								</div>
							</div>
							<div class="form-group row">
							<label class="col-sm-2 col-form-label">Nama Negara Bagian</label>
								<div class="col-sm-4">
									<input type="text" class="form-control form-control-round" placeholder="Masukan Nama Negara Bagian" name="nama_alternatif">
								</div>
							</div>
							
								<div class="form-group row">
								<?php
							foreach ($form as $row) : ?>
									<label class="col-sm-2 col-form-label"><?= $row->nama_kriteria ?></label>
									<div class="col-sm-2">
										<select class="form-control form-control" placeholder="Masukan Nilai" name="ID-<?= $row->kode_kriteria ?>">
										<?php  foreach($parameter as $item): if($item->kode_kriteria != $row->kode_kriteria){continue;} ?>
										<option value="<?php echo $item->nilai_parameter; ?>">(<?php echo $item->nilai_parameter;?>)&nbsp<?php echo $item->nama_parameter;?></option>
										<?php endforeach;?>
									</select>
									</div>
									<?php endforeach ?>
								</div>
							
							<div class="box-footer">
								<button type="submit" class="btn btn-primary " name="createalternatif" value="createalternatif">Simpan
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