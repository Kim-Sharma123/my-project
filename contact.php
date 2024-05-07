<?php
include 'header.php'
?>
<!-- HEADER SECTION END HERE -->
<!-- BANNER SECTION START HERE -->
<section class="about2-banner-section about-banner-section w-100 float-left">
    <div class="container">
        <div class="about-banner-inner-con" data-aos="fade-up" data-aos-duration="700">
            <h1>Contact Us</h1>
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav> -->
        </div>
    </div>
</section>
<!-- BANNER SECTION END HERE -->
    <!-- CONTACT SECTION START HERE -->
    <section class="contact-main-section w-100 float-left padding-top padding-bottom white-bg">
        <div class="container">
            <div class="generic-title text-center" data-aos="fade-up" data-aos-duration="700">
                <span>Contact Info</span>
                <h2>Our Contact Information</h2>
            </div>
            <div class="contact-inner-con" data-aos="fade-up" data-aos-duration="700">
                <div class="contact-box">
                    <figure>
                        <img src="assets/images/location-img.png" alt="location-img">
                    </figure>
                    <h3>Location</h3>
                    <p class="mb-0"><a href="https://maps.app.goo.gl/YAT8je1YFxLGue7PA" target="_blank">121 King Street, Melbourne Victoria
                        3000 Australia</a></p>
                </div>
                <div class="contact-box">
                    <figure>
                        <img src="assets/images/contact-phone-img.png" alt="contact-phone-img">
                    </figure>
                    <h3>Phone</h3>
                    <ul class="list-unstyled mb-0">
                        <li><a href="tel:+61383766284">(+61 3 8376 6284)</a></li>
                        <li><a href="tel:+80023456789">(+800 2345 6789)</a></li>
                    </ul>
                </div>
                <div class="contact-box">
                    <figure>
                        <img src="assets/images/contact-mail-img.png" alt="contact-mail-img">
                    </figure>
                    <h3>Email</h3>
                    <ul class="list-unstyled mb-0">
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><a href="mailto:example@gmail.com">example@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END HERE -->
    <!-- MAP SECTION START HERE -->
    <section class="map-main-section w-100 float-left light-bg" id="contact-form">
        <div class="map-con">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8387096759334!2d144.9532000767644!3d-37.817246734238644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1692879195247!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container">
            <div class="map-form-outer-con">
                <div class="map-form-box text-center" data-aos="fade-up" data-aos-duration="700">
                    <span>Contact Us</span>
                    <h2>Send a Message</h2>
                    <form class="form-box" method="post" id="contactpage">
                        <ul class="list-unstyled">
                            <li>
                                <input type="text" name="fname" id="fname" placeholder="Name">
                            </li>
                            <li>
                                <input type="email" placeholder="Email" name="email" id="email">
                            </li>
                            <li>
                                <input type="tel" name="phone" id="phone" placeholder="Phone">
                            </li>
                            <li>
                                <textarea placeholder="Message" name="subject" id="subject"></textarea>
                            </li>
                        </ul>
                        <div class="submit-btn">
                            <button type="submit" id="submit">Send Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- MAP SECTION END HERE -->
    <!-- FOOTER SECTION START HERE -->
    <?php
    include 'footer.php'
    ?>
    <!-- FOOTER SECTION END HERE -->
    <a id="button"></a>
    <!-- js start -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/contact-form.js"></script>
</body>


<!-- Mirrored from html.designingmedia.com/example/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2024 07:13:30 GMT -->
</html>