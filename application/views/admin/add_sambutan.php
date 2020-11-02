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
				<h2 class="text-primary">Tentang Kami</h2>
			</div>
			<div class="section-body">

				<!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
				<div class="card">
					<div class="card-body">
						<form class="form-horizontal" role="form" action="<?= base_url('administrator/sambutan'); ?>" method="post" enctype="multipart/form-data">
							<input type="text" id="id" name="id" hidden>
							<div class="form-group" style="margin-bottom: 20px;">
								<label for="nama_barang" class="col-sm-2 control-label">Deskripsi</label>
								<div class="col-sm-10">
									<textarea  class="form-control" id="jenis" name="jenis" placeholder="Deskripsi"><?= $sambutans; ?></textarea>
									<?= form_error('jenis','<div class="bg-info text-dark"><small>','</small></div>'); ?>
								</div>
							</div>

							<div class="form-layout-footer" style="float: right;">
								<button type="submit" class="btn btn-primary bd-0">Ubah Data</button>
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
			