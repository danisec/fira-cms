<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Fira CMS</title>
    <link rel="shortcut icon" type="image/x-icon" href="/home/images/favicon.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/template/node_modules/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/template/assets/css/style.css">
    <link rel="stylesheet" href="/template/assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4><?= lang('Auth.register') ?></h4>
                            </div>

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <div class="card-body">
                                <form action="<?= route_to('register') ?>" method="post" class="user">
                                    <?= csrf_field() ?>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md col-sm">
                                            <label for="username"><?= lang('Auth.username') ?></label>
                                            <input type="text" class="form-control" <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" autofocus>
                                        </div>

                                        <div class="form-group col-lg-6 col-md col-sm">
                                            <label for="email"><?= lang('Auth.email') ?></label>
                                            <input type="email" class="form-control" <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="password"><?= lang('Auth.password') ?></label>
                                            <input type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                            <input type="password" class="form-control" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                        </div>
                                    </div>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    <?= lang('Auth.register') ?>
                                </button>
                            </div>

                            <div class="mb-4 ml-auto mr-4 text-muted">
                                Already have an account? <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </section>
    </div>

    <!-- General JS Scripts -->
    <script src="/template/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/template/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="/template/node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="/template/assets/js/scripts.js"></script>
    <script src="/template/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="/template/assets/js/page/auth-register.js"></script>
</body>

</html>