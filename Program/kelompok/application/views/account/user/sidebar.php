<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url('assets'); ?>/img/21120116130048.jpg" alt="fahmi" class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample">
								<span>
								<?php echo $this->session->userdata['name']; ?>
									<span class="user-level"><?php echo $this->session->userdata['level']; ?></span>
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item <?php if($view_name=='account/user/dashboard'){echo 'active';}?>">
							<a  href="<?= base_url('user'); ?>">
								<i class="fas fa-home"></i>
								<p>Beranda</p>
							</a>
						</li>
						<li class="nav-item <?php if($view_name=='kriteria/kriteria' || $view_name=='alternatif/alternatif' || $view_name=='nilai/nilai'){echo 'active';}?>">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-chart-bar"></i>
								<p>Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse<?php if($view_name=='kriteria/kriteria' || $view_name=='alternatif/alternatif' || $view_name=='nilai/nilai'){echo'.show';}?>" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url('kriteria'); ?>">
											<span class="sub-item">Kriteria</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('alternatif'); ?>">
											<span class="sub-item">Alternatif</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('nilai'); ?>">
											<span class="sub-item">Nilai</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item <?php if($view_name=='hitung/hitung'){echo 'active';}?>">
							<a  href="<?= base_url('hitung'); ?>">
								<i class="fas fa-layer-group"></i>
								<p>Perhitungan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse<?php if($view_name=='hitung/hitung'){echo'.show';}?>" id="perhitungan">
								<ul class="nav nav-collapse">
									<li>
										<a onclick="ShowDiv(1)">
											<span class="sub-item">Nilai</span>
										</a>
									</li>
									<li>
										<a onclick="ShowDiv(2)">
											<span class="sub-item">Normalisasi</span>
										</a>
									</li>
									<li>
										<a onclick="ShowDiv(3)">
											<span class="sub-item">Pembobotan</span>
										</a>
									</li>
									<!-- <li>
										<a onclick="ShowDiv(4)">
											<span class="sub-item">Corcondace</span>
										</a>
									</li>
									<li>
										<a onclick="ShowDiv(5)">
											<span class="sub-item">Disordance</span>
										</a>
									</li>
									<li>
									<a onclick="ShowDiv(6)">
											<span class="sub-item">Matriks C </span>
										</a>
									</li>
									<li>
									<a onclick="ShowDiv(7)">
											<span class="sub-item">Matriks D</span>
										</a>
									</li>
									<li>
									<a onclick="ShowDiv(8)">
											<span class="sub-item">Matriks Dominan C</span>
										</a>
									</li>
									<li>
									<a onclick="ShowDiv(9)">
											<span class="sub-item">Matriks Dominan D</span>
										</a>
									</li>
									<li>
									<a onclick="ShowDiv(10)">
											<span class="sub-item">Agregat Matriks E</span>
										</a>
									</li> -->
								</ul>
							</div>
						</li>
						<li class="nav-item <?php if($view_name=='hitung/nilaiahir'){echo 'active';}?>">
							<a  href="<?= base_url('nilaiAhir'); ?>">
								<i class="fas fa-list-ol"></i>
								<p>Nilai Ahir</p>
							</a>
						</li>
						<li class="nav-item <?php if($view_name=='account/map'){echo 'active';}?>">
							<a  href="<?= base_url('map'); ?>">
								<i class="fas fa-map"></i>
								<p>Peta</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>