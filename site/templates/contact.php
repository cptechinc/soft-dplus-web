<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11329.598621215955!2d-93.386095!3d44.772657!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x64f65f8d035537d8!2sCP+Tech!5e0!3m2!1sen!2sus!4v1533098076653"></iframe>

        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3><?= $appconfig->company_name; ?></h3>
          <p><?= $appconfig->company_address; ?></p>
          <p>Phone: <a href="tel:<?= $appconfig->company_phone; ?>"><?= $appconfig->company_phone; ?></a></p>
          <p>Email: <a href="mailto:<?= $appconfig->company_email; ?>"><?= $appconfig->company_email; ?></a></p>
          <p>Hours: <?= $page->hours; ?></p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <p><?= $page->body; ?></p>
          <form action="<?php echo $pages->get('template=post_form')->url; ?>" method="post" name="sentMessage" id="contactForm" novalidate>
            <input type="hidden" name="action" value="contact">
            <input type="hidden" name="requestdemo" value="N">
            <input type="hidden" name="active" value="Y">
            <input type="hidden" name="updated" value="<?= date("Y-m-d G:i:s"); ?>">
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Company:</label>
                <input type="text" class="form-control" name="company" id="company" required data-validation-required-message="Please enter your company.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="5" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include('./_foot.php'); ?>
