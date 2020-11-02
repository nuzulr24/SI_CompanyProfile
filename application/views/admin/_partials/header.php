 <!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title><?= $title ?></title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>

		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/bootstrap94be.css?1422823238" />

		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/materialadminb0e2.css?1422823243" />

		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/font-awesome.min753e.css?1422823239" />

		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/material-design-iconic-font.mine7ea.css?1422823240" />


		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/libs/rickshaw/rickshawd56b.css?1422823372" />

		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/libs/morris/morris.core5e0a.css?1422823370" />
	
		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/libs/DataTables/jquery.dataTablesdee9.css?1422823365" />

		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/libs/DataTables/extensions/dataTables.colVis941e.css?1422823421" />

		<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/modules/materialadmin/css/theme-default/libs/DataTables/extensions/dataTables.tableTools4029.css?1422823422" />

	</head>

	<body class="menubar-hoverable header-fixed ">
		<!-- BEGIN HEADER-->
	<header id="header" >
<div class="headerbar">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="headerbar-left">
		<ul class="header-nav header-nav-options">
			<li class="header-nav-brand" >
				<div class="brand-holder">
					<a href="admin/dashboard">
						<span class="text-lg text-bold text-primary">ADMINISTRATOR</span>
					</a>
				</div>
			</li>
			<li>
				<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
					<i class="fa fa-bars"></i>
				</a>
			</li>
		</ul>
	</div>

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