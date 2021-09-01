<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="/dashboard/user_list">User List</a></div>
                <div class="breadcrumb-item">User Detail</div>
            </div>
        </div>
        <div class="section-body">

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="/template/assets/img/avatar/<?= $user->user_image; ?>" class="rounded-circle profile-widget-picture">
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name mb-2"><?= $user->username; ?>
                                <div class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?> ml-2"><?= $user->name; ?>
                                </div>
                            </div>
                            <div>
                                <span>
                                    <?= $user->biodata; ?>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form action="" class="needs-validation" novalidate="">
                            <?= csrf_field(); ?>

                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-lg col-md-6 col-12">
                                        <label>Full Name</label>

                                        <input disabled type="text" class="form-control" value="<?= $user->fullname; ?>">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-lg col-md-7 col-12">
                                        <label>Email</label>
                                        <input disabled type="email" class="form-control" value="<?= $user->email; ?>">
                                    </div>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>