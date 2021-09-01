<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item">User</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col">
                    <div class="card">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>User List</h4>
                                        <div class="card-header-form">

                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Username</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Role</th>
                                                    <th class="text-center">Action</th>
                                                </tr>

                                                <?php $i = 1; ?>
                                                <?php foreach ($users as $user) : ?>

                                                    <tr>
                                                        <td class="text-center"><?= $i++; ?></td>
                                                        <td class="text-center"><?= $user->username; ?></td>
                                                        <td class="text-center"><?= $user->email; ?></td>
                                                        <td class="text-center"><?= $user->name; ?></td>
                                                        <td class="text-center">
                                                            <form action="/dashboard/user_list/<?= $user->userid; ?>" method="post">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-danger mr-2">Delete</button>

                                                                <a href="<?= base_url('dashboard/user_detail/' . $user->userid); ?>" class="btn btn-primary ml-2">Detail</button>
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