<?php

$pageTitle = "About Us";

include("./include/header.php");
include("./include/breadcrumb.php");

?>


<!-- About Us Page Wrapper -->
<div class="about-page-wrapper">

    <!-- 1. Who We Are Section -->
    <section class="who-we-are section-padding reveal">
        <div class="container">
            <div class="row-flex">
                <div class="col-half image-col">
                    <!-- Aap yahan backend se dynamic image path la sakte hain -->
                    <img src="assets/images/product/medium-size/moringa.png" alt="Zenvyara Global Export" class="rounded-img shadow">
                </div>
                <div class="col-half content-col">
                    <span class="sub-title">Who We Are</span>
                    <h2 class="section-title">Welcome to Zenvyara Global Export</h2>
                    <p>At Zenvyara Global Export, we bring the authentic flavors of nature directly to your kitchen. We are a premier exporter of high-quality, organic, and ethically sourced spices.</p>
                    <p>With a deep-rooted passion for agriculture and global trade, we bridge the gap between local spice farmers and the international market, ensuring that every pinch of our spice adds pure magic to your meals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. What We Do Section -->
    <section class="what-we-do bg-beige section-padding reveal">
        <div class="container text-center">
            <span class="sub-title">Our Expertise</span>
            <h2 class="section-title">What We Do</h2>
            <p class="section-desc">We specialize in cultivating, processing, and exporting a diverse range of premium spices. From hand-picking the raw materials to advanced hygienic processing and secure packaging, we handle the entire supply chain to deliver excellence worldwide.</p>
        </div>
    </section>

    <!-- 3. Mission & Vision Section -->
    <section class="mission-vision section-padding reveal">
        <div class="container">
            <div class="container text-center py-4">
                <span class="sub-title">Expertize</span>
                <h2 class="section-title">Our Mission</h2>
            </div>

            <div class="row-flex">
                <!-- Mission Box -->
                <div class="col-half card-box bg-primary">
                    <div class="icon-box">🎯</div>
                    <h3>Our Mission</h3>
                    <p>To empower local farmers by providing them a global platform, while delivering the freshest, unadulterated, and most flavorful spices to our customers across the globe.</p>
                </div>
                <!-- Vision Box -->
                <div class="col-half card-box bg-primary">
                    <div class="icon-box">👁️</div>
                    <h3>Our Vision</h3>
                    <p>To be the world's most trusted and sustainable spice export brand, recognized for our uncompromising commitment to quality, authenticity, and environmental responsibility.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Our Strengths Section -->
    <section class="our-strengths bg-beige section-padding reveal">
        <div class="container text-center">
            <span class="sub-title">Why Choose Us</span>
            <h2 class="section-title">Our Strengths</h2>

            <!-- In cards ko aap PHP foreach loop chala kar dynamic bana sakte hain -->
            <div class="grid-4">
                <div class="strength-card">
                    <h4>🌱 100% Organic</h4>
                    <p>Sourced naturally without harmful chemicals.</p>
                </div>
                <div class="strength-card">
                    <h4>⭐ Premium Quality</h4>
                    <p>Rigorous quality checks at every step.</p>
                </div>
                <div class="strength-card">
                    <h4>🌍 Global Reach</h4>
                    <p>Exporting to multiple countries seamlessly.</p>
                </div>
                <div class="strength-card">
                    <h4>🤝 Fair Trade</h4>
                    <p>Ethical practices that support local farmers.</p>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const reveals = document.querySelectorAll(".reveal");

        const revealOnScroll = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target); // Ek baar animate hone ke baad stop kar dega
                }
            });
        }, {
            threshold: 0.15 // Jab section 15% screen par aayega tab animate hoga
        });

        reveals.forEach(reveal => {
            revealOnScroll.observe(reveal);
        });
    });
</script>


<?php include("./include/footer.php"); ?>