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
  			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  				<div class="carousel-inner">
  				    <?php
  				    foreach($slide as $list_slide) {
  				    ?>
  					<div class="carousel-item active">
  						<img src="<?= base_url(); ?>upload/banner/<?= $list_slide['thumbnail'] ?>" class="d-block h-50 w-100" alt="Slide">
  					</div>
  					<?php
  				    }
  				    ?>
  				</div>
  				<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
  					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
  					<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
  					<span class="carousel-control-next-icon" aria-hidden="true"></span>
  					<span class="sr-only">Next</span>
  				</a>
  			</div>
  			<hr class="style-eight">
  			<div class="card mb-3 mt-4" style="max-width: 450px;">
  				<div class="row no-gutters">
  					<div class="col-md-4">
  						<img style="height: 300px" src="<?= base_url(); ?>upload/banner/<?= $photo ?>" class="card-img" alt="...">
  					</div>
  					<div class="col-md-8">
  						<div class="card-body text-center">
  							<h3 class="card-title"><b><?= $nama ?></b>
  							</br><small><?= $jabatan ?></small></h3>
  							<p><blockquote class="blockquote"><?= $caption ?></blockquote></p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!-- /.container-fluid -->

  	</div>
  	<!-- End of Main Content -->
