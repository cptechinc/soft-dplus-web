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
	                  <h1 class="display-2 font-weight-bold">All-in-one Business Solution</h1>
	                  <p>DistributionPlus is the answer to all of your business needs. This is testing what this button can do. Request a demo. This is testing what this button can do. Request a demo.</p>
					  <p>Here's one point we highlight.</br>Here's another point we can highlight.</p>
	                  <p><a class="btn btn-lg btn-info pull-right" href="#" role="button">Sign up today</a></p>
	                </div>
	              </div>
	            </div>
		      <div class="carousel-item bg-success">
				  <div class="container">
	  				  <div class="carousel-caption text-left pb-5">
	  					<h1 class="display-2 font-weight-bold">Another Point</h1>
	  					<p>DistributionPlus is the answer to all of your business needs. This is testing what this button can do. Request a demo.</br>This is testing what this button can do. Request a demo.
							DistributionPlus is the answer to all of your business needs. This is testing what this button can do. Request a demo. This is testing what this button can do. Request a demo.</p>
	  				  </div>
	  				</div>
		      </div>
		      <div class="carousel-item bg-info">
				  <div class="container">
	  				  <div class="carousel-caption text-left pb-5">
	  					<h1 class="display-2 font-weight-bold">Something Else</h1>
	  					<p>DistributionPlus is the answer to all of your business needs. This is testing what this button can do. Request a demo. This is testing what this button can do. Request a demo.</p>
	  					<p>Here's one point we highlight.</br>Here's another point we can highlight.</p>
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
