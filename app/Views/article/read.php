<?= $this->extend('layout/detail'); ?>


<?= $this->section('content'); ?>

<!-- section main content -->
<section class="main-content mt-3">
    <div class="container-xl">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#"><?= $article['category']; ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $article['titlepost']; ?></li>
            </ol>
        </nav>

        <div class="row gy-4">

            <div class="col-lg-8">
                <!-- post single -->
                <div class="post post-single">
                    <!-- post header -->
                    <div class="post-header">
                        <h1 class="title mt-0 mb-3"><?= $article['titlepost']; ?></h1>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><?= $article['author']; ?></a></li>
                            <li class="list-inline-item"><a href="#"><?= $article['category']; ?></a></li>
                            <li class="list-inline-item"><?= $article['created_at']; ?></li>
                        </ul>
                    </div>
                    <!-- featured image -->
                    <div class="featured-image">
                        <img src="/img/<?= $article['thumbnail']; ?>" alt="post-title" />
                    </div>
                    <!-- post content -->
                    <div class="post-content clearfix">
                        <?= $article['content']; ?>
                    </div>
                    <!-- post bottom section -->
                    <div class="post-bottom">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6 col-12 text-center text-md-start">
                                <!-- tags -->
                                <a href="#" class="tag">#Trending</a>
                                <a href="#" class="tag">#Video</a>
                                <a href="#" class="tag">#Featured</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <!-- social icons -->
                                <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="spacer" data-height="50"></div>

                <div class="about-author padding-30 rounded">
                    <div class="thumb">
                        <img src="/home/images/other/avatar-about.png" alt="Katen Doe" />
                    </div>
                    <div class="details">
                        <h4 class="name"><a href="#"><?= $article['author']; ?></a></h4>
                        <p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="spacer" data-height="50"></div>
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

                            <span class="white"><?= $no = 1; ?></span>
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