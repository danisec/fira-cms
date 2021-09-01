<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Article</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="/dashboard/list_article">List Article</a></div>
                <div class="breadcrumb-item">Update Article</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="/dashboard/update/<?= $article['id']; ?>" method="post" autocomplete="off" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="slug" value="<?= $article['slug']; ?>">
                                <input type="hidden" name="oldthumbnail" value="<?= $article['thumbnail']; ?>">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-2">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="titlepost" value="<?= (old('titlepost')) ? old('titlepost') : $article['titlepost']; ?>" class="form-control <?= ($validation->hasError('titlepost')) ? 'is-invalid' : ''; ?>" value="<?= old('titlepost'); ?>" required>

                                        <div class="invalid-feedback">
                                            <?= $validation->getError('titlepost'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-md-3 col-lg-2">Category</label>
                                    <div class="col-sm-12 col-md-7">

                                        <select class="form-control selectric" name="category">
                                            <option selected aria-readonly="true" value="<?= (old('category')) ? old('category') : $article['category']; ?>"><?= (old('category')) ? old('category') : $article['category']; ?></option>


                                            <?php foreach ($category as $value) : ?>
                                                <option><?= $value->category; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-md-3 col-lg-2">Author</label>
                                    <div class="col-sm-12 col-md-7">

                                        <select class="form-control selectric" name="author">
                                            <option><?= user()->username; ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-md-3 col-lg-2">Thumbnail</label>
                                    <div class="input-group col-md-7">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="thumbnail" name="thumbnail">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control <?= ($validation->hasError('thumbnail')) ? 'is-invalid' : ''; ?>" value="<?= (old('thumbnail')) ? old('thumbnail') : $article['thumbnail']; ?>" readonly>
                                    </div>
                                    <span class="form-text mx-auto text-muted">* The image must have a maximum size of 5MB</span>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('thumbnail'); ?>
                                    </div>
                                </div>
                                <div class="form-group mx-auto col-md-8">
                                    <img id='img-upload' name="thumbnail" />
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-md-3 col-lg-2">Content</label>
                                    <div class="col-lg-10">
                                        <textarea name="content" class="summernote"><?= (old('content')) ? old('content') : $article['content']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-2"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>

</section>
</div>

<?= $this->endSection(); ?>