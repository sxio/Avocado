<?php
	if($this->session->userdata('EXPIRE') != null && (time() - $this->session->userdata('EXPIRE') > 3600)){
		redirect('logout/log_out');
	}
	if($this->session->userdata('username') != null){
		$this->session->set_userdata('EXPIRE', time());
	}
?>
<?php echo link_tag('assets/css/bootstrap.min.css') ?>
	<?php echo link_tag('assets/css/font-awesome.min.css') ?>
	<?php echo link_tag('assets/css/main.css') ?>
	<?php echo link_tag('assets/css/footer.css') ?>
	<?php echo link_tag('assets/img/avocado.png', 'shortcut icon', 'image/ico') ?>
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<!-- Include jQuery Popup Overlay -->
	<script src="<?php echo base_url('assets/js/jquery.popupoverlay.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/numeral.min.js'); ?>"></script>
	<script type="text/javascript">var baseUrl = "<?php echo base_url(); ?>";</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- HEADER END -->
