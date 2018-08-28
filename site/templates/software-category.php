<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container page">

        <!-- Page Heading/Breadcrumbs -->

        <a href="<?= $page->parent->url; ?>" style="text-decoration:none;"><h1 class="mt-3 mb-3 breadcrumb bg-info font-weight-bold text-white"><?= $page->parent->title; ?></h1></a>

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-lg-3 mb-4">
                <?php $siblings = $page->siblings; ?>
                <ul class="list-group">
                    <?php foreach ($siblings as $sibling) : ?>
                        <?php if ($sibling->template->name != 'data-point') : ?>
                            <?php if ($sibling->title == $page->title) : ?>
                                <li class="list-group-item bg-info"><a href="<?= $sibling->url; ?>" class="text-white"><?= $sibling->title; ?></a></li>
                            <?php else : ?>
                                <li class="list-group-item border-info"><a href="<?= $sibling->url; ?>" class="text-info"><?= $sibling->title; ?></a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Content Column -->
            <div class="col-lg-9 mb-4">
                <h2 class="font-weight-bold text-dark border-info border-bottom software-category-title"><?= $page->title; ?></h2>
                <p class="text-dark"><?= $page->body; ?></p>
                <?php $children = $page->children; ?>
                <?php foreach ($children as $child) : ?>
                    <h4 class="font-weight-bold text-dark"><?= $child->title; ?></h4>
                    <div class="software-list text-dark"><?= $child->body; ?></div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


<?php include('./_foot.php'); ?>
