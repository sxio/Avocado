<?php if($this->session->tempdata('username') != NULL) redirect() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Forgot Password</title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/forgotPassword.css'); ?>
	<script src="<?php echo base_url('assets/js/user.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body id="bckimg">
	<?php echo $nav; ?>
	<div class="container" id="fpass_wrapper">
		<!-- pasang form -->
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="text-center">Reset Your Password</h3>
					</div>
					<div class="panel-body text-center">
						<h5>Enter your email address and we will send you a link to reset your password.</h5>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-success form-control"><i class="fa fa-check fa-fw"></i> Submit</button>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>