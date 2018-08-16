<?php include('./_head.php'); ?>

	<header>
		<div id="header-carousel" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
		      <li data-target="#header-carousel" data-slide-to="1"></li>
		      <li data-target="#header-carousel" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner">
		      <div class="carousel-item bg-success active">
				<div class="carousel-caption d-none d-md-block">
				    <h5>Headline</h5>
				    <p>Caption</p>
				  </div>
		      </div>
		      <div class="carousel-item bg-warning">
				<div class="carousel-caption d-none d-md-block">
					<h5>Headline</h5>
				    <p>Caption</p>
				  </div>
		      </div>
		      <div class="carousel-item bg-info">
				<div class="carousel-caption d-none d-md-block">
					<h5>Headline</h5>
				    <p>Caption</p>
				  </div>
		      </div>
		    </div>
		    <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
	</header>

    <!-- Page Content -->
    <div class="container">

      <!-- Marketing Icons Section -->
      <div class="row mt-5 mb-4">
		<div class="col-lg-3 mt-3 mb-4 text-center">
  			<i class="fa fa-handshake-o fa-5x text-info" aria-hidden="true"></i>
  			<h4 class="mt-5"><strong>Quality Support</strong></h4>
  			<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="col-lg-3 mt-3 mb-4 text-center">
  			<i class="fa fa-line-chart fa-5x text-info" aria-hidden="true"></i>
  	  		<h4 class="mt-5"><strong>Generate Reports</strong></h4>
  	  		<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="col-lg-3 mt-3 mb-4 text-center">
  			<i class="fa fa-cogs fa-5x text-info" aria-hidden="true"></i>
  	  		<h4 class="mt-5"><strong>Always Working</strong></h4>
  	  		<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  	    </div>
  		<div class="col-lg-3 mt-3 mb-4 text-center">
  			<i class="fa fa-diamond fa-5x text-info" aria-hidden="true"></i>
  	  		<h4 class="mt-5"><strong>Customer Service</strong></h4>
  	  		<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
      <!-- /.row -->
  	</div>

	<div class="container-fluid">
		<div class="row bg-warning my-5">
  		  <!-- Call to Action Section -->
  			<div class="col-md-12 my-5">
				<h2 class="text-center"><strong>Headline for Demo Request</strong></h2>
				<p class="text-center my-4">This is testing what this button can do. Request a demo. This is testing what this button can do. Request a demo.</br>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<div class="mx-auto" style="width: 400px;">
					<a class="btn btn-lg btn-info btn-block" href="<?php echo $pages->get('template=request-demo')->url; ?>" target="_blank">Request a Demo</a>
				</div>
  			</div>
  	  </div>
	</div>


	<div class="container">
	  <!-- Features Section -->
	  <div class="row mt-4 mb-4">
		<div class="col-lg-6">
		  <h2>Features</h2>
		  <p>This software package includes:</p>
		  <ul>
			<li>
			  <strong>Bootstrap v4</strong>
			</li>
			<li>jQuery</li>
			<li>Font Awesome</li>
			<li>Working contact form with validation</li>
			<li>Unstyled page elements for easy customization</li>
		  </ul>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
		</div>
		<div class="col-lg-6">
		  <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
		</div>
	  </div>
	  <!-- /.row -->

    </div>
    <!-- /.container -->

	<script type="text/javascript">
		$('#header-carousel').carousel({});
	</script>

<?php include('./_foot.php'); ?>
