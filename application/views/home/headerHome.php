<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Desa Junrejo</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url()."assets/plugins/"; ?>OwlCarousel2-2.2.1/owl.carousel.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()."assets/plugins/"; ?>OwlCarousel2-2.2.1/owl.theme.default.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()."assets/plugins/"; ?>OwlCarousel2-2.2.1/animate.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()."assets/styles/"; ?>main_styles.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()."assets/styles/"; ?>responsive.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()."assets/styles/"; ?>bootstrap4/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()."assets/plugins/"; ?>font-awesome-4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">Desa Junrejo</a></div>
						</div>
						<div class="main_nav_container ml-auto" >

							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="<?php echo base_url('home') ?>">Desa Junrejo</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('about') ?>">Keuangan</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('pricing') ?>">PPID Desa</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('pricing') ?>">Data Desa</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('contact') ?>">Berita</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('contact') ?>">Kontak</a></li>
								
							
							</ul>
						</div>
						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="main_nav_item"><a href="<?php echo base_url('home') ?>">Desa Junrejo</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('about') ?>">Keuangan</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('pricing') ?>">PPID Desa</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('pricing') ?>">Data Desa</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('contact') ?>">Berita</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url('contact') ?>">Kontak</a></li>
			</ul>
		</div>
	</div>