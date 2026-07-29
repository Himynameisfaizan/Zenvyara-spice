<?php
include("./admin/db-conn.php");
$pageTitle = "Our Services";

include("./include/header.php");
include("./include/breadcrumb.php");

$serviceQuery = "SELECT * FROM services ORDER BY id ASC";
$resultServices = $conn->query($serviceQuery); 
?>

<!-- Services Grid Section -->
<section class="services-section section-padding reveal">
    <div class="container">
        <div class="section-title-wrap text-center mb-5">
            <span class="sub-title">What We Offer</span>
            <h2 class="section-title">Our Premium Services</h2>
        </div>

        <div class="service-grid-wrapper">

            <?php
            if (isset($resultServices) && $resultServices->num_rows > 0) {
                while ($row = $resultServices->fetch_assoc()) {
                    // Security aur clean structure ke liye variables assign karna
                    $title = htmlspecialchars($row['service_name'], ENT_QUOTES, 'UTF-8');
                    $short_desc = htmlspecialchars($row['short_desc'], ENT_QUOTES, 'UTF-8');
                    
                    // Long description mein DB se HTML aayega, usko pehle decode kiya, phir data-attribute ke liye safe banaya
                    $raw_long_desc = html_entity_decode($row['long_desc']);
                    $safe_long_desc = htmlspecialchars($raw_long_desc, ENT_QUOTES, 'UTF-8');
                    
                    // Image Path
                    $img_path = !empty($row['img_path']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['img_path'], ENT_QUOTES, 'UTF-8') : "assets/images/product/medium-size/default.png";
            ?>
                    <!-- Dynamic Service Card -->
                    <div class="zen-service-card">
                        <div class="card-image-wrap">
                            <img src="<?php echo $img_path; ?>" alt="<?php echo $title; ?>">
                        </div>
                        <div class="card-content">
                            <h3 class="service-title"><?php echo $title; ?></h3>
                            <p class="service-short-desc"><?php echo $short_desc; ?></p>

                            <!-- Button with Safe Data Attributes for Popup -->
                            <button type="button" class="btn-view-details open-service-modal"
                                data-img="<?php echo $img_path; ?>"
                                data-title="<?php echo $title; ?>"
                                data-short="<?php echo $short_desc; ?>"
                                data-long="<?php echo $safe_long_desc; ?>">
                                VIEW DETAILS <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
            <?php 
                }
            } else {
                echo "<div class='col-12 text-center py-5'><h4>No services updated yet.</h4></div>";
            }
            ?>

        </div>
    </div>
</section>

<div id="zenServiceModal" class="zen-custom-modal">
    <div class="zen-modal-content shadow-lg">
        <!-- Close Button -->
        <span class="zen-modal-close"><i class="fa-solid fa-xmark"></i></span>

        <div class="row align-items-center">
            <!-- Modal Image -->
            <div class="col-md-5 mb-4 mb-md-0">
                <div class="modal-img-wrap">
                    <img id="modalImage" src="" alt="Service Image">
                </div>
            </div>

            <!-- Modal Details -->
            <div class="col-md-7">
                <div class="modal-text-content">
                    <span class="category-text">Our Expertise</span>
                    <h2 id="modalTitle" class="modal-title-custom"></h2>
                    <h5 id="modalShortDesc" class="modal-short-desc"></h5>
                    <div class="divider-line"></div>
                    
                    <div id="modalLongDesc" class="modal-long-desc"></div>

                    <?php global $site; ?>
                    <a href="<?php echo $site; ?>contact.php" class="btn-quote-large mt-4">
                        Enquire Now <i class="fa-solid fa-paper-plane"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById("zenServiceModal");
        const closeBtn = document.querySelector(".zen-modal-close");
        const openBtns = document.querySelectorAll(".open-service-modal");

        // Elements inside Modal
        const modalImage = document.getElementById("modalImage");
        const modalTitle = document.getElementById("modalTitle");
        const modalShort = document.getElementById("modalShortDesc");
        const modalLong = document.getElementById("modalLongDesc");

        // Open Modal Function
        openBtns.forEach(btn => {
            btn.addEventListener("click", function() {
                // Get data from button attributes
                const imgSrc = this.getAttribute("data-img");
                const titleText = this.getAttribute("data-title");
                const shortText = this.getAttribute("data-short");
                const longText = this.getAttribute("data-long");

                // Populate Modal
                modalImage.src = imgSrc;
                modalTitle.innerText = titleText;
                modalShort.innerText = shortText;
                
                // IMPORTANT: Used innerHTML so <p> tags from database render properly
                modalLong.innerHTML = longText; 

                // Show Modal with Animation
                modal.classList.add("show-modal");
                document.body.style.overflow = "hidden"; // Stop background scroll
            });
        });

        // Close Modal Function
        function closeModal() {
            modal.classList.remove("show-modal");
            document.body.style.overflow = "auto"; // Resume background scroll
        }

        closeBtn.addEventListener("click", closeModal);

        // Close if clicked outside the modal content
        window.addEventListener("click", function(event) {
            if (event.target == modal) {
                closeModal();
            }
        });
    });
</script>

<?php include("./include/footer.php"); ?>