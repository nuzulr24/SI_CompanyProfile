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
  			<div class="row">
  				<div class="col-md-12">
  					<div class="alert alert-info"><b>Selamat Datang!</b> Berikut adalah Jadwal Penerbangan (Update)
  						hari ini.</br>
						Bagi anda yang belum tahu akan <b>Panduan Bandara</b> maupun <b>Informasi Lainnnya</b> Anda dapat meng-unduh panduan berikut secara langsung
						dibawah ini<hr>
						<?php $i = 0; $i++; foreach($panduan as $f): ?>
						<?= $f['id'] ?> : <a href="<?= $f['file'] ?>"><?= $f['title'] ?></a></br>
						<?php endforeach; ?>
  					</div>
  				</div>
  					<?php foreach ($jadwal as $j): ?>
  					<div class="col-md-5 mb-3">
  						<div class="card">
  							<div class="card-body">
  								<h5 class="card-title">Menuju <b><?= $j['tujuan']; ?></b></h5>
  								<p class="card-text">Berangkat : <?= $j['jam_berangkat']; ?></br>
  									Tiba : <?= $j['jam_tiba']; ?></br>
  									<small>Status :
  										<b><?= strtoupper($j['kategori']); ?></b></small></p>
  							</div>
  						</div>
  					</div>
  					<?php endforeach; ?>
  				</div>
  			</div>
  			<!-- /.container-fluid -->

  		</div>
  		<!-- End of Main Content -->
