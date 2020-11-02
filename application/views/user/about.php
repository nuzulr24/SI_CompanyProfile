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
  				<div class="col-md-6">
  					<h4>Tentang Kami</h4>
  					<div class="card">
  						<div class="card-body">
  							<?php
					foreach ($profile as $key ) {
						echo $key['deskripsi'];
					}
							  ?>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-6">
  					<h4>Kontak Kami</h4>
  					<div class="card">
  						<div class="card-body">
  							Anda dapat menghubungi kami melalui kontak yang tertera dibawah ini : </br>
  							<ul class="list-group">
							  <?php foreach($kontak as $c): ?>
  								<li class="list-group-item"><b>Facebook</b> : <?= $c['facebook'] ?></li>
								<li class="list-group-item"><b>Telepon</b> : <?= $c['telepon'] ?></li>
								<li class="list-group-item"><b>Whatsapp</b> : <?= $c['whatsapp'] ?></li>
								<li class="list-group-item"><b>Email</b> : <?= $c['email'] ?></li>
							  <?php endforeach; ?>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</div>

  		</div>
  		<!-- /.container-fluid -->

  	</div>
  	<!-- End of Main Content -->
