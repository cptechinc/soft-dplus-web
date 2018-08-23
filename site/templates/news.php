<?php include('./_head.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-3 mb-3 breadcrumb bg-warning font-weight-bold text-white"><?= $page->title; ?></h1>

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
                            <a href="<?= $child->url; ?>" class="btn btn-info">Read More &rarr;</a>
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
