<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container page">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-3 mb-3 breadcrumb bg-info font-weight-bold text-white">Inside <?= $appconfig->site_displayname; ?></h1>
        <div class="row mt-5 mb-3">
            <?php $icons = $page->children; ?>
            <?php foreach ($icons as $icon) : ?>
                <?php if ($icon->template->name == 'data-point') : ?>
                    <div class="col-md-3 my-3 text-center">
                        <i class="<?= $icon->icon_code; ?>" aria-hidden="true" style="color: #<?= $icon->sitecolor; ?>"></i>
                        <h6 class="font-weight-bold text-info mt-2"><?= $icon->title; ?></h6>
                        <?= $icon->body; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-info"><?= $page->body; ?></p>
            </div>
        </div>

        <!-- <h3 class="breadcrumb mt-4 bg-success text-white font-weight-bold"><?= $page->title; ?></h3> -->
        <!-- Content Row -->
        <div class="row mt-4">
            <?php $children = $page->children; ?>
            <?php foreach ($children as $child) : ?>
                <?php if ($child->template->name !== 'data-point') : ?>
                    <div class="col-md-6 mb-4">
                        <div class="card bg-info border-0">
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold text-white"><?= $child->title; ?></h4>
                                <p class="card-text text-white"><?= $child->summary; ?></p>
                                <a href="<?= $child->url; ?>" class="btn btn-warning">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


<?php include('./_foot.php'); ?>
