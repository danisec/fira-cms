<?= $this->extend('layout/article'); ?>


<?= $this->section('content'); ?>

<!-- hero section -->
<section id="hero">

    <div class="container-xl">

        <div class="row gy-4">

            <div class="col-lg-8">

                <!-- featured post large -->

                <?php foreach ($banner as $value) : ?>
                    <div class="post featured-post-lg">
                        <div class="details clearfix">
                            <a href="category.html" class="category-badge"><?= $value['category']; ?></a>
                            <h2 class="post-title"><a href="/post/read/<?= $value['slug']; ?>"><?= $value['titlepost']; ?></a></h2>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><?= $value['author']; ?></a></li>
                                <li class="list-inline-item"><?= $value['created_at']; ?></li>
                            </ul>
                        </div>
                        <a href="/post/read/<?= $value['slug']; ?>">
                            <div class="thumb rounded">
                                <div class="inner data-bg-image" data-bg-image="/img/<?= $value['thumbnail']; ?>"></div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="col-lg-4">

                <!-- post tabs -->
                <div class="post-tabs rounded bordered">
                    <!-- tab navs -->
                    <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                        <li class="nav-item" role="presentation"><button aria-controls="popular" aria-selected="true" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button></li>
                        <li class="nav-item" role="presentation"><button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button></li>
                    </ul>
                    <!-- tab contents -->
                    <div class="tab-content" id="postsTabContent">
                        <!-- loader -->
                        <div class="lds-dual-ring"></div>
                        <!-- popular posts -->
                        <div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular" role="tabpanel">
                            <!-- post -->

                            <?php foreach ($popular as $value) : ?>
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
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
                        <!-- recent posts -->
                        <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
                            <!-- post -->

                            <?php foreach ($recent as $value) : ?>
                                <div class="post post-list-sm circle">
                                    <div class="thumb circle">
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
                </div>
            </div>

        </div>

    </div>

</section>

