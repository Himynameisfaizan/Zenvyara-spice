<?php
$pageTitle = "Blogs";

include("./admin/db-conn.php");
include("./include/header.php");
include("./include/breadcrumb.php");

$blogQuery = "SELECT * FROM blogs WHERE status = 'published' ORDER BY created_at DESC";
$resultBlog = $conn->query($blogQuery); 
?>

<!-- ==========================================
     BLOG GRID SECTION
=========================================== -->
<section class="blog-section section-padding reveal">
    <div class="container">
        <div class="section-title-wrap text-center mb-5">
            <span class="sub-title">Latest Updates</span>
            <h2 class="section-title">Industry News & Blogs</h2>
        </div>

        <div class="blog-grid-wrapper">

            <?php
            if (isset($resultBlog) && $resultBlog->num_rows > 0) {
                while ($row = $resultBlog->fetch_assoc()) {
                    
                    // 1. Basic Data Fetching & Sanitization
                    $b_id = $row['id'];
                    $b_title = htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
                    $b_author = !empty($row['author']) ? htmlspecialchars($row['author'], ENT_QUOTES, 'UTF-8') : "Admin";
                    $b_date = date('d M Y', strtotime($row['created_at']));
                    
                    // 2. Image Path (Checking if image exists)
                    $b_img = !empty($row['image']) ? "admin/assets/img/uploads/" . htmlspecialchars($row['image'], ENT_QUOTES, 'UTF-8') : "assets/images/product/medium-size/default-blog.png";

                    // 3. Content Handling (Short for Card, Long for Modal)
                    $raw_content = html_entity_decode($row['content']); // DB se HTML decode kiya
                    
                    // Short description (Tags hatakar sirf 120 characters dikhana)
                    $clean_text = strip_tags($raw_content);
                    $short_desc = mb_strlen($clean_text) > 120 ? mb_substr($clean_text, 0, 120) . "..." : $clean_text;
                    
                    // 4. Safe Attributes for JavaScript (Sabse zaruri step popup ke liye)
                    $safe_short_desc = htmlspecialchars($short_desc, ENT_QUOTES, 'UTF-8');
                    $safe_long_desc = htmlspecialchars($raw_content, ENT_QUOTES, 'UTF-8'); // Pura HTML pass kar rahe hain
            ?>
                    <!-- Dynamic Blog Card -->
                    <div class="zen-blog-card">
                        <div class="card-image-wrap">
                            <img src="<?php echo $b_img; ?>" alt="<?php echo $b_title; ?>">
                        </div>
                        <div class="card-content">
                            <div class="blog-meta">
                                <span><i class="fa-solid fa-user-tie"></i> <?php echo $b_author; ?></span>
                                <span><i class="fa-solid fa-calendar-days"></i> <?php echo $b_date; ?></span>
                            </div>
                            
                            <h3 class="blog-title"><?php echo $b_title; ?></h3>
                            <p class="blog-short-desc"><?php echo $short_desc; ?></p>

                            <!-- Button with Safe Data Attributes -->
                            <button type="button" class="btn-read-more open-blog-modal"
                                data-img="<?php echo $b_img; ?>"
                                data-admin="<?php echo $b_author; ?>"
                                data-date="<?php echo $b_date; ?>"
                                data-title="<?php echo $b_title; ?>"
                                data-short="<?php echo $safe_short_desc; ?>"
                                data-long="<?php echo $safe_long_desc; ?>">
                                READ MORE <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>
            <?php 
                }
            } else {
                echo "<div class='col-12 text-center py-5'><h4>No blogs published yet.</h4></div>";
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
                <!-- Short description tagal diya modal se kyunki long mein sab include ho jayega -->
                <h5 id="blogModalShort" class="modal-short-desc text-muted mb-4 d-none"></h5>

                <div class="divider-line mb-4"></div>

                <!-- Long description render point -->
                <div id="blogModalLong" class="modal-long-desc blog-reading-text"></div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const blogModal = document.getElementById("zenBlogModal");
    const closeBlogBtn = document.getElementById("closeBlogModal");
    const openBlogBtns = document.querySelectorAll(".open-blog-modal");

    // Elements inside Blog Modal
    const modalImg = document.getElementById("blogModalImage");
    const modalAdmin = document.getElementById("blogModalAdmin");
    const modalDate = document.getElementById("blogModalDate");
    const modalTitle = document.getElementById("blogModalTitle");
    const modalLong = document.getElementById("blogModalLong");

    // Open Modal Logic
    openBlogBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            // Get data from attributes
            const imgSrc = this.getAttribute("data-img");
            const adminText = this.getAttribute("data-admin");
            const dateText = this.getAttribute("data-date");
            const titleText = this.getAttribute("data-title");
            const longText = this.getAttribute("data-long");

            // Populate Modal
            modalImg.src = imgSrc;
            modalAdmin.innerHTML = `<i class="fa-solid fa-user-tie"></i> ${adminText}`;
            modalDate.innerHTML = `<i class="fa-solid fa-calendar-days"></i> ${dateText}`;
            modalTitle.innerText = titleText;
            
            // IMPORTANT: Using innerHTML properly decodes the safe HTML string back to readable <p> tags
            modalLong.innerHTML = longText; 

            // Show Modal & Disable Body Scroll
            blogModal.classList.add("show-modal");
            document.body.style.overflow = "hidden";
        });
    });

    // Close Modal Logic
    function closeBlogModalFunc() {
        blogModal.classList.remove("show-modal");
        document.body.style.overflow = "auto";
    }

    closeBlogBtn.addEventListener("click", closeBlogModalFunc);

    // Close if clicked outside the white box
    window.addEventListener("click", function(event) {
        if (event.target == blogModal) {
            closeBlogModalFunc();
        }
    });
});
</script>

<?php include("./include/footer.php") ?>