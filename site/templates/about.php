<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container page">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-3 mb-3 breadcrumb bg-info font-weight-bold text-white"><?= $page->title; ?></h1>

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
            </div>
            <div class="col-lg-6">
                <h2 class="font-weight-bold">About DistributionPlus</h2>
                <p><?= $page->body; ?></p>
                <ul style="padding: 0;">
                    <li><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&ensp;Automotive</li>
                    <li><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&ensp;Hardware</li>
                    <li><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&ensp;Medical</li>
                    <li><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&ensp;Beverage</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <div class="row my-5">
            <?php $logos = $page->customer_logos; ?>
            <?php foreach ($logos as $logo) : ?>
                <div class="col-sm-3 mb-4">
                    <img class="img-fluid" src="<?= $logo->url; ?>" alt="">
                </div>
            <?php endforeach; ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include('./_foot.php'); ?>
