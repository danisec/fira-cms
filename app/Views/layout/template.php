<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?> &mdash; Fira CMS</title>
    <link rel="shortcut icon" type="image/x-icon" href="/home/images/favicon.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/template/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/template/node_modules/weathericons/css/weather-icons.min.css">
    <link rel="stylesheet" href="/template/node_modules/weathericons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="/template/node_modules/summernote/dist/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/template/assets/css/style.css">
    <link rel="stylesheet" href="/template/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>

                <form class="form-inline ml-auto">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="/template/assets/img/avatar/<?= user()->user_image; ?>" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, <?= user()->username; ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Logged in</div>
                        <a href="/dashboard/profile" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="<?= base_url('logout'); ?>" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                </form>
            </nav>

            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index"><img class="logo-fira mx-auto" src="/home/images/logo-nav.png">
                        </a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html"></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link active"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>


                        <li class="menu-header">Article</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="uil uil-comment-alt-lines"></i></i>
                                <span>Post</span></a>
                            <ul class="dropdown-menu">
                                <?php if (in_groups('admin')) : ?>
                                    <li><a class="nav-link" href="/dashboard/create_post">Create Post</a></li>
                                <?php endif; ?>
                                <li><a class="nav-link active" href="/dashboard/list_article">
                                        <!-- <i class="uil uil-list-ul"></i> --> <span>List Article</span>
                                    </a></li>

                            </ul>
                        </li>
                        <?php if (in_groups('admin')) : ?>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="uil uil-apps"></i>
                                    <span>Category</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="/dashboard/add_category">Add Category</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <li class="menu-header">User</li>

                        <li><a class="nav-link" href="/dashboard/user_list"><i class="uil uil-user"></i> <span>User</span></a></li>

                </aside>
            </div>

            <?= $this->renderSection('content'); ?>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y'); ?> <div class="bullet"></div> All right reserved
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/template/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/template/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/template/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="/template/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="/template/node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="/template/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="/template/assets/js/scripts.js"></script>
    <script src="/template/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="/template/assets/js/page/index.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                callbacks: {
                    onImageUpload: function(files) {
                        for (let i = 0; i < files.length; i++) {
                            $.upload(files[i]);
                        }
                    },
                    onMediaDelete: function(target) {
                        $.delete(target[0].src);
                    }
                },
            });

            $.upload = function(file) {
                let out = new FormData();
                out.append('file', file, file.name);
                $.ajax({
                    method: 'POST',
                    url: '<?php echo site_url('create_post/uploadGambar') ?>',
                    contentType: false,
                    cache: false,
                    processData: false,
                    data: out,
                    success: function(img) {
                        $('.summernote').summernote('insertImage', img);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });
            };

            $.delete = function(src) {
                $.ajax({
                    method: 'POST',
                    url: '<?php echo site_url('create_post/deleteGambar') ?>',
                    cache: false,
                    data: {
                        src: src
                    },
                    success: function(response) {
                        console.log(response);
                    }

                });
            };

        });
    </script>

</body>

</html>