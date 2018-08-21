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
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?= $page->google_map_code; ?>"></iframe>
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

                <div id="contact_form">
                    <form id="contact-form" action="<?= $page->url; ?>" method="POST">
                        <input type="hidden" name="action" id="contact-action" value="contact">
                        <input type="hidden" name="updated" id="contact-updated" value="<?= date("Y-m-d G:i:s"); ?>">
                        <div class="alert response hidden" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p class="alert-text">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" name="name" id="contact-name">
                                <label class="error" for="name" id="name_error">This field is required.</label>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Company:</label>
                                <input type="text" class="form-control" name="company" id="contact-company">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control" name="phone" id="contact-phone">
                                <label class="error" for="phone" id="phone_error">This field is required.</label>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" name="email" id="contact-email">
                                <label class="error" for="email" id="email_error">This field is required.</label>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="5" cols="100" class="form-control" name="message" id="contact-message" maxlength="999" style="resize:none"></textarea>
                                <label class="error" for="message" id="message_error">This field is required.</label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary button" id="contact-button" value="Send">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
