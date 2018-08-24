<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

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
                <p class="font-weight-bold">Industries we've worked in:</p>
                <ul style="padding: 0;">
                    <li><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&ensp;Automotive</li>
                    <li><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&ensp;Hardware</li>
                    <li><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&ensp;Medical</li>
                    <li><i class="fa fa-check-circle-o green" aria-hidden="true"></i>&ensp;Beverage</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <!-- <h2 class="font-weight-bold">Our Work</h2>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card bg-info border-0 h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-white font-weight-bold">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-white">Position</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">name@example.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-info border-0 h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-white font-weight-bold">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-white">Position</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">name@example.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-info border-0 h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-white font-weight-bold">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-white">Position</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">name@example.com</a>
                    </div>
                </div>
            </div>
        </div> -->
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
