<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login - Page Login</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				Knowledge Management System				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="signup.html" class="">
							Don't have an account?
						</a>
						
					</li>
					
					<li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Kembali Ke Beranda
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="<?= base_url('auth/login') ?>" method="post">
		
			<center><h1>Member Login</h1></center><br>		
			
			<div class="login-fields">
				
				<p>Silahkan Isikan Info Login...</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="<?=set_value('username'); ?>" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				<?= form_error('username'); ?>

				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="<?=set_value('password'); ?>" placeholder="Password" class="login password-field"/>
				</div> <!-- /password --><br>
				<?= form_error('password'); ?>
				
			</div> <!-- /login-fields -->

				<!-- <?=validation_errors()?> -->
			
  				<?php if ($this->session->flashdata('username_not_register')) : ?>
  					<strong>
  						<?=$this->session->flashdata('username_not_register')?>
  					</strong>
  				<?php elseif ($this->session->flashdata('wrong_password')) : ?>
  					<strong>
  						<?=$this->session->flashdata('wrong_password')?>
  					</strong>
  				<?php elseif ($this->session->flashdata('status_tidak_aktif')) : ?>
  					<strong>
  						<?=$this->session->flashdata('status_tidak_aktif')?>
  					</strong>
  				<?php endif; ?>
			
			<div class="login-actions">
									
				<button class="button btn btn-primary btn-large">Sign In</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="<?= base_url() ?>assets/js/jquery-1.7.2.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.js"></script>

<script src="<?= base_url() ?>assets/js/signin.js"></script>

</body>

</html>
