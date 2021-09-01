<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?= $article['titlepost']; ?> - Fira CMS</title>
    <meta name="description" content="Fira - CMS">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/home/images/favicon.png">

    <!-- STYLES -->
    <link rel="stylesheet" href="/home/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/home/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/home/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="/home/css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="/home/css/style.css" type="text/css" media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- site wrapper -->
    <div class="site-wrapper">

        <div class="main-overlay"></div>

        <!-- header -->
        <header class="header-default">
            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">
                    <!-- site logo -->
                    <a class="navbar-brand" href="<?= base_url(); ?>"><img src="/home/images/logo-nav.png" alt="logo" /></a>

                    <div class="collapse navbar-collapse">
                        <!-- menus -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/lifestyle">Lifestyle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/inspiration">Inspiration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>

                            <li class="nav-item login">
                                <?php if (logged_in()) : ?>
                                    <a class="nav-link" href="/logout">Logout</a>
                                <?php else : ?>
                                    <a class="nav-link" href="/dashboard">Login</a>
                                <?php endif; ?>
                            </li>

                        </ul>
                    </div>

                    <!-- header right section -->
                    <div class="header-right">

                        <!-- header buttons -->
                        <div class="header-buttons">
                            <button class="search icon-button">
                                <i class="icon-magnifier"></i>
                            </button>
                            <button class="burger-menu icon-button">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <?= $this->renderSection('content'); ?>


        <!-- footer -->
        <footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div class="row d-flex align-items-center gy-4">
                        <!-- copyright text -->
                        <div class="col-md-4">
                            <span class="copyright">Copyright &copy; <?= date('Y'); ?>. All right reserved</span>
                        </div>

                        <!-- social icons -->
                        <div class="col-md-4 text-center">
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <!-- go to top button -->
                        <div class="col-md-4">
                            <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="/home/images/logo-side.png" alt="Fira" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="<?= base_url(); ?>">Home</a>
                </li>
                <li><a href="/lifestyle">Lifestyle</a></li>
                <li><a href="/inspiration">Inspiration</a></li>
                <li><a href="/contact">Contact</a></li>

                <?php if (logged_in()) : ?>
                    <li><a href="/logout">Logout</a></li>
                <?php else : ?>
                    <li><a href="/dashboard">Login</a></li>
                <?php endif; ?>

            </ul>
        </nav>

        <!-- social icons -->
        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>

    <!-- JAVA SCRIPTS -->
    <script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/popper.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/slick.min.js"></script>
    <script src="/home/js/jquery.sticky-sidebar.min.js"></script>
    <script src="/home/js/custom.js"></script>

</body>

</html>