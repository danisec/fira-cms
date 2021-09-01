<?= $this->extend('layout/article'); ?>


<?= $this->section('content'); ?>

<!-- section main content -->
<section class="main-content">
    <div class="container-xl">

        <div class="search-content col-lg-8">
            <div class="text-center">
            </div>
            <!-- form -->
            <form action="" method="get" class="d-flex search-form">
                <input class="form-control me-2" name="q" type="search" value="<?= session()->get('qsearch'); ?>" placeholder="Search and press enter ..." aria-label="Search">
                <button class="btn btn-default btn-lg" name="submit" type="submit"><i class="icon-magnifier"></i></button>
            </form>
            <h5 class="result-search mb-4">Hasil : <?= session()->get('qsearch'); ?></h5>
            <hr>
        </div>


        <div class="row gy-4">

            <div class="col-lg-8">

                <div class="row gy-4">
                    <span class="white"><?= $no = 1 + (12 * ($currentPage - 1)); ?></span>
                    <?php foreach ($latest_post as $value) : ?>
                        <div class="col-sm-4">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute"><?= $value['category']; ?></a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="/img/<?= $value['thumbnail']; ?>" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><?= $value['author']; ?></a></li>
                                    </ul>
                                    <h6 class="post-title mb-3 mt-3"><a href="/post/read/<?= $value['slug']; ?>"><?= $value['titlepost']; ?></a></h6>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>

                <nav>
                    <ul class="pagination justify-content-center">
                        <?= $pager->links('article', 'dashboard_pagination'); ?>
                    </ul>
                </nav>

            </div>
            <div class="col-lg-4">

                <!-- sidebar -->
                <div class="sidebar search-side">
                    <!-- widget about -->

                    <!-- widget popular posts -->
                    <div class="widget rounded">
                        <div class="widget-header text-center">
                            <h3 class="widget-title">Popular Posts</h3>
                        </div>
                        <div class="widget-content">
                            <!-- post -->

                            <?php foreach ($popular as $value) : ?>
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
                                        <span class="number"><?= $no++; ?></span>
                                        <a href="/post/read/<?= $value['slug']; ?>">
                                            <div class="inner">
                                                <img src="/img/<?= $value['thumbnail']; ?>" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0"><a href="/post/read/<?= $value['slug']; ?>"><?= $value['titlepost']; ?></a></h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item"><?= $value['created_at']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                    <!-- widget categories -->
                    <div class="widget rounded">
                        <div class="widget-header text-center">
                            <h3 class="widget-title">Explore Topics</h3>
                        </div>
                        <div class="widget-content">

                            <?php foreach ($category as $value) : ?>
                                <ul class="list">
                                    <li><a href="#"><?= $value->category; ?></a></li>
                                </ul>
                            <?php endforeach; ?>
                        </div>

                    </div>

                    <!-- widget tags -->
                    <div class="widget rounded">
                        <div class="widget-header text-center">
                            <h3 class="widget-title">Tag Clouds</h3>
                            <img src="/home/images/wave.svg" class="wave" alt="wave" />
                        </div>
                        <div class="widget-content">
                            <a href="#" class="tag">#Trending</a>
                            <a href="#" class="tag">#Video</a>
                            <a href="#" class="tag">#Featured</a>
                            <a href="#" class="tag">#Gallery</a>
                            <a href="#" class="tag">#Celebrities</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<?= $this->endSection(); ?>