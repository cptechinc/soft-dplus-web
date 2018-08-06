<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Distribution Plus</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $config->urls->templates?>styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $config->urls->templates?>styles/main.css" rel="stylesheet">
    <link href="<?php echo $config->urls->templates?>styles/modern-business.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body class="demo-background" style='background-image: url("<?php echo $page->images->url; ?>")'>

    <!-- Page Content -->
    <div class="container">
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row demo-request">
          <div class="col-sm-6">
              <form name="sentMessage" id="contactForm" class="no-opacity" novalidate>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Name:</label>
                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Company:</label>
                    <input type="text" class="form-control" id="company" required data-validation-required-message="Please enter your company.">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Message:</label>
                    <textarea rows="3" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                  </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
              </form>
          </div>
          <div class="col-sm-6">
              <div class="demo-info">
                  <h4><strong>Make your software work for you again.</strong></h4></br>
                  <p>DistributionPlus is a complete ERP system that uses integrations, so you don't have to work around your system with manual processes to make it work correctly.</p>
                  <p><strong>With DistributionPlus you will receive:</strong></p>
                  <p><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Software that fits the way that you do business</br>
                  <i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Rapid implementation</br>
                  <i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Software that grows with you</br>
                  <i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;No duplicate tasks, because processes are integrated</br>
                  <i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Your choice of a hosted (cloud) or premise based system</p>
                  <p>See why distributors consider DistributionPlus to be the complete solution for their business.</p>
              </div>
          </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
