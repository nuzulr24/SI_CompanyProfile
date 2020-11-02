	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="headerbar-right">

		<ul class="header-nav header-nav-profile">
			<li class="dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
					<img src="<?= base_url(); ?>assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" />
					<span class="profile-info">
						<?= $user_session['nama']; ?>
						<small>Administrator</small>
					</span>
				</a>
				<ul class="dropdown-menu animation-dock">
					<li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
				</ul><!--end .dropdown-menu -->
			</li><!--end .dropdown -->
		</ul><!--end .header-nav-profile -->
	</div><!--end #header-navbar-collapse -->
</div>
</header>
<!-- END HEADER-->

<!-- BEGIN BASE-->
<div id="base">
	<!-- BEGIN OFFCANVAS LEFT -->
	<div class="offcanvas">
	</div><!--end .offcanvas-->
	<!-- END OFFCANVAS LEFT -->

	<!-- BEGIN CONTENT-->
	<div id="content">

		<section>
			<div class="section-body">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<h4 class="text-center">Selamat Datang di Halaman Administrator</h4>
								Website ini dibentuk guna mempermudah dalam pengaturan suatu Aplikasi.
							</div>
						</div>
					</div>
				</div><!--end .row -->
				<div class="row">

				</div><!--end .row -->
			</div><!--end .section-body -->
		</section>

	</div><!--end #content-->
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
