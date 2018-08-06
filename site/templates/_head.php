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

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
	<a class="navbar-brand" href="<?= $pages->get('/')->url; ?>">DistributionPlus</a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	  <ul class="navbar-nav ml-auto">
		<?php
			// top navigation consists of homepage and its visible children
			$homepage = $pages->get('/');
			$children = $homepage->children();

			// make 'home' the first item in the navigation
			$children->prepend($homepage);
		?>
		<?php foreach ($homepage->and($homepage->children) as $child) : ?>
			<?php if ($child !== $pages->get('/')) : ?>
				<?php if ($child !== $pages->get('template=request-demo')) : ?>
					<li class="nav-item">
					  <a class="nav-link" href="<?= $child->url; ?>"><?= $child->title; ?></a>
					</li>
				<?php else : ?>
					<li class="nav-item ml-2">
					  <a class="nav-link btn-sm btn-danger" href="<?= $child->url; ?>" target="_blank"><?= $child->title; ?></a>
					</li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	  </ul>
	</div>
  </div>
</nav>
