<?php

$pageTitle = "Contact Us";

include("./include/header.php");
include("./include/breadcrumb.php")

?>

<!-- ==========================================
     CONTACT PAGE SECTION
=========================================== -->
<section class="contact-area section-padding reveal">
    <div class="container">

        <!-- Top Section: Contact Info Cards -->
        <div class="row contact-info-wrap mb-5 text-center">

            <!-- Address Card -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="contact-info-card">
                    <div class="icon-box"><i class="fa-solid fa-location-dot"></i></div>
                    <h4>Our Headquarters</h4>
                    <p class="company-name"><strong>Zenvyara Global Export</strong></p>
                    <p>Rajkot, Gujarat<br>India</p>
                </div>
            </div>

            <!-- Contact Details Card -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="contact-info-card active-card">
                    <div class="icon-box"><i class="fa-solid fa-address-book"></i></div>
                    <h4>Contact Details</h4>
                    <p class="person-name"><strong>Bharat Bhai</strong></p>
                    <p>
                        <a href="tel:+917874616897">+91 78746 16897</a><br>
                        <a href="mailto:memariyabharat893@gmail.com">memariyabharat893@gmail.com</a>
                    </p>
                </div>
            </div>

            <!-- Products Card -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-info-card">
                    <div class="icon-box"><i class="fa-solid fa-leaf"></i></div>
                    <h4>Our Products</h4>
                    <p class="mt-2">Premium Quality Export of:</p>
                    <p class="product-highlights">Moringa Powder & Spices</p>
                </div>
            </div>

        </div>

        <!-- Bottom Section: Form & Map -->
        <div class="row align-items-stretch">

            <!-- Contact Form -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="contact-form-wrapper shadow-sm">
                    <span class="sub-title">Get In Touch</span>
                    <h2 class="form-title">Send Us a Message</h2>
                    <p class="form-desc">Have requirements for Moringa powder or spices? Fill out the form below and our team will get back to you with the best FOB/CIF quotes.</p>

                    <form action="mail.php" method="POST" class="zen-contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input type="text" name="name" class="form-control-custom" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="email" name="email" class="form-control-custom" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" name="phone" class="form-control-custom" placeholder="WhatsApp / Phone">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" name="subject" class="form-control-custom" placeholder="Subject">
                            </div>
                            <div class="col-md-12 mb-4">
                                <textarea name="message" rows="5" class="form-control-custom" placeholder="Your Requirements (e.g., MOQ, Packaging) *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn-submit-form">
                                    Send Message <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Google Map -->
            <div class="col-lg-6">
                <div class="map-wrapper shadow-sm">
                    <!-- Embedded Map for Rajkot, Gujarat -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118106.70010221669!2d70.73147529457802!3d22.27363079354171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cbd84%3A0x1119a69ab31d0819!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include("./include/footer.php"); ?>