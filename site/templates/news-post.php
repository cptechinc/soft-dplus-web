<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->

        <a href="<?= $page->parent->url; ?>" style="text-decoration:none;"><h1 class="mt-3 mb-3 breadcrumb bg-info font-weight-bold text-white"><?= $page->parent->title; ?></h1></a>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="<?= $page->images->url; ?>" alt="">

                <!-- Date/Time -->
                <h3 class="mt-3 mb-3 font-weight-bold"><?= $page->title; ?></h3>
                <hr>
                <p>Posted on <?= $page->news_post_date; ?>&nbsp;by <?= $page->news_post_author; ?></p>

                <hr>

                <!-- Post Content -->
                <p><?= $page->body; ?></p>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mt-5">
                    <?php $nextpage = $page->next(); ?>
                    <?php if (!empty($nextpage->url)) : ?>
                        <li class="page-item">
                    <?php else : ?>
                        <li class="page-item disabled">
                    <?php endif; ?>
                            <a class="page-link" href="<?= $nextpage->url; ?>">&larr; Older</a>
                        </li>

                    <?php $prevpage = $page->prev(); ?>
                    <?php if (!empty($prevpage->url)) : ?>
                        <li class="page-item">
                    <?php else : ?>
                        <li class="page-item disabled">
                    <?php endif; ?>
                            <a class="page-link" href="<?= $prevpage->url; ?>">Newer &rarr;</a>
                        </li>
                </ul>

            </div>

            <?php include('./content/news-sidebar.php'); ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include('./_foot.php'); ?>
