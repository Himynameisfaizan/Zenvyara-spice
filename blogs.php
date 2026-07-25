<?php
$pageTitle = "Blogs";

include("./include/header.php");
include("./include/breadcrumb.php");

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
    const modalShort = document.getElementById("blogModalShort");
    const modalLong = document.getElementById("blogModalLong");

    // Open Modal Logic
    openBlogBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            // Get data from attributes
            const imgSrc = this.getAttribute("data-img");
            const adminText = this.getAttribute("data-admin");
            const dateText = this.getAttribute("data-date");
            const titleText = this.getAttribute("data-title");
            const shortText = this.getAttribute("data-short");
            const longText = this.getAttribute("data-long");

            // Populate Modal
            modalImg.src = imgSrc;
            modalAdmin.innerHTML = `<i class="fa-solid fa-user-tie"></i> ${adminText}`;
            modalDate.innerHTML = `<i class="fa-solid fa-calendar-days"></i> ${dateText}`;
            modalTitle.innerText = titleText;
            modalShort.innerText = shortText;
            
            // Using innerHTML for long text in case you want to pass <br> or <p> tags later from DB
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