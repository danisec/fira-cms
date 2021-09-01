<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="/dashboard/add_category">Category</a></div>
                <div class="breadcrumb-item">Edit Category</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col">
                    <div class="card">

                        <div class="card-header">
                            <h4>Input Change Category</h4>
                        </div>
                        <form action="/category/update/<?= $category['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $category['id']; ?>">

                            <div class="col-lg-6 col-md col-sm ml-2">
                                <div class="form-group">
                                    <input type="text" class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="category" value="<?= $category['category']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('category'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md col-sm ml-2 mb-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>
</div>
<?= $this->endSection(); ?>