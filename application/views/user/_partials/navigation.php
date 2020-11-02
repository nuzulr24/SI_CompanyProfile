<!--=============================================
=            navigation menu         =
=============================================-->

<div class="navigation-menu">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-12 col-lg-3 col-md-12 col-sm-12">
				<!--=======  category menu  =======-->

				<div class="hero-side-category">
					<!-- Category Toggle Wrap -->
					<div class="category-toggle-wrap">
						<!-- Category Toggle -->
						<button class="category-toggle"> <i class="fa fa-bars"></i> CATEGORIES </button>
					</div>

					<!-- Category Menu -->
					<nav class="category-menu">
						<ul>
							<li><a href="shop-left-sidebar.html">Sofas &amp; Chairs</a></li>
							<li class="menu-item-has-children"><a href="shop-left-sidebar.html">Drawing Room</a>
								<!-- category submenu -->
								<ul class="category-mega-menu">
									<li><a href="shop-left-sidebar.html">Sofas</a></li>
									<li><a href="shop-left-sidebar.html">Armchairs</a></li>
									<li><a href="shop-left-sidebar.html">Dining Chairs &amp; Benches</a></li>
									<li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="shop-left-sidebar.html">Dinning Room</a>
								<!-- category submenu -->
								<ul class="category-mega-menu">
									<li><a href="shop-left-sidebar.html">Sofas</a></li>
									<li><a href="shop-left-sidebar.html">Armchairs</a></li>
									<li><a href="shop-left-sidebar.html">Dining Chairs &amp; Benches</a></li>
									<li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
								</ul>
							</li>
							<li><a href="shop-left-sidebar.html">Out Door Room</a></li>
							<li><a href="shop-left-sidebar.html">Room living</a></li>
							<li><a href="shop-left-sidebar.html">Estilo</a></li>
							<li><a href="shop-left-sidebar.html">Living Chairs</a></li>
							<li class="hidden"><a href="shop-left-sidebar.html">New Sofas</a></li>
							<li class="hidden"><a href="shop-left-sidebar.html">Sleight Sofas</a></li>
							<li><a href="#" id="more-btn">... More</a></li>
						</ul>
					</nav>
				</div>

				<!--=======  End of category menu =======-->

				<!--=======  sticky logo  =======-->

				<div class="sticky-logo">
					<a href="index.html">
						<img src="assets/images/logo.png" class="img-fluid" alt="">
					</a>
				</div>

				<!--=======  End of sticky logo  =======-->

				<!--=======  search icon for tablet  =======-->

				<div class="search-icon-menutop-tablet text-right d-inline-block d-lg-none">
					<a href="#" id="search-overlay-active-button">
						<i class="icon ion-md-search"></i>
					</a>
				</div>

				<!--=======  End of search icon for tablet  =======-->
			</div>
			<div class="col-12 col-lg-6">
				<!-- navigation section -->
				<div class="main-menu">
					<nav>
						<ul>
							<li class="<?= active_link('home'); ?> menu-item"><a href="<?= base_url('home'); ?>">HOME</a></li>
							<li class="<?= active_link('product'); ?> menu-item"><a href="<?= base_url(); ?>product">PRODUCT</a></li>
							<li class="<?= active_link('contact'); ?> menu-item"><a href="<?= base_url(); ?>contact">CONTACT</a></li>
							<li class="<?= active_link('about'); ?> menu-item"><a href="<?= base_url(); ?>about">About Us</a></li>
						</ul>
					</nav>
				</div>
				<!-- end of navigation section -->
			</div>
			<div class="col-12 col-lg-3">
				<!--=======  navigation search bar  =======-->

				<div class="navigation-search d-none d-lg-block">
					<input type="search" placeholder="Search product ...">
					<button><i class="icon ion-md-search"></i></button>
				</div>

				<!--=======  End of navigation search bar  =======-->
			</div>
			<div class="col-12 d-block d-lg-none">
				<!-- Mobile Menu -->
				<div class="mobile-menu"></div>
			</div>
		</div>
	</div>
</div>

<!--=====  End of navigation menu  ======-->

</div>
