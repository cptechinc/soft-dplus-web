<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-3 mb-3 breadcrumb bg-info font-weight-bold text-white"><?= $page->title; ?></h1>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- Blog Post -->
                <?php $children = $page->children; ?>
                <?php foreach ($children as $child) : ?>
                    <div class="card mb-4">
                        <img class="card-img-top" src="<?= $child->images->url; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?= $child->title; ?></h2>
                            <p class="card-text text-truncate"><?= $child->summary; ?></p>
                            <a href="<?= $child->url; ?>" class="btn btn-success">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <p>Posted on <?= $child->news_post_date; ?> by <?= $child->news_post_author; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <?php include('./content/news-sidebar.php'); ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include('./_foot.php'); ?>
