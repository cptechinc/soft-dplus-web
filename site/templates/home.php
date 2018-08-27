<?php include('./_head.php'); ?>

	<header>
		<div id="header-carousel" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators mt-5">
		        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
		        <li data-target="#header-carousel" data-slide-to="1"></li>
		        <li data-target="#header-carousel" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner mb-5">
				<div class="carousel-item bg-warning active">
	                <div class="container">
	                	<div class="carousel-caption text-left pb-5">
	                  		<h1 class="display-3 font-weight-bold">One System for All</h1>
	                  		<p>No need to purchase other systems to run certain functions </p>
	                  		<p><a class="btn btn-lg btn-info pull-right" href="<?php echo $pages->get('template=request-demo')->url; ?>" role="button">Request a Demo Today</a></p>
	                	</div>
	              	</div>
	            </div>
		      	<div class="carousel-item bg-success">
				    <div class="container">
	  				  	<div class="carousel-caption text-left pb-5">
	  					  	<h1 class="display-3 font-weight-bold">Multiple Methods of Input/Output</h1>
	  					  	<p>eCommerce</br>Sales Portal</br>EDI</br>Dedicated Import and Export Utilities</li>
	  					  	</ul>
	  				 	</div>
	  			  	</div>
		        </div>
		      	<div class="carousel-item bg-info">
				  	<div class="container">
	  				  	<div class="carousel-caption text-left pb-5">
	  						<h1 class="display-3 font-weight-bold">Complete Integration of the Application Suite</h1>
	  				  	</div>
	  				</div>
		      	</div>
		    </div>
		 </div>
	</header>

    <!-- Page Content -->
    <div class="container">

      <!-- Marketing Icons Section -->
      	<div class="row mt-5 mb-4">
			<?php $icons = $page->children; ?>

            <?php foreach ($icons as $icon) : ?>
                <?php if ($icon->template->name == 'data-point') : ?>
				  	<div class="col-lg-3 mt-3 mb-4 text-center">
		  			  	<i class="<?= $icon->icon_code; ?>" style="color: #<?= $icon->sitecolor; ?>" aria-hidden="true"></i>
		  			  	<h4 class="mt-5"><strong><?= $icon->title; ?></strong></h4>
		  				<p class="mt-3"><?=$icon->body; ?></p>
		        	</div>
				<?php endif; ?>
            <?php endforeach; ?>
      	</div>
      <!-- /.row -->
  	</div>

	<div class="container-fluid">
		<div class="row bg-info my-5">
  		  <!-- Call to Action Section -->
  			<div class="col-md-12 my-5">
				<h2 class="text-center text-white"><strong>Headline for Demo Request</strong></h2>
				<p class="text-center text-white my-4">This is testing what this button can do. Request a demo. This is testing what this button can do. Request a demo.</br>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<div class="mx-auto" style="width: 400px;">
					<a class="btn btn-lg btn-warning btn-block" href="<?php echo $pages->get('template=request-demo')->url; ?>" target="_blank">Request a Demo</a>
				</div>
  			</div>
  	  </div>
	</div>


	<div class="container">
	  <!-- Features Section -->
	  	<div class="row mt-4 mb-4">
			<div class="col-lg-12">

				<blockquote class="blockquote text-center">
					<i class="fa fa-smile-o fa-5x text-success" aria-hidden="true"></i>
				    <p class="my-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
					<p class="font-italic text-right">Alan Puder, Northwest Graphic Supply</p>
				</blockquote>
			</div>
	  	</div>
	  <!-- /.row -->

    </div>
    <!-- /.container -->

	<script type="text/javascript">
		$('#header-carousel').carousel({});
	</script>

<?php include('./_foot.php'); ?>
