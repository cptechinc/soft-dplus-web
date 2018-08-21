<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Sidebar Page</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-lg-3 mb-4">
                <div class="list-group">
                    <?php foreach ($page->children as $child) : ?>
                        <a id="<?= $child->title; ?>-id" href="#<?= $child->title; ?>" class="list-group-item"><?= $child->title; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
                <?php foreach ($page->children as $child) : ?>
                    <div id="<?= $child->title; ?>">
                        <h3><?= $child->title; ?></h3>
                        <?= $child->body; ?>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


<?php include('./_foot.php'); ?>
