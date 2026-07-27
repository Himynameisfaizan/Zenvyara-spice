<?php
include("./admin/db-conn.php");


$category_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$category_name = "Category Not Found";

// 1. Pehle Category ka naam fetch karte hain Page Title ke liye
if ($category_id > 0) {
    $catQuery = "SELECT categories FROM categories WHERE cate_id = $category_id LIMIT 1";
    $catResult = $conn->query($catQuery);
    if (isset($catResult) && $catResult->num_rows > 0) {
        $catRow = $catResult->fetch_assoc();
        $category_name = htmlspecialchars($catRow['categories'], ENT_QUOTES, 'UTF-8');
    }
}

$pageTitle = $category_name . " Products";

include("./include/header.php");
include("./include/breadcrumb.php");

// 2. Ab is category ke under aane wale products fetch karte hain
$prodQuery = "SELECT * FROM products WHERE pro_cate = $category_id AND status = 1 ORDER BY id DESC";
$resultProducts = $conn->query($prodQuery);
?>

<section class="products-section section-padding reveal">
    <div class="container">
        
        <div class="section-title-wrap text-center mb-5">
            <span class="sub-title">Explore Our</span>
            <h2 class="section-title"><?php echo $category_name; ?> Range</h2>
        </div>

        <div class="row g-4 zv-product-grid">

            <?php
            if (isset($resultProducts) && $resultProducts->num_rows > 0) {
                while ($row = $resultProducts->fetch_assoc()) {
                    $p_id = $row['id'];
                    $p_name = htmlspecialchars($row['pro_name'], ENT_QUOTES, 'UTF-8');
                    $p_price = number_format($row['selling_price'], 2);
                    $p_img = !empty($row['pro_img']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['pro_img'], ENT_QUOTES, 'UTF-8') : "assets/images/product/medium-size/default.png";
            ?>
                    <!-- Reusing your beautiful Product Grid Card -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="zv-pro-card">
                            <div class="zv-img-wrap">
                                <a href="product-details.php?id=<?php echo $p_id; ?>">
                                    <img src="<?php echo $p_img; ?>" alt="<?php echo $p_name; ?>">
                                </a>
                            </div>
                            <div class="zv-card-body">
                                <div class="zv-pro-category"><?php echo $category_name; ?></div>
                                <div class="zv-rating">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <a href="product-details.php?id=<?php echo $p_id; ?>" class="zv-pro-title"><?php echo $p_name; ?></a>
                                <div class="zv-pro-price"><span class="zv-currency">₹</span><?php echo $p_price; ?></div>
                                <div class="zv-card-footer">
                                    <a href="product-details.php?id=<?php echo $p_id; ?>" class="zv-btn-outline"><i class="fa-solid fa-eye"></i> View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php 
                }
            } else {
                echo "<div class='col-12 text-center py-5'>
                        <h4>No products currently available in this category.</h4>
                        <p class='text-muted mt-2'>Please check back later or explore our other categories.</p>
                        <a href='product.php' class='btn-quote-large mt-3'>View All Products</a>
                      </div>";
            }
            ?>

        </div>
    </div>
</section>

<?php include("./include/footer.php"); ?>