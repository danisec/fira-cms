<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, <?= user()->username; ?></h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="/template/assets/img/avatar/<?= user()->user_image; ?>" class="rounded-circle profile-widget-picture">

                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name"><?= user()->fullname; ?> <div class="text-muted d-inline font-weight-normal">
                                </div>
                            </div>
                            <?= user()->biodata; ?>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form action="/profile/save" method="post" class="needs-validation" novalidate="">
                            <?= csrf_field(); ?>

                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-lg col-md-6 col-12">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" value="<?= user()->fullname; ?>">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-lg col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="<?= user()->email; ?>">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Bio</label>
                                        <textarea class="form-control summernote-simple" value="<?= user()->biodata; ?>"><?= user()->biodata; ?></textarea>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>