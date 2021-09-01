<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <span class="white"><?= $no = 1 + (9 * ($currentPage - 1)); ?></span>
    <section class="section">
        <div class="section-header">
            <h1>List Article</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item">List Article</div>
            </div>
        </div>

        <?php if (session()->getFlashdata('modalNotif')) : ?>
            <div class="alert alert-success col-lg-6">
                <?= session()->getFlashdata('modalNotif'); ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <h4></h4>
                <div class="card-header-form">

                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?= session()->get('qsearch'); ?>" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row">

                <?php foreach ($article as $value) : ?>

                    <div class="col-12 col-md-4 col-lg-4">
                        <article class="article article-style-c">

                            <div class="article-header">
                                <div class="article-image" data-background="/img/<?= $value['thumbnail']; ?>">
                                </div>
                            </div>

                            <div class="article-details">
                                <div class="article-category"><a href="#"><?= $value['category']; ?></a>
                                    <div class="bullet"></div><a><?= $value['created_at']; ?></a>
                                </div>

                                <div class="article-title">
                                    <h2><a href="/post/read/<?= $value['slug']; ?>" target="_blank"><?= $value['titlepost']; ?></a></h2>
                                </div>
                                <div class="article-user">
                                    <img alt="image" src="/template/assets/img/avatar/<?= user()->user_image; ?>">
                                    <div class="article-user-details">
                                        <div class="user-detail-name">
                                            <a><?= $value['author']; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="/dashboard/update_article/<?= $value['slug']; ?>" button class="btn btn-primary float-right ml-4 mb-5">Edit</a></button>

                                <form action="/dashboard/list_article/<?= $value['id']; ?>" method='post'>
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" button class="btn btn-danger float-right ml-4 mb-5">Delete</button>
                                </form>

                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

            </div>
            <?= $pager->links('article', 'dashboard_pagination'); ?>

        </div>
</div>

</section>
</div>
<?= $this->endSection(); ?>