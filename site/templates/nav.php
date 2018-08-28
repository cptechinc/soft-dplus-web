<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
	    <a class="navbar-brand" href="<?= $pages->get('/')->url; ?>"><?= $appconfig->site_displayname; ?></a>
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
        		    <?php if ($child !== $pages->get('template=request-demo') && $child->template->name !== 'data-point' && $child->template->name !== 'carousel-slide') : ?>
        			    <li class="nav-item">
        			        <a class="nav-link" href="<?= $child->url; ?>"><?= $child->title; ?></a>
        			    </li>
        			<?php elseif ($child->template->name !== 'data-point' && $child->template->name !== 'carousel-slide') : ?>
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
