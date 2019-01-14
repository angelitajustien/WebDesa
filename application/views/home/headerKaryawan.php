<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
<title>Karyawan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url()."assets/"; ?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()."assets/"; ?>css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/font.css" type="text/css"/>
<link href="<?php echo base_url()."assets/"; ?>css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/monthly.css">

<!-- //calendar -->
<!-- //font-awesome icons -->

<!-- Data Table -->
<link rel="stylesheet" href="<?php echo base_url()."assets/" ?>css/jquery.dataTables.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>

<script src="assets/js/jquery2.0.3.min.js"></script>
<script src="assets/js/raphael-min.js"></script>
<script src="assets/js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="" class="logo">
        Karyawan
    </a>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a href="<?php echo site_url('login')?>">
                <img alt="" src="<?php echo base_url()."assets/images/exit.png"; ?>">
                <span class="username">Exit</span>
            </a>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="<?php echo base_url('home')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Tambah Data</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('/pelanggan')?>">Tambah Pelanggan</a></li>
                    </ul>
                </li>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>