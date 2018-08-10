<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page->title; ?></title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	<link href='//fonts.googleapis.com/css?family=Lusitana:400,700|Quattrocento:400,700' rel='stylesheet' type='text/css' />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/modern-business.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />

	<script src="<?php echo $config->urls->templates?>scripts/bootstrap.bundle.min.js" charset="utf-8"></script>
    <script src="<?php echo $config->urls->templates?>scripts/bootstrap.min.js" charset="utf-8"></script>
    <script src="<?php echo $config->urls->templates?>scripts/main.js" charset="utf-8"></script>
</head>

<?php

if ($page->template->name != 'request-demo' && $page->template->name != 'post_form') {
	include('./nav.php');
}

?>
