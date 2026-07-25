<?php
$pageTitle = "Product Details";
include("./include/header.php");
include("./include/breadcrumb.php");
?>

<?php global $site; ?>

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
                        <!-- Modern Tag -->
                        <span class="product-badge">100% Organic</span>
                        <img src="assets/images/product/medium-size/moringa.png" alt="Premium Mustard Seeds" id="mainProductImage">
                    </div>
                  
                </div>
            </div>

            <!-- Right Side: Product Information -->
            <div class="col-lg-6">
                <div class="product-info-content">
                    <span class="category-text">Agro Product</span>
                    <h2 class="product-title">Premium Yellow Mustard Seeds</h2>

                    <div class="price-wrap">
                        <span class="mrp-price">MRP: <del>₹1,289.00 / Ton</del></span>
                        <span class="export-price">₹1,149.00 <span>/ Ton (FOB)</span></span>
                    </div>

                    <p class="product-overview">
                        Our premium yellow mustard seeds are ethically sourced from the finest farms. Known for their pungent flavor, rich aroma, and high oil content, they are perfectly processed to meet international food safety standards.
                    </p>

                    <!-- B2B Meta List (Improvement) -->
                    <ul class="b2b-meta-list">
                        <li><strong>Origin:</strong> Gujarat, India</li>
                        <li><strong>MOQ (Minimum Order):</strong> 5 Metric Tons</li>
                        <li><strong>Packaging:</strong> 25kg / 50kg PP Bags (Custom Available)</li>
                        <li><strong>Shelf Life:</strong> 24 Months</li>
                    </ul>

                    <div class="action-buttons mt-4">
                        <a href="<?php echo $site; ?>contact.php" class="btn-quote-large">
                            Request A Quote <i class="fa-solid fa-paper-plane"></i>
                        </a>
                        <a href="#" class="btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- ===================================
           PRODUCT DESCRIPTION TABS (Modern Touch)
        ==================================== -->
        <div class="product-tabs-wrapper mt-5 reveal">
            <ul class="nav nav-tabs custom-zen-tabs" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="spec-tab" data-bs-toggle="tab" data-bs-target="#spec" type="button" role="tab">Specifications</button>
                </li>
            </ul>
            <div class="tab-content custom-tab-content shadow-sm" id="productTabContent">
                <div class="tab-pane fade show active" id="desc" role="tabpanel">
                    <h4>Detailed Overview</h4>
                    <p>Zenvyara Global Export offers the highest quality mustard seeds, carefully cleaned and sorted using advanced machinery. Our seeds guarantee strong flavor and high nutritional value, making them ideal for oil extraction, seasoning, and culinary uses globally.</p>
                </div>
                <div class="tab-pane fade" id="spec" role="tabpanel">
                    <table class="table table-bordered modern-table">
                        <tbody>
                            <tr>
                                <th>Purity</th>
                                <td>99% Min</td>
                            </tr>
                            <tr>
                                <th>Moisture</th>
                                <td>8% Max</td>
                            </tr>
                            <tr>
                                <th>Admixture</th>
                                <td>1% Max</td>
                            </tr>
                            <tr>
                                <th>Form</th>
                                <td>Solid Seeds</td>
                            </tr>
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
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="zen-product-card">
                        <div class="card-image-wrap">
                            <img src="assets/images/product/medium-size/Chickpeas.png" alt="Chickpeas">
                        </div>
                        <div class="card-content text-center">
                            <h3 class="product-name">CHICKPEAS</h3>
                            <a href="#" class="btn-view-details">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="zen-product-card">
                        <div class="card-image-wrap">
                            <img src="assets/images/product/medium-size/fennel.png" alt="Fennel">
                        </div>
                        <div class="card-content text-center">
                            <h3 class="product-name">FENNEL</h3>
                            <a href="#" class="btn-view-details">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="zen-product-card">
                        <div class="card-image-wrap">
                            <img src="assets/images/product/medium-size/peanuts-1.png" alt="Cumin">
                        </div>
                        <div class="card-content text-center">
                            <h3 class="product-name">CUMIN SEEDS</h3>
                            <a href="#" class="btn-view-details">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Add more slides as needed -->
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>


<script>
    // Image Thumbnail Switcher
    function changeImage(src) {
        document.getElementById('mainProductImage').src = src;

        // Active class toggle logic (Optional)
        let thumbs = document.querySelectorAll('.image-thumbnails img');
        thumbs.forEach(thumb => thumb.classList.remove('thumb-active'));
        event.target.classList.add('thumb-active');
    }

    // Initialize Swiper for Related Products
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".relatedProductSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
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
                },
            },
        });
    });
</script>

<?php include("./include/footer.php") ?>