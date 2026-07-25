<?php

$pageTitle = "Our Services";
include("./include/header.php");
include("./include/breadcrumb.php");

?>

<!-- Services Grid Section -->
<section class="services-section section-padding reveal">
    <div class="container">
        <div class="section-title-wrap text-center mb-5">
            <span class="sub-title">What We Offer</span>
            <h2 class="section-title">Our Premium Services</h2>
        </div>

        <div class="service-grid-wrapper">

            <!-- Service Card 1 -->
            <div class="zen-service-card">
                <div class="card-image-wrap">
                    <img src="assets/images/product/medium-size/moringa.png" alt="Global Exporting">
                </div>
                <div class="card-content">
                    <h3 class="service-title">Global Exporting</h3>
                    <p class="service-short-desc">Seamless and timely export of premium spices worldwide.</p>

                    <!-- Button with Data Attributes for Popup -->
                    <button type="button" class="btn-view-details open-service-modal"
                        data-img="assets/images/product/medium-size/moringa.png"
                        data-title="Global Exporting"
                        data-short="Seamless and timely export of premium spices worldwide."
                        data-long="We handle the entire logistics chain from our farms in India to your port of choice. Our export services include strict compliance with international food safety standards, phytosanitary certifications, and seamless customs clearance, ensuring your cargo arrives fresh and on time.">
                        VIEW DETAILS <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="zen-service-card">
                <div class="card-image-wrap">
                    <img src="assets/images/product/medium-size/peanuts-1.png" alt="Custom Packaging">
                </div>
                <div class="card-content">
                    <h3 class="service-title">Custom Packaging</h3>
                    <p class="service-short-desc">Private label and bulk packaging solutions tailored for you.</p>

                    <button type="button" class="btn-view-details open-service-modal"
                        data-img="assets/images/product/medium-size/peanuts-1.png"
                        data-title="Custom Packaging"
                        data-short="Private label and bulk packaging solutions tailored for you."
                        data-long="Stand out in the market with our OEM and private label packaging services. We offer everything from 25kg bulk PP bags for wholesale buyers to customized, branded retail pouches. Our packaging preserves the aroma, essential oils, and freshness of the spices.">
                        VIEW DETAILS <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Add more cards as needed -->

        </div>
    </div>
</section>

<!-- ==========================================
     CUSTOM POPUP MODAL (Hidden by default)
=========================================== -->
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
                    <p id="modalLongDesc" class="modal-long-desc"></p>

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
                modalLong.innerText = longText;

                // Show Modal with Animation
                modal.classList.add("show-modal");
                document.body.style.overflow = "hidden"; // Background scroll stop karne ke liye
            });
        });

        // Close Modal Function
        function closeModal() {
            modal.classList.remove("show-modal");
            document.body.style.overflow = "auto"; // Background scroll chalu
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