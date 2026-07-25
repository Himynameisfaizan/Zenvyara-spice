<?php

include("./admin/db-conn.php");

$sql = "SELECT * FROM `products` LIMIT 4";
$sqlArr = "SELECT * FROM `products` order by id LIMIT 6;";
$result = $conn->query($sql);
$resultArr = $conn->query($sqlArr);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Template - global export</title>


</head>

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
        <div class="product-area section-space-top-100 py-5 bg-light my-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Styled Tabs -->
                        <ul class="nav product-tab-nav py-10 d-flex justify-content-center gap-3 border-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active custom-tab" id="all-items-tab" data-bs-toggle="tab" href="#all-items" role="tab">
                                    <span class="d-block mb-2"><img src="assets/images/product/icon/1.png" alt="Icon" width="30"></span>
                                    All Items
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-tab" id="seeds-tab" data-bs-toggle="tab" href="#all-items" role="tab">
                                    <span class="d-block mb-2"><img src="assets/images/product/icon/ajwain.png" alt="Icon" width="30"></span>
                                    Seeds & Spices
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-tab" id="powders-tab" data-bs-toggle="tab" href="#all-items" role="tab">
                                    <span class="d-block mb-2"><img src="assets/images/product/icon/fennel.png" alt="Icon" width="30"></span>
                                    Powders
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-tab" id="herbs-tab" data-bs-toggle="tab" href="#all-items" role="tab">
                                    <span class="d-block mb-2"><img src="assets/images/product/icon/moringa.png" alt="Icon" width="30"></span>
                                    Herbs & Leaves
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-tab" id="nuts-tab" data-bs-toggle="tab" href="#all-items" role="tab">
                                    <span class="d-block mb-2"><img src="assets/images/product/icon/peanuts.png" alt="Icon" width="30"></span>
                                    Nuts & Grains
                                </a>
                            </li>
                        </ul>

                        <!-- Product Grid -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all-items" role="tabpanel">
                                <div class="row g-4 zv-product-grid">

                                    <!-- Product Item 1 -->
                                    <?php
                                    if ($result && $result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                <div class="zv-pro-card">
                                                    <div class="zv-img-wrap">
                                                        <span class="zv-badge">Export Quality</span>
                                                        <a href="#">
                                                            <img src="assets/images/product/medium-size/moringa.png" alt="Moringa Powder">
                                                        </a>
                                                    </div>
                                                    <div class="zv-card-body">
                                                        <div class="zv-rating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <a href="#" class="zv-pro-title"><?php echo $row["pro_name"]; ?></a>
                                                        <div class="zv-pro-price">
                                                            <span class="zv-currency">₹</span>80.00
                                                        </div>
                                                        <div class="zv-card-footer">
                                                            <a href="#" class="zv-btn-outline"><i class="fa-solid fa-eye"></i> View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="assets/images/banner/castor.png" alt="Banner Image">
                                <div class="inner-content">
                                    <h5 class="offer">-10% Off</h5>
                                    <h4 class="title mb-5">Pure<br>Castor</h4>
                                    <div class="button-wrap">
                                        <a class="btn btn-primary btn-white-hover rounded-0" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                        <div class="banner-item">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="assets/images/banner/psyllium-husk.png" alt="Banner Image">
                                <div class="inner-content">
                                    <h5 class="offer">-20% Off</h5>
                                    <h4 class="title mb-5">Psyllium<br>Husk</h4>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                        <div class="banner-item">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="assets/images/banner/fennel.png" alt="Banner Image">
                                <div class="inner-content">
                                    <h5 class="offer">-30% Off</h5>
                                    <h4 class="title mb-5">Fresh<br>Fennel</h4>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- ==========================================
     LATEST ARRIVAL PRODUCTS SLIDER
=========================================== -->
        <div class="product-area section-padding reveal">
            <div class="container">
                <!-- Section Title -->
                <div class="section-title text-center pb-5 mb-4">
                    <span class="sub-title text-primary" style="color: var(--bs-primary); font-weight: 600; letter-spacing: 1px; text-transform: uppercase;">See Our Latest</span>
                    <h2 class="title mb-0" style="font-family: 'Playfair Display', serif; font-size: 36px; font-weight: 700;">Arrival Products</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 position-relative">

                        <!-- Custom Swiper Container -->
                        <div class="swiper zv-arrival-slider">
                            <div class="swiper-wrapper py-3">

                                <!-- Slide 1: Chickpeas -->
                                 <?php 
                                 if($result && $result->num_rows> 0){
                                    while($row = $result->fetch_assoc()){
                                        
                                 ?>
                                <div class="swiper-slide">
                                    <div class="zv-pro-card">
                                        <div class="zv-img-wrap">
                                            <span class="zv-badge">New Arrival</span>
                                            <a href="#">
                                                <img src="assets/images/product/medium-size/chickpeas.png" alt="Premium Chickpeas">
                                            </a>
                                        </div>
                                        <div class="zv-card-body">
                                            <div class="zv-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <a href="#" class="zv-pro-title"><?php echo $row['pro_name']?></a>
                                            <div class="zv-pro-price">
                                                <span class="zv-currency">₹</span>80.00
                                            </div>
                                            <div class="zv-card-footer">
                                                <a href="#" class="zv-btn-outline"><i class="fa-solid fa-eye"></i> View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php }} ?>
                                <!-- Slide 2: Fennel -->
                                <div class="swiper-slide">
                                    <div class="zv-pro-card">
                                        <div class="zv-img-wrap">
                                            <a href="#">
                                                <img src="assets/images/product/medium-size/fennel.png" alt="Fennel Seeds">
                                            </a>
                                        </div>
                                        <div class="zv-card-body">
                                            <div class="zv-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <a href="#" class="zv-pro-title">Fennel Seeds (Saunf)</a>
                                            <div class="zv-pro-price">
                                                <span class="zv-currency">₹</span>80.00
                                            </div>
                                            <div class="zv-card-footer">
                                                <a href="#" class="zv-btn-outline"><i class="fa-solid fa-eye"></i> View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3: Moringa -->
                                <div class="swiper-slide">
                                    <div class="zv-pro-card">
                                        <div class="zv-img-wrap">
                                            <a href="#">
                                                <img src="assets/images/product/medium-size/moringa.png" alt="Moringa Powder">
                                            </a>
                                        </div>
                                        <div class="zv-card-body">
                                            <div class="zv-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <a href="#" class="zv-pro-title">Organic Moringa Powder</a>
                                            <div class="zv-pro-price">
                                                <span class="zv-currency">₹</span>80.00
                                            </div>
                                            <div class="zv-card-footer">
                                                <a href="#" class="zv-btn-outline"><i class="fa-solid fa-eye"></i> View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add more slides here following the same structure -->

                            </div>
                        </div>

                        <!-- Custom Navigation Arrows (Outside the wrapper to prevent cutting off) -->
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

        <!-- Begin Product Area -->
        <div class="product-area section-space-top-100">
            <div class="container">
                <div class="section-title text-center pb-55">
                    <span class="sub-title text-primary">See Our Latest</span>
                    <h2 class="title mb-0">Arrival Products</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container product-list-slider border-issue">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="assets/images/product/small-size/1-1-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="#">Black Pepper Grains</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="assets/images/product/small-size/1-5-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="#">Black Paper Read</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="assets/images/product/small-size/1-1-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="#">Black paper grains</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="assets/images/product/small-size/1-1-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="#">Black paper grains</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="assets/images/product/small-size/1-5-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="#">Black Peppepr Read</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="assets/images/product/small-size/1-5-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="#">Black Paper Read</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <section class="blog-section section-padding reveal">
            <div class="container">
                <div class="section-title-wrap text-center mb-5">
                    <span class="sub-title">Latest Updates</span>
                    <h2 class="section-title">Industry News & Blogs</h2>
                </div>

                <div class="blog-grid-wrapper">

                    <!-- Blog Card 1 -->
                    <div class="zen-blog-card">
                        <div class="card-image-wrap">
                            <img src="assets/images/product/medium-size/moringa.png" alt="Spice Export Trends">
                        </div>
                        <div class="card-content">
                            <div class="blog-meta">
                                <span><i class="fa-solid fa-user-tie"></i> Zenvyara Admin</span>
                                <span><i class="fa-solid fa-calendar-days"></i> 23 Jul 2026</span>
                            </div>
                            <h3 class="blog-title">Global Spice Export Trends in 2026</h3>
                            <p class="blog-short-desc">Discover the rising demand for organic spices in the European market...</p>

                            <!-- Button with Data Attributes -->
                            <button type="button" class="btn-read-more open-blog-modal"
                                data-img="assets/images/product/medium-size/moringa.png"
                                data-admin="Zenvyara Admin"
                                data-date="23 Jul 2026"
                                data-title="Global Spice Export Trends in 2026"
                                data-short="Discover the rising demand for organic spices in the European market and how exporters are adapting."
                                data-long="The international spice trade has seen a massive shift towards organic and ethically sourced products. In 2026, European and North American buyers are prioritizing transparency in the supply chain. At Zenvyara, we have adapted to these trends by implementing strict quality control and direct-to-farm procurement strategies. This ensures that every batch we export meets the highest global standards, giving our clients a competitive edge in their local markets.">
                                READ MORE <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="zen-blog-card">
                        <div class="card-image-wrap">
                            <img src="assets/images/product/medium-size/peanuts-1.png" alt="Quality Control">
                        </div>
                        <div class="card-content">
                            <div class="blog-meta">
                                <span><i class="fa-solid fa-user-tie"></i> Quality Team</span>
                                <span><i class="fa-solid fa-calendar-days"></i> 18 Jul 2026</span>
                            </div>
                            <h3 class="blog-title">Maintaining Purity in Spice Processing</h3>
                            <p class="blog-short-desc">How our advanced sorting technology ensures 99.9% purity in every bag...</p>

                            <!-- Button with Data Attributes -->
                            <button type="button" class="btn-read-more open-blog-modal"
                                data-img="assets/images/product/medium-size/peanuts-1.png"
                                data-admin="Quality Team"
                                data-date="18 Jul 2026"
                                data-title="Maintaining Purity in Spice Processing"
                                data-short="How our advanced sorting technology ensures 99.9% purity in every bag."
                                data-long="Quality control is the backbone of the agro-export industry. Adulteration is a major concern for global buyers, which is why Zenvyara utilizes state-of-the-art optical color sorters and magnetic separators. Our automated processing lines remove impurities without compromising the natural essential oils of the spices. This blog explains our step-by-step cleaning process that guarantees 99.9% purity.">
                                READ MORE <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Add more blog cards as needed -->

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