<?php global $site; ?>

<!-- ==========================================
     PREMIUM B2B FOOTER SECTION
=========================================== -->
<footer class="zen-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row custom-footer-row">

                <!-- Column 1: About Company -->
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <div class="footer-widget">
                        <div class="footer-logo mb-4">
                            <a href="index.php">
                                <img src="assets/images/logo/dark1.png" alt="Zenvyara Global Export">
                            </a>
                        </div>
                        <p class="footer-desc">
                            Zenvyara Global Export brings the authentic flavors of nature directly to your business. We are a premier exporter of high-quality, organic Moringa powder and ethically sourced spices.
                        </p>
                        <div class="social-links mt-4">
                            <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo $site; ?>"><i class="fa-solid fa-angle-right"></i> Home</a></li>
                            <li><a href="<?php echo $site; ?>about.php"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                            <li><a href="<?php echo $site; ?>service.php"><i class="fa-solid fa-angle-right"></i> Services</a></li>
                            <li><a href="<?php echo $site; ?>product.php"><i class="fa-solid fa-angle-right"></i> Products</a></li>
                            <li><a href="<?php echo $site; ?>blogs.php"><i class="fa-solid fa-angle-right"></i> Blogs</a></li>
                            <li><a href="<?php echo $site; ?>contact.php"><i class="fa-solid fa-angle-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Contact Info -->
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="footer-contact-list">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Rajkot, Gujarat<br>India</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:memariyabharat893@gmail.com">memariyabharat893@gmail.com</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+917874616897">+91 78746 16897</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-user-tie"></i>
                                <span>Bharat Bhai</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Column 4: Newsletter -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Newsletter</h4>
                        <p class="footer-desc mb-3">Subscribe to get the latest updates on export trends and spice prices.</p>
                        <form class="footer-newsletter-form" action="#">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your Email Address" required>
                                <button type="submit" class="btn-subscribe"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </form>
                        <div class="certifications mt-4">
                            <!-- Optional: Put ISO/FSSAI certification logos here -->
                            <p class="text-white-50 small mb-1">100% Certified Export Quality</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="copyright-text mb-0">
                        © <?php echo date("Y"); ?> <strong>Zenvyara Global Export</strong>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <p class="credit-text mb-0">
                        Made with <i class="fa-solid fa-heart text-danger mx-1"></i> by <a href="https://digitalwebtrackers.com/" target="_blank">Digital Web Tracker</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/plugins/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if Swiper is loaded before running
        if (typeof Swiper !== 'undefined') {
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
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                },
            });
        } else {
            console.error("Swiper JS load nahi hui hai. Please check the file path.");
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        // 1. Header Active Link Logic
        const currentUrl = window.location.href;
        const navLinks = document.querySelectorAll('.zen-main-nav ul li a');

        // Pehle sabse 'active' class hatao
        navLinks.forEach(link => {
            link.classList.remove('active');
            // Check karo agar link ka href current URL se match karta hai
            if (currentUrl.includes(link.getAttribute('href'))) {
                link.classList.add('active');
            }
        });

        // Agar homepage par hain (sirf domain name hai), to Home ko active karo
        if (currentUrl === '<?php echo $site; ?>' || currentUrl === '<?php echo $site; ?>index.php') {
            navLinks.forEach(link => link.classList.remove('active'));
            navLinks[0].classList.add('active');
        }

        // 2. Footer Reveal Animation Logic (Smooth Scroll effect)
        const reveals = document.querySelectorAll(".reveal");
        const revealOnScroll = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        reveals.forEach(reveal => revealOnScroll.observe(reveal));
    });
</script>