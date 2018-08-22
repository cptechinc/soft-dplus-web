<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-3 mb-3 breadcrumb bg-warning font-weight-bold text-white">Inside DistributionPlus</h1>
        <p><?= $page->body; ?></p>
        <ul class="mt-3 breadcrumb bg-success">
            <li class="breadcrumb-item text-white active"><?= $page->title; ?></li>
        </ul>
        <!-- Content Row -->
        <div class="row">
            <?php $children = $page->children; ?>
            <?php foreach ($children as $child) : ?>
                <div class="col-md-6 mb-4">
                    <div class="card bg-info">
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
