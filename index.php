<?php

include("./admin/db-conn.php");

$sql = "SELECT p.*, c.categories AS category_name 
        FROM products p
        LEFT JOIN categories c ON p.pro_cate = c.cate_id 
        WHERE p.status = 1 
        ORDER BY p.pro_id DESC LIMIT 4";
$sqlArr = "SELECT * FROM `products` order by id LIMIT 4;";
$sqlBlog = "SELECT * FROM blogs WHERE status = 'published' LIMIT 3";
$sqlCate = "SELECT * FROM `categories` where status = 1 ORDER BY id desc";
$result = $conn->query($sql);
$resultArr = $conn->query($sqlArr);
$resultBlog = $conn->query($sqlBlog);
$resultCate = $conn->query($sqlCate);
?>


<body>

    <div class="main-wrapper">

        <?php include("./include/header.php") ?>

        <!-- Begin Slider Area -->
        <div class="slider-area">

            <!-- Main Slider -->
            <div class="swiper-container main-slider swiper-arrow with-bg_white">
                <div class="swiper-wrapper">
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="assets/images/slider/bg/1-1.jpg">
                            <div class="parallax-img-wrap">
                                <!-- <div class="chilly">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="assets/images/slider/inner-img/1-1-231x210.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="avocado">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.5">
                                            <img src="assets/images/slider/inner-img/1-2-224x204.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="container">
                                <div class="parallax-with-content">
                                    <div class="slide-content">
                                        <span class="sub-title mb-3">Natural & Organic</span>
                                        <h2 class="title mb-9">-40% Offer All <br> Products.</h2>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                    <div class="parallax-img-wrap">
                                        <div class="tomatoes">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.5">
                                                    <img src="assets/images/slider/inner-img/peanuts.png" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="assets/images/slider/bg/1-1.jpg">
                            <div class="parallax-img-wrap">
                                <!-- <div class="chilly">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="assets/images/slider/inner-img/1-1-231x210.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="avocado">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.5">
                                            <img src="assets/images/slider/inner-img/1-2-224x204.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="container">
                                <div class="parallax-with-content">
                                    <div class="slide-content">
                                        <span class="sub-title mb-3">Natural & Organic</span>
                                        <h2 class="title mb-9">-40% Offer All <br> Products.</h2>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                    <div class="parallax-img-wrap">
                                        <div class="tomatoes">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.5">
                                                    <img src="assets/images/slider/inner-img/peanuts.png" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination with-bg d-md-none"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
        <!-- Slider Area End Here -->

        <!-- Begin Shipping Area -->
        <div class="shipping-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Free Shipping</h5>
                                <p class="short-desc mb-0">Free Home Delivery Offer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/earphones.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Online Support</h5>
                                <p class="short-desc mb-0">24/7 Online Support Provide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/shield.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Secure Payment</h5>
                                <p class="short-desc mb-0">Fully Secure Payment System</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->

        <!-- Begin Product Area -->
        <div class="product-area section-space-top-100 py-5 bg-light my-10 reveal">
            <div class="container">

                <div class="section-title text-center pb-4 mb-3">
                    <span class="sub-title text-primary" style="color: var(--bs-primary); font-weight: 600; letter-spacing: 1px; text-transform: uppercase;">Our Collection</span>
                    <h2 class="title mb-0" style="font-family: 'Playfair Display', serif; font-size: 36px; font-weight: 700;">Explore By Category</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <?php
                        // 1. Fetch All Active Categories for Tabs
                        $sqlCategories = "SELECT * FROM categories WHERE status = 1 ORDER BY id ASC";
                        $resultCategories = $conn->query($sqlCategories);

                        $categoriesArray = [];
                        if (isset($resultCategories) && $resultCategories->num_rows > 0) {
                            while ($catRow = $resultCategories->fetch_assoc()) {
                                $categoriesArray[] = $catRow;
                            }
                        }
                        ?>

                        <!-- Dynamic Styled Tabs -->
                        <ul class="nav product-tab-nav pb-5 d-flex justify-content-center gap-3 border-0" id="myTab" role="tablist">
                            <!-- Default 'All Items' Tab -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active custom-tab" id="all-items-tab" data-bs-toggle="tab" data-bs-target="#all-items" type="button" role="tab">
                                    <span class="d-block mb-2"><i class="fa-solid fa-layer-group fs-4"></i></span>
                                    All Items
                                </button>
                            </li>

                            <!-- Dynamic Category Tabs -->
                            <?php foreach ($categoriesArray as $cat) {
                                $catId = $cat['cate_id'];
                                $catName = htmlspecialchars($cat['categories'], ENT_QUOTES, 'UTF-8');
                                // Category Icon/Image Logic
                                $catImg = !empty($cat['image']) ? "admin/uploads/category/" . htmlspecialchars($cat['image']) : "assets/images/product/icon/1.png";
                            ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link custom-tab" id="tab-<?php echo $catId; ?>" data-bs-toggle="tab" data-bs-target="#pane-<?php echo $catId; ?>" type="button" role="tab">
                                        <span class="d-block mb-2">
                                            <!-- Agar icon database mein hai toh img use karein, warna fallback -->
                                            <img src="<?php echo $catImg; ?>" alt="Icon" width="30" style="height:30px; object-fit:contain;">
                                        </span>
                                        <?php echo $catName; ?>
                                    </button>
                                </li>
                            <?php } ?>
                        </ul>

                        <!-- Product Grids (Tab Contents) -->
                        <div class="tab-content" id="myTabContent">

                            <!-- 1. All Items Pane (Shows Latest Products from all categories) -->
                            <div class="tab-pane fade show active" id="all-items" role="tabpanel">
                                <div class="row g-4 zv-product-grid">
                                    <?php
                                    $sqlAll = "SELECT p.*, c.categories AS category_name FROM products p LEFT JOIN categories c ON p.pro_cate = c.cate_id WHERE p.status = 1 ORDER BY p.id DESC LIMIT 8";
                                    $resultAll = $conn->query($sqlAll);

                                    if (isset($resultAll) && $resultAll->num_rows > 0) {
                                        while ($row = $resultAll->fetch_assoc()) {
                                            $pro_id = $row['id'];
                                            $pro_name = htmlspecialchars($row['pro_name'], ENT_QUOTES, 'UTF-8');
                                            $category = !empty($row['category_name']) ? htmlspecialchars($row['category_name'], ENT_QUOTES, 'UTF-8') : "Agro Products";
                                            $selling_price = number_format($row['selling_price'], 2);
                                            $img_path = !empty($row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['pro_img']) : "assets/images/product/medium-size/default.png";
                                    ?>
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                <div class="zv-pro-card">
                                                    <div class="zv-img-wrap">
                                                        <span class="zv-badge">Export Quality</span>
                                                        <a href="product-details.php?id=<?php echo $pro_id; ?>">
                                                            <img src="<?php echo $img_path; ?>" alt="<?php echo $pro_name; ?>">
                                                        </a>
                                                    </div>
                                                    <div class="zv-card-body">
                                                        <!-- Category Text Added Here -->
                                                        <div class="zv-pro-category"><?php echo $category; ?></div>
                                                        <div class="zv-rating">
                                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <a href="product-details.php?id=<?php echo $pro_id; ?>" class="zv-pro-title"><?php echo $pro_name; ?></a>
                                                        <div class="zv-pro-price">
                                                            <span class="zv-currency">₹</span><?php echo $selling_price; ?>
                                                        </div>
                                                        <div class="zv-card-footer">
                                                            <a href="product-details.php?id=<?php echo $pro_id; ?>" class="zv-btn-outline"><i class="fa-solid fa-eye"></i> View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo "<div class='col-12 text-center'>No products found.</div>";
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- 2. Dynamic Category Panes -->
                            <?php foreach ($categoriesArray as $cat) {
                                $catId = $cat['cate_id'];
                                $catName = htmlspecialchars($cat['categories'], ENT_QUOTES, 'UTF-8');
                            ?>
                                <div class="tab-pane fade" id="pane-<?php echo $catId; ?>" role="tabpanel">
                                    <div class="row g-4 zv-product-grid">
                                        <?php
                                        // Fetch products specifically for this category tab
                                        $sqlCatProd = "SELECT p.*, c.categories AS category_name FROM products p LEFT JOIN categories c ON p.pro_cate = c.cate_id WHERE p.pro_cate = $catId AND p.status = 1 ORDER BY p.id DESC LIMIT 8";
                                        $resultCatProd = $conn->query($sqlCatProd);

                                        if (isset($resultCatProd) && $resultCatProd->num_rows > 0) {
                                            while ($row = $resultCatProd->fetch_assoc()) {
                                                $pro_id = $row['id'];
                                                $pro_name = htmlspecialchars($row['pro_name'], ENT_QUOTES, 'UTF-8');
                                                $selling_price = number_format($row['selling_price'], 2);
                                                $img_path = !empty($row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['pro_img']) : "assets/images/product/medium-size/default.png";
                                        ?>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                    <div class="zv-pro-card">
                                                        <div class="zv-img-wrap">
                                                            <span class="zv-badge">Export Quality</span>
                                                            <a href="product-details.php?id=<?php echo $pro_id; ?>">
                                                                <img src="<?php echo $img_path; ?>" alt="<?php echo $pro_name; ?>">
                                                            </a>
                                                        </div>
                                                        <div class="zv-card-body">
                                                            <!-- Category Text Added Here -->
                                                            <div class="zv-pro-category"><?php echo $catName; ?></div>
                                                            <div class="zv-rating">
                                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                            </div>
                                                            <a href="product-details.php?id=<?php echo $pro_id; ?>" class="zv-pro-title"><?php echo $pro_name; ?></a>
                                                            <div class="zv-pro-price">
                                                                <span class="zv-currency">₹</span><?php echo $selling_price; ?>
                                                            </div>
                                                            <div class="zv-card-footer">
                                                                <a href="product-details.php?id=<?php echo $pro_id; ?>" class="zv-btn-outline"><i class="fa-solid fa-eye"></i> View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            // Agar is category mein koi product nahi hai
                                            echo "<div class='col-12 text-center py-5'>
                                        <h5 class='text-muted'>No products currently available in this category.</h5>
                                      </div>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Area End Here -->
        <div class="product-area section-padding reveal mt-5">
            <div class="container">
                <!-- Section Title -->
                <div class="section-title text-center pb-5 mb-4">
                    <span class="sub-title text-primary" style="color: var(--bs-primary); font-weight: 600; letter-spacing: 1px; text-transform: uppercase;">See Our Latest</span>
                    <h2 class="title mb-0" style="font-family: 'Playfair Display', serif; font-size: 36px; font-weight: 700;">New Arrivals</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 position-relative">

                        <!-- Custom Swiper Container -->
                        <div class="swiper zv-arrival-slider">
                            <div class="swiper-wrapper py-3">

                                <?php
                                // Fetching only products marked as new_arrival = 1 and joining with categories[cite: 1]
                                $sqlArrivals = "SELECT p.*, c.categories AS category_name FROM products p LEFT JOIN categories c ON p.pro_cate = c.cate_id WHERE p.status = 1 AND p.new_arrival = 1 ORDER BY p.id DESC LIMIT 4";
                                $resultArrivals = $conn->query($sqlArrivals);

                                if (isset($resultArrivals) && $resultArrivals->num_rows > 0) {
                                    while ($row = $resultArrivals->fetch_assoc()) {
                                        $pro_id = $row['id'];
                                        $pro_name = htmlspecialchars($row['pro_name'], ENT_QUOTES, 'UTF-8');
                                        $category = !empty($row['category_name']) ? htmlspecialchars($row['category_name'], ENT_QUOTES, 'UTF-8') : "Agro Products";
                                        $selling_price = number_format($row['selling_price'], 2);

                                        // Fetching product image as stored in DB[cite: 1]
                                        $img_path = !empty($row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['pro_img'], ENT_QUOTES, 'UTF-8') : "assets/images/product/medium-size/default.png";
                                ?>
                                        <!-- Dynamic Product Slide -->
                                        <div class="swiper-slide">
                                            <div class="zv-pro-card">
                                                <div class="zv-img-wrap">
                                                    <span class="zv-badge">New Arrival</span>
                                                    <a href="product-details.php?id=<?php echo $pro_id; ?>">
                                                        <img src="<?php echo $img_path; ?>" alt="<?php echo $pro_name; ?>">
                                                    </a>
                                                </div>
                                                <div class="zv-card-body">
                                                    <div class="zv-pro-category"><?php echo $category; ?></div>
                                                    <div class="zv-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a href="product-details.php?id=<?php echo $pro_id; ?>" class="zv-pro-title"><?php echo $pro_name; ?></a>
                                                    <div class="zv-pro-price">
                                                        <span class="zv-currency">₹</span><?php echo $selling_price; ?>
                                                    </div>
                                                    <div class="zv-card-footer">
                                                        <a href="product-details.php?id=<?php echo $pro_id; ?>" class="zv-btn-outline"><i class="fa-solid fa-eye"></i> View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "<div class='text-center w-100 py-4 text-muted'>New arrival products will be updated soon.</div>";
                                }
                                ?>

                            </div>
                        </div>

                        <!-- Custom Navigation Arrows -->
                        <div class="zv-swiper-btn-prev shadow-sm"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="zv-swiper-btn-next shadow-sm"><i class="fa-solid fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Banner Area -->
        <div class="banner-area banner-with-parallax py-10" data-bg-image="assets/images/banner/2-1-1920x523.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="parallax-img-wrap">
                            <div class="papaya">
                                <div class="scene fill">
                                    <div class="expand-width" data-depth="0.2">
                                        <img src="assets/images/slider/inner-img/peanuts.png" alt="Banner Images">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="banner-content text-white text-center text-md-start">
                            <div class="section-title">
                                <span class="sub-title">New Offer Products</span>
                                <h2 class="title font-size-60 mb-6">SAVE 20% OFF</h2>
                            </div>
                            <div class="countdown-wrap">
                                <div class="countdown item-4" data-countdown="2023/01/01" data-format="short">
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time daysLeft"></span>
                                        <span class="countdown__text daysText"></span>
                                    </div>
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time hoursLeft"></span>
                                        <span class="countdown__text hoursText"></span>
                                    </div>
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time minsLeft"></span>
                                        <span class="countdown__text minsText"></span>
                                    </div>
                                    <div class="countdown__item">
                                        <span class="countdown__time secsLeft"></span>
                                        <span class="countdown__text secsText"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrap pt-10">
                                <a class="btn btn-custom-size lg-size btn-white rounded-0" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- ==========================================
     PREMIUM CATEGORY SLIDER SECTION
=========================================== -->
        <div class="category-area section-padding reveal">
            <div class="container">
                <div class="section-title text-center pb-5 mb-4">
                    <span class="sub-title text-primary" style="color: var(--bs-primary); font-weight: 600; letter-spacing: 1px; text-transform: uppercase;">Discover By</span>
                    <h2 class="title mb-0" style="font-family: 'Playfair Display', serif; font-size: 36px; font-weight: 700;">Top Categories</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 position-relative">

                        <!-- Custom Category Swiper -->
                        <div class="swiper zv-category-slider">
                            <div class="swiper-wrapper py-3">

                                <?php
                                if (isset($resultCate) && $resultCate->num_rows > 0) {
                                    while ($row = $resultCate->fetch_assoc()) {
                                        // Important: Using cate_id for relation
                                        $c_id = $row['cate_id'];
                                        $c_name = htmlspecialchars($row['categories'], ENT_QUOTES, 'UTF-8');

                                        // Image handling (Default image agar blank hai)
                                        $c_img = !empty($row['image']) ? "admin/uploads/category/" . htmlspecialchars($row['image']) : "assets/images/product/medium-size/default-category.png";
                                ?>
                                        <!-- Dynamic Category Slide -->
                                        <div class="swiper-slide">
                                            <!-- Clicking this will take user to the new page with cate_id -->
                                            <a href="category-products.php?id=<?php echo $c_id; ?>" class="zv-category-card shadow-sm">
                                                <div class="zv-category-img">
                                                    <img src="<?php echo $c_img; ?>" alt="<?php echo $c_name; ?>">
                                                    <div class="zv-category-overlay"></div>
                                                </div>
                                                <div class="zv-category-content">
                                                    <h3 class="zv-category-title"><?php echo $c_name; ?></h3>
                                                    <span class="zv-category-link">View Products <i class="fa-solid fa-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "<div class='text-center w-100 py-4'>No categories found.</div>";
                                }
                                ?>

                            </div>
                        </div>

                        <!-- Category Navigation Arrows -->
                        <div class="zv-cat-btn-prev shadow-sm"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="zv-cat-btn-next shadow-sm"><i class="fa-solid fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>>

        <section class="blog-section section-padding reveal">
            <div class="container">
                <div class="section-title-wrap text-center mb-5">
                    <span class="sub-title">Latest Updates</span>
                    <h2 class="section-title">Industry News & Blogs</h2>
                </div>

                <div class="blog-grid-wrapper">

                    <?php
                    if ($resultBlog && $resultBlog->num_rows > 0) {
                        while ($row = $resultBlog->fetch_assoc()) {
                            $blog_id = $row['id'];
                            $title = htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
                            $author = !empty($row['author']) ? htmlspecialchars($row['author'], ENT_QUOTES, 'UTF-8') : "Admin";
                            $date = date('d M, Y', strtotime($row['created_at']));

                            // Decode full content (For Modal)
                            $raw_content = html_entity_decode($row['content']);

                            // Excerpt for the Card (stripped of tags)
                            $clean_text = strip_tags($raw_content);
                            $excerpt = mb_strlen($clean_text) > 120 ? mb_substr($clean_text, 0, 120) . "..." : $clean_text;

                            // FIX: Make strings safe for HTML data-* attributes so they don't break the popup
                            $safe_long_text = htmlspecialchars($clean_text, ENT_QUOTES, 'UTF-8');
                            $safe_short_text = htmlspecialchars($excerpt, ENT_QUOTES, 'UTF-8');

                            $img_path = !empty($row['image']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['image']) : "https://placehold.co/800x600/eeeeee/999999?text=Blog+Image";
                    ?>
                            <!-- Blog Card -->
                            <div class="zen-blog-card">
                                <div class="card-image-wrap">
                                    <img src="<?php echo $img_path; ?>" alt="<?php echo $title; ?>">
                                </div>
                                <div class="card-content">
                                    <div class="blog-meta">
                                        <span><i class="fa-solid fa-user-tie"></i> <?php echo $author; ?></span>
                                        <span><i class="fa-solid fa-calendar-days"></i> <?php echo $date; ?></span>
                                    </div>

                                    <!-- FIX: Properly closed the h3 tag here -->
                                    <h3 class="blog-title"><?php echo $title; ?></h3>

                                    <p class="blog-short-desc"><?php echo $excerpt; ?></p>

                                    <!-- Button with Data Attributes -->
                                    <button type="button" class="btn-read-more open-blog-modal"
                                        data-img="<?php echo $img_path; ?>"
                                        data-admin="<?php echo $author; ?>"
                                        data-date="<?php echo $date; ?>"
                                        data-title="<?php echo $title; ?>"
                                        data-short="<?php echo $safe_short_text; ?>"
                                        data-long="<?php echo $safe_long_text; ?>">
                                        READ MORE <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </section>

        <!-- ==========================================
 BLOG POPUP MODAL (Hidden by default)
=========================================== -->
        <div id="zenBlogModal" class="zen-custom-modal">
            <div class="zen-modal-content blog-modal-content shadow-lg">
                <!-- Close Button -->
                <span class="zen-modal-close" id="closeBlogModal"><i class="fa-solid fa-xmark"></i></span>

                <div class="blog-modal-scroll-area">
                    <!-- Modal Hero Image -->
                    <div class="blog-modal-img-wrap mb-4">
                        <img id="blogModalImage" src="" alt="Blog Header">
                    </div>

                    <!-- Modal Content -->
                    <div class="blog-modal-text-content">
                        <div class="blog-meta mb-3">
                            <span id="blogModalAdmin" class="meta-item"><i class="fa-solid fa-user-tie"></i> Admin</span>
                            <span id="blogModalDate" class="meta-item ms-4"><i class="fa-solid fa-calendar-days"></i> Date</span>
                        </div>

                        <h2 id="blogModalTitle" class="modal-title-custom mb-2"></h2>
                        <h5 id="blogModalShort" class="modal-short-desc text-muted mb-4"></h5>

                        <div class="divider-line mb-4"></div>

                        <div id="blogModalLong" class="modal-long-desc blog-reading-text"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Footer Area -->
        <?php include("./include/footer.php") ?>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="#">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery.waypoints.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/parallax.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (typeof Swiper !== 'undefined') {
                var categorySlider = new Swiper(".zv-category-slider", {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false
                    },
                    navigation: {
                        nextEl: ".zv-cat-btn-next",
                        prevEl: ".zv-cat-btn-prev",
                    },
                    breakpoints: {
                        576: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 30
                        }
                    }
                });
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Check if Swiper library is loaded
            if (typeof Swiper !== 'undefined') {
                var arrivalSlider = new Swiper(".zv-arrival-slider", {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: ".zv-swiper-btn-next",
                        prevEl: ".zv-swiper-btn-prev",
                    },
                    breakpoints: {
                        // when window width is >= 576px
                        576: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        // when window width is >= 768px
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                        // when window width is >= 1024px
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 30
                        }
                    }
                });
            }
        });
    </script>

</body>


<!-- Mirrored from template.hasthemes.com/harmic/harmic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2026 09:53:08 GMT -->

</html>