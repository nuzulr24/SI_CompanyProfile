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
				<h2 class="text-primary">Data Penerbangan</h2>
			</div>
			<div class="section-body">

				<!-- BEGIN DATATABLE 1 -->

				<div class="row">
					<div class="col-md-8">
						<a href="<?= base_url(); ?>administrator/jadwal/tambah" class="btn ink-reaction btn-raised btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus"></i> Tambah Data</a>
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
												<th>Kategori</th>
												<th>Nama Pesawat</th>
												<th>Jam Berangkat</th>
												<th>Jam Tiba</th>
												<th>Tujuan</th>
												<th>Menu</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i=1;
											foreach ($customers as $c) {
												?>
												<tr>
													<td>
														<?= $i++ ?>
													</td>
													<td>
														<?= $c['kategori'] ?>
													</td>
													<td>
														<?= $c['nama_pesawat'] ?>
													</td>
													<td>
														<?= $c['jam_berangkat'] ?>
													</td>
													<td>
														<?= $c['jam_tiba'] ?>
													</td>
													<td>
														<?= $c['tujuan'] ?>
													</td>
													<td>
														<a href="<?= base_url(); ?>administrator/jadwal/detail/<?= $c['id'] ?>" class="modal-effect btn btn-outline-primary btn-icon rounded-circle" data-toggle="modal" data-effect="effect-fall" title="Detail Customers">
															<div><i class="fa fa-info"></i></div>
														</a>
														<a href="<?= base_url(); ?>administrator/jadwal/hapus/<?= $c['id'] ?>" class="btn btn-outline-danger btn-icon rounded-circle tombol-hapus" title="Delete Customer">
															<div><i class="fa fa-close"></i></div>
														</a>
													</td>
												</tr>
											<?php } ?>
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
