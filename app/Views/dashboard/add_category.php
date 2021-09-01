<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <span class="white"><?= $no = 1 + (1 * ($currentPage - 1)); ?></span>
    <section class="section">
        <div class="section-header">
            <h1>Add Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item">Add Category</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col">
                    <div class="card">

                        <?php if (session()->getFlashdata('modalNotif')) : ?>
                            <div class="alert alert-success col-lg-6">
                                <?= session()->getFlashdata('modalNotif'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="card-header">
                            <h4>Input New Category</h4>
                        </div>
                        <form action="/category/save" method="post">
                            <?= csrf_field(); ?>

                            <div class="col-lg-6 col-md col-sm ml-2">
                                <div class="form-group">
                                    <input type="text" name="category" class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" value="<?= old('category'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('category'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md col-sm ml-2 mb-4">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Category</h4>
                            <div class="card-header-form">

                                <!--  <form action="" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="keyword" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form> -->

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Category Name</th>
                                        <th class="text-center">Create Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>

                                    <?php foreach ($category as $value) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td class="text-center"><?= $value->category; ?></td>
                                            <td class="text-center"><?= $value->created_at; ?></td>
                                            <td class="text-center">

                                                <form action="/dashboard/add_category/<?= $value->id; ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>

                                                    <a href="/dashboard/edit_category/<?= $value->id; ?>" class="btn btn-primary ml-2">Edit</button>
                                                </form>

                                            </td>

                                        </tr>
                                    <?php endforeach; ?>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </section>
</div>
<?= $this->endSection(); ?>