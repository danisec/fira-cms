<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Fira CMS</title>
  <link rel="shortcut icon" type="image/x-icon" href="/home/images/favicon.png">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/template/assets/css/style.css">
  <link rel="stylesheet" href="/template/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card">
              <h2 class="card-header"><?= lang('Auth.loginTitle') ?></h2>
              <div class="card-body">

                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= route_to('login') ?>" method="post">
                  <?= csrf_field() ?>

                  <?php if ($config->validFields === ['email']) : ?>
                    <div class="form-group">
                      <label for="login"><?= lang('Auth.email') ?></label>
                      <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                  <?php else : ?>
                    <div class="form-group">
                      <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                      <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                  <?php endif; ?>

                  <div class="form-group">
                    <label for="password"><?= lang('Auth.password') ?></label>
                    <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="invalid-feedback">
                      <?= session('errors.password') ?>
                    </div>
                  </div>

                  <?php if ($config->allowRemembering) : ?>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                        <?= lang('Auth.rememberMe') ?>
                      </label>
                    </div>
                  <?php endif; ?>

                  <br>

                  <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
                </form>

                <hr>

                <?php if ($config->allowRegistration) : ?>
                  <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                <?php endif; ?>
                <?php if ($config->activeResetter) : ?>
                  <p><a href="<?= route_to('forgot') ?>"> <?= lang('Auth.forgotYourPassword') ?></a></p>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="/template/assets/js/scripts.js"></script>
  <script src="/template/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>

</html>