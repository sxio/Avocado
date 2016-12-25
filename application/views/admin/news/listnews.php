<!DOCTYPE html>
<html>
<head>
	<title>Admin | List News</title>
	<?php echo $admin_header; ?>

	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>

</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-news'); ?>">Manage News</a></li>
			<li><a href="<?php echo base_url('admin/news/editnews'); ?>">Edit News</a></li>
			<li class="active">List News</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<?php foreach($lists as $list){ ?>
				<div class="well well-sm">
					<a href="<?php echo base_url('admin/news/editnews/'.$list['NEWS_ID']); ?>"><h3><?php echo $list['NEWS_TITLE']; ?></h3></a>
					<span class="label label-default"><?php echo nice_date($list['NEWS_DT'], 'd F Y'); ?></span>
					<p><?php echo word_limiter($list['NEWS_CONTENT'], 50); ?></p>
				</div>
			<?php }; ?>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>