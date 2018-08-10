<!-- Footer -->
<?php if ($page->template->name != 'request-demo' && $page->template->name != 'post_form') : ?>
    <footer class='py-5 bg-dark'>
      <div class='container'>
          <div class="row">
              <div class="col-sm-6">
                  <p class="text-white m-0"><?= $appconfig->company_name; ?></br>
                  <?= $appconfig->company_address; ?></br>
                  Phone: <a href="tel:<?= $page->phone; ?>"><?= $appconfig->company_phone; ?></a></p>
              </div>
              <div class="col-sm-6">
                  <p class="text-white text-right">Copyright &copy; <?= date('Y'); ?> <?= $appconfig->company_name; ?></p>
              </div>
          </div>
      </div>
      <!-- /.container -->
    </footer>
<?php endif; ?>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo $config->urls->templates?>scripts/main.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/bootstrap.min.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/bootstrap.bundle.min.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/contact_me.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/jqBootstrapValidation.js"></script>

</body>

</html>
