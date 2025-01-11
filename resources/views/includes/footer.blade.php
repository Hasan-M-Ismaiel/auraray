<footer id="footer" class="footer dark-background">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Al Enayah Al Kamlah <span style="color: #ffc451;">|</span> AuraRay</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Al Enayah Al Kamlah Manufacture Of Cosmetic Tools & Supplies L.L.C</p>
                        <p>Sajaa Industrial</p>
                        <p>UAE, Sharjah</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+971 6 715 5323</span></p>
                        <p><strong>Email:</strong> <span><a href="mailto:info@auraray.ae">info@auraray.ae</a></span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}"> Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#about"> About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#services"> Services</a></li>
                        <!-- <li><i class="bi bi-chevron-right"></i> <a href="#"> Terms of service</a></li> -->
                        <!-- <li><i class="bi bi-chevron-right"></i> <a href="#"> Privacy policy</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('service_1') }}"> Private Label Manufacturing </a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('service_2') }}"> Beauty Kits for Hotels </a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('service_3') }}"> Exporting & Delivery Services </a></li>
                        <!-- <li><i class="bi bi-chevron-right"></i> <a href="#"> Product Management</a></li> -->
                        <!-- <li><i class="bi bi-chevron-right"></i> <a href="#"> Marketing</a></li> -->
                        <!-- <li><i class="bi bi-chevron-right"></i> <a href="#"> Graphic Design</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action='{{ route("storeEmail") }}' method="post" class="php-email-form">
                        @csrf
                        <div class="newsletter-form"><input type="email" name="email_footer"><input type="submit" value="Subscribe">
                        </div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container text-center">
            <p>©Copyright<strong class="px-1 sitename"><span>AuraRay</span></strong>All Rights Reserved</p>
            <!-- <div class="credits"> -->
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a> -->
            <!-- </div> -->
        </div>
    </div>

</footer>