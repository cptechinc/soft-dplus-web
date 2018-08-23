<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->

        <a href="<?= $page->parent->url; ?>" style="text-decoration:none;"><h1 class="mt-3 mb-3 breadcrumb bg-warning font-weight-bold text-white"><?= $page->parent->title; ?></h1></a>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="<?= $page->images->url; ?>" alt="">

                <!-- Date/Time -->
                <h5 class="mt-3 mb-3 breadcrumb bg-info font-weight-bold text-white"><?= $page->title; ?></h5>
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

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card mb-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include('./_foot.php'); ?>
