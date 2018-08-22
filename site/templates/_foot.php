<!-- Footer -->
    <footer class='py-5 bg-dark'>
        <div class='container'>
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-white m-0"><?= $appconfig->company_name; ?></br>
                    <?= $appconfig->company_address; ?></br>
                    Phone: <a href="tel:<?= $appconfig->company_phone; ?>"><?= $appconfig->company_phone; ?></a></br>
                    Email: <a href="mailto:<?= $appconfig->company_email; ?>"><?= $appconfig->company_email; ?></a></p>
                </div>
                <div class="col-sm-6">
                    <p class="text-white text-right">Copyright &copy; <?= date('Y'); ?> <?= $appconfig->company_name; ?></p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?= $config->urls->templates?>scripts/main.js"></script>
<script src="<?= $config->urls->templates?>scripts/bootstrap.min.js"></script>
<script src="<?= $config->urls->templates?>scripts/bootstrap.bundle.min.js"></script>

</body>

</html>