<!-- section main content -->
<section class="main-content">
    <div class="container-xl">

        <div class="row gy-4">

            <div class="col-lg-8">

                <!-- section header -->
                <div class="section-header">
                    <a href="#">
                        <h3 class="section-title">Lifestyle<i class="fa fa-angle-double-right link-to"></i></h3>
                    </a>
                </div>

                <div class="padding-30 rounded bordered">
                    <div class="row gy-5">
                        <div class="col-sm-6">
                            <!-- post -->

                            <?php foreach ($lifestyle as $value) : ?>
                                <div class="post">
                                    <div class="thumb rounded">
                                        <a href="category.html" class="category-badge position-absolute"><?= $value['category']; ?></a>

                                        <a href="/post/read/<?= $value['slug']; ?>">
                                            <div class="inner">
                                                <img src="/img/<?= $value['thumbnail']; ?>" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <ul class="meta list-inline mt-4 mb-0">
                                        <li class="list-inline-item"><a href="#"><?= $value['author']; ?></a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="/post/read/<?= $value['slug']; ?>"><?= $value['titlepost']; ?></a></h5>
                                    <p class="excerpt mb-0"><?= substr($value['content'], 0, 100); ?>...</p>
                                </div>
                            <?php endforeach; ?>

                        </div>
                        <div class="col-sm-6">
                            <!-- post -->

                            <span class="white"><?= $no = 1 + (5 * ($currentPage - 1)); ?></span>
                            <?php foreach ($article as $value) : ?>
                                <div class="post post-list-sm square">
                                    <div class="thumb rounded">
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
                </div>

                <div class="spacer" data-height="50"></div>

                <!-- section header -->
                <div class="section-header">
                    <a href="#">
                        <h3 class="section-title">Inspiration<i class="fa fa-angle-double-right link-to"></i></h3>
                    </a>
                </div>

                <div class="padding-30 rounded bordered">
                    <div class="row gy-5">
                        <div class="col-sm-6">
                            <!-- post large -->

                            <?php foreach ($inspiration_l as $value) : ?>
                                <div class="post">
                                    <div class="thumb rounded">
                                        <a href="category.html" class="category-badge position-absolute"><?= $value['category']; ?></a>

                                        <a href="/post/read/<?= $value['slug']; ?>">
                                            <div class="inner">
                                                <img src="/img/<?= $value['thumbnail']; ?>" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>

                                    <ul class="meta list-inline mt-4 mb-0">
                                        <li class="list-inline-item"><?= $value['author']; ?></a></li>
                                        <li class="list-inline-item"><?= $value['created_at']; ?></li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="/post/read/<?= $value['slug']; ?>"><?= $value['titlepost']; ?></a></h5>
                                    <p class="excerpt mb-0"><?= substr($value['content'], 0, 100); ?>...</p>
                                </div>
                            <?php endforeach; ?>

                            <!-- post -->

                            <?php foreach ($inspiration_listl as $value) : ?>
                                <div class="post post-list-sm square before-seperator">
                                    <div class="thumb rounded">
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
                        <div class="col-sm-6">
                            <!-- post large -->

                            <?php foreach ($inspiration_r as $value) : ?>
                                <div class="post">
                                    <div class="thumb rounded">
                                        <a href="category.html" class="category-badge position-absolute"><?= $value['category']; ?></a>

                                        <a href="/post/read/<?= $value['slug']; ?>">
                                            <div class="inner">
                                                <img src="/img/<?= $value['thumbnail']; ?>" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <ul class="meta list-inline mt-4 mb-0">
                                        <li class="list-inline-item"><a href="#"><?= $value['author']; ?></a></li>
                                        <li class="list-inline-item"><?= $value['created_at']; ?></li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="/post/read/<?= $value['slug']; ?>"><?= $value['titlepost']; ?></a></h5>
                                    <p class="excerpt mb-0"><?= substr($value['content'], 0, 100); ?>...</p>
                                </div>
                            <?php endforeach; ?>

                            <!-- post -->

                            <?php foreach ($inspiration_listr as $value) : ?>
                                <div class="post post-list-sm square before-seperator">
                                    <div class="thumb rounded">
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
                </div>

                <div class="spacer" data-height="50"></div>

                <!-- section header -->
                <div class="section-header">
                    <h3 class="section-title">Latest Posts</h3>
                </div>

                <div class="padding-30 rounded bordered">

                    <div class="row">

                        <div class="col-md-12 col-sm-6">
                            <!-- post -->

                            <?php foreach ($latest_post as $value) : ?>
                                <div class="post post-list clearfix">
                                    <div class="thumb rounded">
                                        <a href="/post/read/<?= $value['slug']; ?>">
                                            <div class="inner">
                                                <img src="/img/<?= $value['thumbnail']; ?>" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details">
                                        <ul class="meta list-inline mb-3">
                                            <li class="list-inline-item"><a href="#"><?= $value['author']; ?></a></li>
                                            <li class="list-inline-item"><a href="#"><?= $value['category']; ?></a></li>
                                            <li class="list-inline-item"><?= $value['created_at']; ?></li>
                                        </ul>
                                        <h5 class="post-title"><a href="/post/read/<?= $value['slug']; ?>"><?= $value['titlepost']; ?></a></h5>
                                        <p class="excerpt mb-0"><?= substr($value['content'], 0, 100); ?>...</p>
                                        <div class="post-bottom clearfix d-flex align-items-center">
                                            <div class="social-share me-auto">
                                                <button class="toggle-button icon-share"></button>
                                                <ul class="icons list-unstyled list-inline mb-0">
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="more-button float-end">
                                                <a href="/post/read/<?= $value['slug']; ?>"><span class="icon-options"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                    <!-- load more button -->
                    <div class="text-center">
                        <?= $pager->links('article', 'dashboard_pagination'); ?>
                    </div>

                </div>

            </div>
            <div class="col-lg-4">

                <!-- sidebar -->
                <div class="sidebar">
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

                    <!-- widget post carousel -->
                    <div class="widget rounded">
                        <div class="widget-header text-center">
                            <h3 class="widget-title">Celebration</h3>
                        </div>
                        <div class="widget-content">
                            <div class="post-carousel-widget">

                                <?php foreach ($celebration as $value) : ?>
                                    <div class="post post-carousel">
                                        <div class="thumb rounded">
                                            <a href="category.html" class="category-badge position-absolute"><?= $value['category']; ?></a>
                                            <a href="/post/read/">
                                                <div class="inner">
                                                    <img src="/img/<?= $value['thumbnail']; ?>" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <h5 class="post-title mb-0 mt-4"><a href="/post/read/<?= $value['slug']; ?>"><?= $value['titlepost']; ?></a></h5>
                                        <ul class="meta list-inline mt-2 mb-0">
                                            <li class="list-inline-item"><a href="#"><?= $value['author']; ?></a></li>
                                            <li class="list-inline-item"><?= $value['created_at']; ?></li>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                            <!-- carousel arrows -->
                            <div class="slick-arrows-bot">
                                <button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                <button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- widget tags -->
                    <div class="widget rounded">
                        <div class="widget-header text-center">
                            <h3 class="widget-title">Tag Clouds</h3>
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