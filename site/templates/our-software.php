<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-3 mb-3 breadcrumb bg-info font-weight-bold text-white">Inside DistributionPlus</h1>
        <div class="row mt-5 mb-3">
            <div class="col-md-3 my-3 text-center">
                <i class="fa fa-list-alt fa-5x text-info" aria-hidden="true"></i>
                <h6 class="font-weight-bold text-info mt-2">Inventory Management</h6>
            </div>
            <div class="col-md-3 my-3 text-center">
                <i class="fa fa-globe fa-5x text-info" aria-hidden="true"></i>
                <h6 class="font-weight-bold text-info mt-2">Lot and Serial Tracking</h6>
            </div>
            <div class="col-md-3 my-3 text-center">
                <i class="fa fa-newspaper-o fa-5x text-info" aria-hidden="true"></i>
                <h6 class="font-weight-bold text-info mt-2">Reporting</h6>
            </div>
            <div class="col-md-3 my-3 text-center">
                <i class="fa fa-address-card-o fa-5x text-info" aria-hidden="true"></i>
                <h6 class="font-weight-bold text-info mt-2">CRM</h6>
            </div>
            <div class="col-md-3 my-3 text-center">
                <i class="fa fa-question-circle-o fa-5x text-info" aria-hidden="true"></i>
                <h6 class="font-weight-bold text-info mt-2">Inquiry Screens</h6>
            </div>
            <div class="col-md-3 my-3 text-center">
                <i class="fa fa-file-text-o fa-5x text-info" aria-hidden="true"></i>
                <h6 class="font-weight-bold text-info mt-2">Document Management</h6>
            </div>
            <div class="col-md-3 my-3 text-center">
                <i class="fa fa-laptop fa-5x text-info" aria-hidden="true"></i>
                <h6 class="font-weight-bold text-info mt-2">Sales Portal</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-info"><?= $page->body; ?></p>
            </div>
        </div>



        <h3 class="breadcrumb mt-4 bg-success text-white font-weight-bold"><?= $page->title; ?></h3>
        <!-- Content Row -->
        <div class="row">
            <?php $children = $page->children; ?>
            <?php foreach ($children as $child) : ?>
                <div class="col-md-6 mb-4">
                    <div class="card bg-info border-0">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold text-white"><?= $child->title; ?></h4>
                            <p class="card-text text-white"><?= $child->summary; ?></p>
                            <a href="<?= $child->url; ?>" class="btn btn-warning">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


<?php include('./_foot.php'); ?>
