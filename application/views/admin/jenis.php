<!-- BEGIN BASE-->
<div id="base">
	<!-- BEGIN OFFCANVAS LEFT -->
	<div class="offcanvas">
	</div>
	<!--end .offcanvas-->
	<!-- END OFFCANVAS LEFT -->

	<!-- BEGIN CONTENT-->
	<div id="content">
		<section class="style-default-bright">
			<div class="section-header">
				<h2 class="text-primary">Data Jenis Foto</h2>
			</div>
			<div class="section-body">

				<!-- BEGIN DATATABLE 1 -->

				<div class="row">
					<div class="col-md-8">
						<a data-target="#tambahJenis" data-toggle="modal" class="btn ink-reaction btn-raised btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus"></i> Tambah Jenis</a>

						<div class="modal fade" id="tambahJenis">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Jenis Baru</h4>
										</div>
										<form class="form-horizontal" method="post" action="<?php echo base_url();?>administrator/jenis/tambah">
											<div class="modal-body">
												<div class="form-group" hidden>
													<input type="text" name="id" id="id">
												</div>

												<div class="form-group">&ensp;
													<label for="jenis">Jenis Foto:</label>
													<input type="text" class="form-control" name="jenis" id="jenis" required>
												</div>
											</div>
											
											<div class="modal-footer">
												<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
												<button class="btn btn-primary">Simpan</button>
											</div>
										</form>
									</div>            
								</div>        
							</div>

						</div>
						<!--end .col -->
					</div>
					<!--end .row -->

					<div class="row">
						<div class="card">
							<div class="card-body">
								<div class="col-lg-12">
									<div class="table-responsive">
										<table id="datatable1" class="table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Jenis</th>
													<th>Menu</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$i=1;
												foreach ($jenis as $j) {
													?>
													<tr>
														<td>
															<?= $i++ ?>
														</td>
														<td>
															<?= $j['jenis'] ?>
														</td>
														<td>
															<a href="<?= base_url(); ?>administrator/jenis/hapus/<?= $j['jenis'] ?>" class="btn btn-outline-danger btn-icon rounded-circle tombol-hapus" title="Hapus Produk">
																<div><i class="fa fa-close"></i></div>
															</a>
														</td>
													</tr>
													<?php
												} ?>
											</tbody>
										</table>
									</div>
									<!--end .table-responsive -->
								</div>
								<!--end .col -->

							</div>

						</div>
					</div>
					<!--end .row -->
					<!-- END DATATABLE 1 -->

					<hr class="ruler-xxl" />

				</div>
				<!--end .section-body -->
			</section>
		</div>
		<!--end #content-->
		<!-- END CONTENT -->

		<!-- BEGIN MENUBAR-->
		<div id="menubar" class="menubar-inverse ">
			<div class="menubar-fixed-panel">
				<div>
					<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
						<i class="fa fa-bars"></i>
					</a>
				</div>
				<div class="expanded">
					<a href="dashboard.html">
						<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
					</a>
				</div>
			</div>
			<div class="menubar-scroll-panel">
				<!-- BEGIN MAIN MENU -->

				<ul id="main-menu" class="gui-controls">
					<!-- BEGIN DASHBOARD -->
					<li>
						<a href="<?= base_url();?>administrator/dashboard">
							<div class="gui-icon"><i class="md md-home"></i></div>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<!--end /menu-li -->
					<!-- END DASHBOARD -->

					<!-- BEGIN TABLES -->
					<li class="gui-folder">
						<a class="active">
							<div class="gui-icon"><i class="fa fa-table"></i></div>
							<span class="title">Data</span>
						</a>
						<!--start submenu -->
						<ul>
							<li><a href="<?= base_url(); ?>administrator/produk"><span class="title">Unggah Foto</span></a></li>
							<li><a href="#" class="active"><span class="title">Kategori Foto</span></a></li>

						</ul>
						<!--end /submenu -->
					</li>

				</ul>
				<!--end .main-menu -->
				<!-- END MAIN MENU -->

				
