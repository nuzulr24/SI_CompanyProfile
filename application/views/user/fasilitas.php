  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

  	<!-- Main Content -->
  	<div id="content">

  		<!-- Topbar -->
  		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  			<!-- Sidebar Toggle (Topbar) -->
  			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  				<i class="fa fa-bars"></i>
  			</button>

  		</nav>
  		<!-- End of Topbar -->

  		<!-- Begin Page Content -->
  		<div class="container-fluid">

  			<!-- Page Heading -->
  			<div class="container">

  				<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Fasilitas Bandara</h1>

  				<hr class="mt-2 mb-5">

  				<div class="row text-center text-lg-left">
				  <?php foreach ($jadwal as $j): ?>
  					<div class="col-lg-3 col-md-4 col-6">
  						<a href="#" class="d-block mb-4 h-100">
  							<img class="img-fluid img-thumbnail" src="<?= base_url(); ?>upload/fasilitas/<?= $j['photo']; ?>"
  								alt="">
  						</a>
					  </div>
				  <?php endforeach; ?>
  				</div>

  			</div>

  		</div>
  		<!-- /.container-fluid -->

  	</div>
  	<!-- End of Main Content -->
