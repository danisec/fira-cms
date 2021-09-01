<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <span class="white"><?= $no = 1 + (5 * ($currentPage - 1)); ?></span>
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <a href="/dashboard/user_list">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total User</h4>
                            </div>
                            <div class="card-body">
                                <?= $total_user; ?>
                            </div>
                        </div>
                    </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <a href="/dashboard/list_article">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Article</h4>
                        </div>

                        <div class="card-body">
                            <?= $total_article; ?>
                        </div>

                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <a href="/dashboard/add_category">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Category</h4>
                        </div>

                        <div class="card-body">
                            <?= $total_category; ?>
                        </div>

                    </div>
                </div>
            </a>
        </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>All Posts</h4>
            </div>
            <div class="card-body">

                <div class="float-right">
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?= session()->get('qsearch'); ?>" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="clearfix mb-3"></div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Created At</th>
                        </tr>

                        <?php foreach ($article as $value) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['titlepost']; ?>
                                    <div class="table-links">
                                        <a href="/post/read/<?= $value['slug']; ?>" target="_blank">View</a>
                                        <div class="bullet"></div>
                                        <a href="/dashboard/update_article/<?= $value['slug']; ?>">Edit</a>
                                    </div>
                                </td>
                                <td>
                                    <p><?= $value['category']; ?></p>
                                </td>
                                <td>
                                    <a href="#">
                                        <img alt="image" src="/template/assets/img/avatar/<?= user()->user_image; ?>" class="rounded-circle" width="35" data-toggle="title" title="">
                                        <br />
                                        <div class="d-inline-block ml-1"><?= $value['author']; ?></div>
                                    </a>
                                </td>
                                <td><?= $value['created_at']; ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                </div>
                <div class="float-right">
                    <?= $pager->links('article', 'dashboard_pagination'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<?= $this->endSection(); ?>