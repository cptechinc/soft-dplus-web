    <!-- Page Content -->
    <div class="container page">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-3 mb-3 breadcrumb bg-info font-weight-bold text-white">Contact</h1>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?= $page->google_map_code; ?>"></iframe>
            </div>

            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <p><strong><?= $appconfig->company_name; ?></strong></br>
                <?= $appconfig->company_address; ?></p>
                <p>Phone: <a href="tel:<?= $appconfig->company_phone; ?>"><?= $appconfig->company_phone; ?></a></br>
                    Email: <a href="mailto:<?= $appconfig->company_email; ?>"><?= $appconfig->company_email; ?></a></p>
                <p>Hours: <?= $page->hours; ?></p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3 class="breadcrumb bg-success font-weight-bold text-white">Send us a Message</h3>
                <p><?= $page->body; ?></p>

                <div id="contact_form">
                    <form id="contact-form" action="<?= $page->url; ?>" method="POST">
                        <input type="hidden" name="action" id="contact-action" value="contact">
                        <input type="hidden" name="updated" id="contact-updated" value="<?= date("Y-m-d G:i:s"); ?>">
                        <div class="alert response alert-success hidden" role="alert">
                            <h4 class="alert-heading">Thank you!</h4>
                            <p class="alert-text">Thanks so much for your message! We will respond soon.</p>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control form-control-sm" name="name" id="contact-name">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Company:</label>
                                <input type="text" class="form-control form-control-sm" name="company" id="contact-company">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control form-control-sm" name="phone" id="contact-phone">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control form-control-sm" name="email" id="contact-email">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="5" cols="100" class="form-control form-control-sm" name="message" id="contact-message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-info button" id="contact-button" value="Send">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
