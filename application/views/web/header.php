<?php
$ceks  = $this->session->userdata('prakrin_smk@Proyek-2017');
$level = $this->session->userdata('level@Proyek-2017');

if ($level == 'admin') {
	$cek    = $this->db->get_where('tbl_user', "username='$ceks'")->row();
	$link_nilai = 'users/nilai_praktik';
}elseif ($level == 'pembimbing') {
	$cek    = $this->db->get_where('tbl_pemb', "username='$ceks'")->row();
	$link_nilai = 'users/nilai';
}else{
	$cek    = $this->db->get_where('tbl_siswa', "nis='$ceks'")->row();
	$link_nilai = 'users/nilai_prakerin';
}

$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo base_url();?>"/>
	<title><?php echo $judul_web; ?></title>

	<!-- Global stylesheets -->
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="assets/css/docs.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container" >
	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">SIM PRAKERIN <span class="label bg-success-400">SMK</span></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<!-- <p class="navbar-text"><span class="label bg-success-400">Online</span></p> -->

			<ul class="nav navbar-nav navbar-right">
				<li<?php if($sub_menu == ''){echo' class="active"';} ?>><a href="<?php echo base_url(); ?>">Beranda</a></li>
				<li<?php if($sub_menu == 'info'){echo' class="active"';} ?>><a href="web/info">Informasi</a></li>
				<li<?php if($sub_menu == 'industri'){echo' class="active"';} ?>><a href="web/industri">Industri</a></li>
				<!-- <li<?php if($sub_menu == 'pedoman'){echo' class="active"';} ?>><a href="web/pedoman">Pedoman</a></li> -->
				<?php if ($ceks == ''){ ?>
								<li<?php if($sub_menu == 'login'){echo' class="active"';} ?>><a href="web/login">Masuk</a></li>
				<?php }else{ ?>
								<li class="dropdown dropdown-user">
									<a class="dropdown-toggle" data-toggle="dropdown">
										<img src="foto/default.png" alt="">
										<span><?php echo ucwords($cek->nama_lengkap); ?></span>
										<i class="caret"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="users/profile"><i class="icon-user-plus"></i> Profil</a></li>
										<li><a href="<?php echo $link_nilai; ?>"><i class="icon-star-full2"></i> Nilai</a></li>
										<li class="divider"></li>
										<li><a href="web/logout"><i class="icon-switch2"></i> Keluar</a></li>
									</ul>
								</li>
				<?php } ?>

			</ul>
		</div>
	</div>
	<!-- /main navbar -->


		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Content area -->
					<div class="content">