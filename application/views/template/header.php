<!DOCTYPE html>
<html>
<head>
	<title>FakeHotel</title>
	<nav class="navbar navbar-expand-lg navbar-custom nav-link">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/register_style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/bootstrap.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>

	  <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/v4-shims.js"></script>
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>
	<a class="navbar-brand">
	<?php 
		echo 'Welcome, ' . $user['namadepan'];
	?>
	</a>
	<div class="navbar-nav ml-auto nav-link">
        <a class="nav-item nav-link" href="<?= base_url('admin');?>">View</a>
        <a class="nav-item nav-link" href="<?= base_url('admin/add');?>">Add</a>
        <a class="nav-item nav-link" href="<?= base_url('login/logout');?>">Logout</a>
      </div>
    </div>
 </nav>
</body>
</html>
