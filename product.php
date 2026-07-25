<?php

$pageTitle = "Product";

include("./include/header.php");
include("./include/breadcrumb.php");

?>

<!-- Products Section Start -->
<section class="products-section section-padding reveal">
    <div class="container">
        <!-- Section Heading -->
        <div class="section-title-wrap text-center">
            <span class="sub-title">Export Quality</span>
            <h2 class="section-title">Our Premium Spices</h2>
        </div>

        <!-- Product Grid -->
        <div class="product-grid-wrapper">

            <!-- Product Card 1 -->
            <div class="zen-product-card">
                <div class="card-image-wrap">
                    <img src="assets/images/product/medium-size/mustard.png" alt="Mustard Seeds">
                </div>
                <div class="card-content">
                    <h3 class="product-name">MUSTARD</h3>
                    <div class="price-box">
                        <span class="current-price">₹1,149.00</span>
                        <span class="old-price">₹1,289.00</span>
                    </div>
                    <ul class="product-meta-info">
                        <li><i class="fa-solid fa-layer-group"></i> <strong>Category:</strong> Agro Product</li>
                        <li><i class="fa-solid fa-box-open"></i> <strong>Packaging:</strong> Custom packaging available</li>
                        <li><i class="fa-solid fa-truck-fast"></i> <strong>Status:</strong> Ready for Export</li>
                    </ul>
                    <?php global $site; ?>
                    <!-- Redirects to details page with product ID -->
                    <a href="<?php echo $site; ?>product-details.php?id=1" class="btn-view-details">
                        VIEW DETAILS <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="zen-product-card">
                <div class="card-image-wrap">
                    <img src="assets/images/product/medium-size/Chickpeas.png" alt="Chickpeas">
                </div>
                <div class="card-content">
                    <h3 class="product-name">CHICKPEAS</h3>
                    <div class="price-box">
                        <span class="current-price">₹839.00</span>
                        <span class="old-price">₹899.00</span>
                    </div>
                    <ul class="product-meta-info">
                        <li><i class="fa-solid fa-layer-group"></i> <strong>Category:</strong> Agro Product</li>
                        <li><i class="fa-solid fa-box-open"></i> <strong>Packaging:</strong> Custom packaging available</li>
                        <li><i class="fa-solid fa-truck-fast"></i> <strong>Status:</strong> Ready for Export</li>
                    </ul>
                    <a href="<?php echo $site; ?>product-details.php?id=2" class="btn-view-details">
                        VIEW DETAILS <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="zen-product-card">
                <div class="card-image-wrap">
                    <img src="assets/images/product/medium-size/fennel.png" alt="Fennel">
                </div>
                <div class="card-content">
                    <h3 class="product-name">FENNEL</h3>
                    <div class="price-box">
                        <span class="current-price">₹739.00</span>
                        <span class="old-price">₹749.00</span>
                    </div>
                    <ul class="product-meta-info">
                        <li><i class="fa-solid fa-layer-group"></i> <strong>Category:</strong> Agro Product</li>
                        <li><i class="fa-solid fa-box-open"></i> <strong>Packaging:</strong> Custom packaging available</li>
                        <li><i class="fa-solid fa-truck-fast"></i> <strong>Status:</strong> Ready for Export</li>
                    </ul>
                    <a href="<?php echo $site; ?>product-details.php?id=3" class="btn-view-details">
                        VIEW DETAILS <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include("./include/footer.php"); ?>