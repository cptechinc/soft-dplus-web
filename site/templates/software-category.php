<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->

        <ul class="mt-3 breadcrumb bg-success">
            <li class="breadcrumb-item">
                <a href="<?= $page->parent->url; ?>" class="text-white-50"><?= $page->parent->title; ?></a>
            </li>
            <li class="breadcrumb-item text-white active"><?= $page->title; ?></li>
        </ul>

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-lg-3 mb-4">
                <?php $siblings = $page->siblings; ?>
                <ul class="list-group">
                    <?php foreach ($siblings as $sibling) : ?>
                        <?php if ($sibling->title == $page->title) : ?>
                            <li class="list-group-item bg-info"><a href="<?= $sibling->url; ?>" class="text-white"><?= $sibling->title; ?></a></li>
                        <?php else : ?>
                            <li class="list-group-item"><a href="<?= $sibling->url; ?>" class="text-info"><?= $sibling->title; ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
                <h1 class="font-weight-bold"><?= $page->title; ?></h1>
                <p><?= $page->body; ?></p>
                <?php $children = $page->children; ?>
                <?php foreach ($children as $child) : ?>
                    <h4 class="font-weight-bold"><?= $child->title; ?></h4>
                    <p><?= $child->body; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


<?php include('./_foot.php'); ?>
