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
				<h2 class="text-primary">Data</h2>
			</div>
			<div class="section-body">

				<!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
				<div class="card">
					<div class="card-body">
						<form class="form-horizontal" role="form" action="<?= base_url('administrator/jadwal/tambah'); ?>" method="post">
							<div class="form-group" style="margin-bottom: 20px;">
								<label for="nama_barang" class="col-sm-2 control-label">Nama Pesawat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Pesawat" value="<?= set_value('nama_barang') ?>">
									<?= form_error('nama_barang','<div class="bg-info text-dark"><small>','</small></div>'); ?>
								</div>
							</div>
							<div class="form-group" style="margin-bottom: 20px;">
								<label for="kategori" class="col-sm-2 control-label">Kategori</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="kategori" name="kategori" placeholder="eg: Transit atau Langsung" value="<?= set_value('kategori') ?>">					
									<?= form_error('kategori','<div class="bg-info text-dark"><small>','</small></div>'); ?>
								</div>
							</div>
							<div class="form-group" style="margin-bottom: 20px;">
								<label for="nama_barang" class="col-sm-2 control-label">Jam Berangkat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="jam_berangkat" name="jam_berangkat" placeholder="Jam Berangkat" value="<?= set_value('jam_berangkat') ?>">
									<?= form_error('jam_berangkat','<div class="bg-info text-dark"><small>','</small></div>'); ?>
								</div>
							</div>
							<div class="form-group" style="margin-bottom: 20px;">
								<label for="nama_barang" class="col-sm-2 control-label">Jam Tiba</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="jam_tiba" name="jam_tiba" placeholder="Jam Tiba" value="<?= set_value('jam_tiba') ?>">
									<?= form_error('jam_tiba','<div class="bg-info text-dark"><small>','</small></div>'); ?>
								</div>
							</div>
							<div class="form-group" style="margin-bottom: 20px;">
								<label for="nama_barang" class="col-sm-2 control-label">Tujuan</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan" value="<?= set_value('tujuan') ?>">
									<?= form_error('tujuan','<div class="bg-info text-dark"><small>','</small></div>'); ?>
								</div>
							</div>

							<div class="form-layout-footer" style="float: right;">
								<button type="submit" class="btn btn-primary bd-0">Tambah Data</button>
								<a href="javascript:window.history.back()" class="btn btn-secondary bd-0">Cancel</a>
							</form>
						</div>
						<!--end .card-body -->
					</div>
					<!--end .card -->
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
