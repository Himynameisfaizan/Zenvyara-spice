<?php

include("./admin/db-conn.php");


// URL se Product ID fetch karna
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Main Product Query (Category Join ke sath)
$query = "SELECT p.*, c.categories AS category_name FROM products p LEFT JOIN categories c ON p.pro_cate = c.cate_id WHERE p.id = $product_id AND p.status = 1";
$resultProduct = $conn->query($query); // Ise uncomment karein jab aap DB connect karein

// Check if product exists
if (isset($resultProduct) && $resultProduct->num_rows > 0) {
    $product = $resultProduct->fetch_assoc();
    
    $p_name = htmlspecialchars($product['pro_name'], ENT_QUOTES, 'UTF-8');
    $p_category = !empty($product['category_name']) ? htmlspecialchars($product['category_name'], ENT_QUOTES, 'UTF-8') : "Agro Product";
    $p_mrp = number_format($product['mrp'], 2);
    $p_selling_price = number_format($product['selling_price'], 2);
    
    // DB mein HTML content save hai (<p> tags etc.), isliye decode kiya hai
    $p_short_desc = html_entity_decode($product['short_desc']);
    $p_long_desc = html_entity_decode($product['description']);
    
    $img_path = !empty($product['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($product['pro_img'], ENT_QUOTES, 'UTF-8') : "assets/images/product/medium-size/default.png";
    
    $pageTitle = $p_name;
} else {
    $pageTitle = "Product Not Found";
}

include("./include/header.php");
include("./include/breadcrumb.php");
global $site; 
?>

<?php if (isset($product)) { ?>
<!-- ===================================
   PRODUCT DETAILS SECTION
==================================== -->
<section class="product-details-area section-padding reveal">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side: Product Image Gallery -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="product-image-wrapper">
                    <div class="main-image-box shadow">
                        <span class="product-badge">Export Quality</span>
                        <img src="<?php echo $img_path; ?>" alt="<?php echo $p_name; ?>" id="mainProductImage">
                    </div>
                </div>
            </div>

            <!-- Right Side: Product Information -->
            <div class="col-lg-6">
                <div class="product-info-content">
                    <span class="category-text"><?php echo $p_category; ?></span>
                    <h2 class="product-title"><?php echo $p_name; ?></h2>

                    <div class="price-wrap">
                        <?php if ($product['mrp'] > $product['selling_price']) { ?>
                            <span class="mrp-price">MRP: <del>₹<?php echo $p_mrp; ?> / Ton</del></span>
                        <?php } ?>
                        <span class="export-price">₹<?php echo $p_selling_price; ?> <span>/ Ton (FOB)</span></span>
                    </div>

                    <!-- Short Description from DB -->
                    <div class="product-overview">
                        <?php echo $p_short_desc; ?>
                    </div>

                    <ul class="b2b-meta-list">
                        <li><strong>Origin:</strong> Gujarat, India</li>
                        <li><strong>MOQ (Minimum Order):</strong> 5 Metric Tons</li>
                        <li><strong>Packaging:</strong> 25kg / 50kg PP Bags (Custom Available)</li>
                        <li><strong>Status:</strong> Ready for Dispatch</li>
                    </ul>

                    <div class="action-buttons mt-4">
                        <a href="<?php echo $site; ?>contact.php" class="btn-quote-large">
                            Request A Quote <i class="fa-solid fa-paper-plane"></i>
                        </a>
                        <a href="https://wa.me/917874616897?text=Hello, I want to inquire about <?php echo urlencode($p_name); ?>" target="_blank" class="btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- ===================================
           PRODUCT DESCRIPTION TABS
        ==================================== -->
        <div class="product-tabs-wrapper mt-5 reveal">
            <ul class="nav nav-tabs custom-zen-tabs" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Description</button>
                </li>
                <!-- Specifications Tab Tab (Static for now, can be dynamic if added to DB later) -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="spec-tab" data-bs-toggle="tab" data-bs-target="#spec" type="button" role="tab">Specifications</button>
                </li>
            </ul>
            
            <div class="tab-content custom-tab-content shadow-sm" id="productTabContent">
                <div class="tab-pane fade show active" id="desc" role="tabpanel">
                    <!-- Long Description from DB -->
                    <?php echo $p_long_desc; ?>
                </div>
                
                <div class="tab-pane fade" id="spec" role="tabpanel">
                    <table class="table table-bordered modern-table">
                        <tbody>
                            <tr><th>Purity</th><td>99% Min</td></tr>
                            <tr><th>Moisture</th><td>8% Max</td></tr>
                            <tr><th>Admixture</th><td>1% Max</td></tr>
                            <tr><th>Form</th><td>Solid Seeds/Powder</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================================
   RELATED PRODUCTS CAROUSEL
==================================== -->
<section class="related-products bg-light-beige section-padding reveal">
    <div class="container">
        <div class="section-title-wrap text-center mb-5">
            <span class="sub-title">Explore More</span>
            <h2 class="section-title">Related Products</h2>
        </div>

        <!-- Swiper Carousel -->
        <div class="swiper relatedProductSwiper">
            <div class="swiper-wrapper">
                
                <?php
                // Fetch other products excluding the current one
                $relQuery = "SELECT * FROM products WHERE id != $product_id AND status = 1 ORDER BY id DESC LIMIT 6";
                $resultRelated = $conn->query($relQuery);
                
                if (isset($resultRelated) && $resultRelated->num_rows > 0) {
                    while ($relRow = $resultRelated->fetch_assoc()) {
                        $rel_id = $relRow['id'];
                        $rel_name = htmlspecialchars($relRow['pro_name'], ENT_QUOTES, 'UTF-8');
                        $rel_img = !empty($relRow['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($relRow['pro_img'], ENT_QUOTES, 'UTF-8') : "assets/images/product/medium-size/default.png";
                ?>
                        <!-- Dynamic Slide -->
                        <div class="swiper-slide">
                            <div class="zen-product-card">
                                <div class="card-image-wrap">
                                    <a href="product-details.php?id=<?php echo $rel_id; ?>">
                                        <img src="<?php echo $rel_img; ?>" alt="<?php echo $rel_name; ?>">
                                    </a>
                                </div>
                                <div class="card-content text-center">
                                    <h3 class="product-name"><?php echo $rel_name; ?></h3>
                                    <a href="product-details.php?id=<?php echo $rel_id; ?>" class="btn-view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                <?php 
                    }
                } 
                ?>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>

<?php } else { ?>
    <!-- Displayed if product ID is invalid or not found -->
    <div class="container section-padding text-center">
        <h2>Product Not Found</h2>
        <p>The product you are looking for does not exist or has been removed.</p>
        <a href="<?php echo $site; ?>products.php" class="btn-quote-large mt-3">Back to Products</a>
    </div>
<?php } ?>


<script>
    // Initialize Swiper for Related Products
    document.addEventListener("DOMContentLoaded", function() {
        if (typeof Swiper !== 'undefined') {
            var swiper = new Swiper(".relatedProductSwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: false, // Set to false to avoid duplicating dynamic elements incorrectly if few products
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 2, spaceBetween: 20 },
                    768: { slidesPerView: 3, spaceBetween: 30 },
                    1024: { slidesPerView: 4, spaceBetween: 30 },
                },
            });
        }
    });
</script>

<?php include("./include/footer.php") ?>