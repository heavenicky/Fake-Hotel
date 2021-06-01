<!DOCTYPE html>
<html>
<head>
	<title>FakeHotel</title>
	<nav class="navbar navbar-expand-lg navbar-custom nav-link" style="margin-top: 0">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/register_style.css">
	<link href="<?= base_url('assets/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/bootstrap.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="<?= base_url('assets/');?><?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
  	<script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body style="background-color: white">
	<a class="navbar-brand">
	<?php 
		echo 'Welcome, ' . $user['namadepan'];
	?>
	</a>
	<div class="navbar-nav ml-auto nav-link">
 		<a class="nav-item nav-link" href="<?= base_url('user');?>">Home </a>
 		<a class="nav-item nav-link" href="<?= base_url('user/history');?>">History</a>
        <a class="nav-item nav-link" href="<?= base_url('user/profile');?>">Profile</a>
        <a class="nav-item nav-link" href="<?= base_url('login/logout');?>">Logout</a>
      </div>
    </div>
 </nav>



