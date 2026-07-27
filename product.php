<?php
include("./admin/db-conn.php");

$pageTitle = "Product";

// Database connection file yahan include karna na bhulein (e.g., include("db_connect.php");)
include("./include/header.php");
include("./include/breadcrumb.php");

// Products fetch karne ki query (category join ke sath)
$productQuery = "SELECT p.*, c.categories AS category_name 
        FROM products p
        LEFT JOIN categories c ON p.pro_cate = c.cate_id 
        WHERE p.status = 1 
        ORDER BY p.pro_id DESC";
$resultProducts = $conn->query($productQuery); 
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

            <?php
            // Check if products exist in the database
            if (isset($resultProducts) && $resultProducts->num_rows > 0) {
                while ($row = $resultProducts->fetch_assoc()) {
                    $p_id = $row['id'];
                    // SQL Injection se bachne ke liye data ko sanitize kiya gaya hai
                    $p_name = htmlspecialchars($row['pro_name'], ENT_QUOTES, 'UTF-8');
                    $p_category = !empty($row['category_name']) ? htmlspecialchars($row['category_name'], ENT_QUOTES, 'UTF-8') : "Agro Product";
                    
                    // Prices formatting
                    $p_mrp = number_format($row['mrp'], 2);
                    $p_selling_price = number_format($row['selling_price'], 2);
                    
                    // Image Path handle karna
                    $img_path = !empty($row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['pro_img'], ENT_QUOTES, 'UTF-8') : "assets/images/product/medium-size/default.png";
            ?>
                    <!-- Dynamic Product Card -->
                    <div class="zen-product-card">
                        <div class="card-image-wrap">
                            <img src="<?php echo $img_path; ?>" alt="<?php echo $p_name; ?>">
                        </div>
                        <div class="card-content">
                            <h3 class="product-name"><?php echo $p_name; ?></h3>
                            
                            <div class="price-box">
                                <span class="current-price">₹<?php echo $p_selling_price; ?></span>
                                <?php if ($row['mrp'] > $row['selling_price']) { ?>
                                    <span class="old-price">₹<?php echo $p_mrp; ?></span>
                                <?php } ?>
                            </div>
                            
                            <ul class="product-meta-info">
                                <li><i class="fa-solid fa-layer-group"></i> <strong>Category:</strong> <?php echo $p_category; ?></li>
                                <li><i class="fa-solid fa-box-open"></i> <strong>Packaging:</strong> Custom packaging available</li>
                                <li><i class="fa-solid fa-truck-fast"></i> <strong>Status:</strong> Ready for Export</li>
                            </ul>
                            
                            <?php global $site; ?>
                            <!-- Redirects to details page with product ID -->
                            <a href="product-details.php?id=<?php echo $p_id; ?>" class="btn-view-details">
                                VIEW DETAILS <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            <?php 
                }
            } else {
                // Agar products nahi hain toh ye message show hoga
                echo "<div class='col-12 text-center py-5'><h4>No products available at the moment.</h4></div>";
            }
            ?>

        </div>
    </div>
</section>

<?php include("./include/footer.php"); ?>