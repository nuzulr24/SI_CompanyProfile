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
			  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-4">Mari berkenalan dengan kami</h1>
  <div class="row">
  <?php foreach ($jadwal as $j): ?>
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="<?= base_url(); ?>upload/fasilitas/<?= $j['photo']; ?>" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0"><?= $j['nama']; ?></h5>
          <div class="card-text text-black-50"><?= $j['jabatan']; ?></div>
        </div>
      </div>
	</div>
  <?php endforeach; ?>
  </div>
  <!-- /.row -->

</div>
			  
  		</div>
  		<!-- /.container-fluid -->

  	</div>
  	<!-- End of Main Content -->
