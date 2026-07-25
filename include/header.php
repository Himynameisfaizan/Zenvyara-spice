<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenvyara | Global Export</title>

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/Pe-icon-7-stroke.css" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/include.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="assets/css/service.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>
    <!-- =======================
    ZENVYARA PREMIUM HEADER
======================== -->

    <!-- 1. Top Contact Bar (Dark & Sleek) -->
    <div class="zen-topbar d-none d-lg-block bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="topbar-contact">
                        <li><i class="fa-solid fa-phone"></i> <a href="tel:+917874616897">+91 78746 16897</a></li>
                        <li><i class="fa-solid fa-envelope"></i> <a href="mailto:info@zenvyara.com">info@zenvyara.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-end">
                    <p class="mb-0 topbar-text">🌍 Premium Quality Agro Exporters Worldwide</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Main Sticky Header -->
    <?php global $site; ?>
    <header class="zen-header header-sticky">
        <div class="container">
            <div class="header-inner">

                <!-- Logo Section -->
                <div class="header-logo">
                    <a href="index.php">
                        <img src="assets/images/logo/dark1.png" alt="Zenvyara Logo" class="img-fluid">
                    </a>
                </div>

                <!-- Navigation Menu (Centered & Stylish) -->
                <nav class="zen-main-nav d-none d-lg-block">
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="<?php echo $site; ?>about.php">About</a></li>
                        <li><a href="<?php echo $site; ?>product.php">Product</a></li>
                        <li><a href="<?php echo $site; ?>service.php">Our Services</a></li>
                        <li><a href="<?php echo $site; ?>blogs.php">Blogs</a></li>
                        <li><a href="<?php echo $site; ?>contact.php">Contact</a></li>
                    </ul>
                </nav>

                <!-- Right Side Action & Mobile Menu -->
                <div class="header-actions">
                    <!-- Stylish Quote Button -->
                    <a href="<?php echo $site; ?>contact.php" class="btn-quote d-none d-sm-inline-flex">
                        Get a Quote <i class="fa-solid fa-paper-plane"></i>
                    </a>

                    <!-- Mobile Menu Trigger (Harmic Template Support) -->
                    <a href="#mobileMenu" class="mobile-menu-btn d-lg-none toolbar-btn pl-3">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </a>
                </div>

            </div>
        </div>
    </header>
    <!-- =======================
    HEADER END
======================== -->

</body>

</html>