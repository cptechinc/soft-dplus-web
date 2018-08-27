<?php $page->htmlbodyattributes = $page->bootstrap->generate_attributes("class=demo-background|style=background-image: url('{$page->images->url}')"); ?>
<?php include('./_head-blank.php'); ?>
    <!-- Page Content -->
    <div class="container page">
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row demo-request">
          <div class="col-sm-6">
              <form action="<?= $pages->get('template=post_form')->url; ?>" method="post">
                  <input type="hidden" name="action" value="request-demo">
                  <input type="hidden" name="requestdemo" value="Y">
                  <input type="hidden" name="updated" value="<?= date("Y-m-d G:i:s"); ?>">
                  <div class="control-group form-group">
                  	  <div class="controls">
	                      <label>Name:</label>
	                      <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
	                      <p class="help-block"></p>
                  	  </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Email:</label>
                    	  <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                  	  </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Company:</label>
                    	  <input type="text" class="form-control" name="company" required data-validation-required-message="Please enter your company.">
                    	  <p class="help-block"></p>
                  	  </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Phone Number:</label>
                          <input type="tel" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number.">
                      </div>
                  </div>
                  <button type="submit" class="btn btn-info">Request a Demo</button>
              </form>
          </div>
          <div class="col-sm-6">
              <div class="demo-info">
                  <h4><strong>Make your software work for you again.</strong></h4></br>
                  <p><?= $appconfig->site_displayname; ?> is a complete integrated software solution reducing your need for multiple vendors to take care
                  of your business goals.</p>
                  <p><strong>With <?= $appconfig->site_displayname; ?> you will receive:</strong></p>
                  <p><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&nbsp;&nbsp;Software that fits the way that you do business</br>
                  <i class="fa fa-check-circle-o green" aria-hidden="true"></i>&nbsp;&nbsp;Rapid implementation</br>
                  <i class="fa fa-check-circle-o green" aria-hidden="true"></i>&nbsp;&nbsp;Software that grows with you</br>
                  <i class="fa fa-check-circle-o green" aria-hidden="true"></i>&nbsp;&nbsp;No duplicate tasks, because processes are integrated</br>
                  <i class="fa fa-check-circle-o green" aria-hidden="true"></i>&nbsp;&nbsp;Your choice of a hosted (cloud) or premise based system</p>
                  <p>See why distributors consider <?= $appconfig->site_displayname; ?> to be the complete solution for their business.</p>
              </div>
          </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include('./_foot-blank.php'); ?>
