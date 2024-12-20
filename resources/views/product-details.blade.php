@extends('layouts.app_main')

@section('content')


<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Product Details</h1>
                        <p class="mb-0">This section includes key information about each product, such as its name, benefits,
                            sizes, ingredients, and usage instructions, accompanied by high-quality images to help customers make
                            informed choices.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Product Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- product Details Section -->
    <section id="product-details" class="product-details section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="product-details-slider swiper init-swiper">

                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                }
                            }
                        </script>

                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/product/app-1.png" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/product/product-1.png" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/product/branding-1.png" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/product/books-1.png" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="product-info" data-aos="fade-up" data-aos-delay="200">
                        <h3>Velora Essence</h3>
                        <ul>
                            <li><strong>Category</strong>: Skin Care</li>
                            <li><strong>Available sizes</strong>:
                                <ul>
                                    <li> - 50ml (Travel Size)</li>
                                    <li> - 150ml (Standard Size)</li>
                                    <li> - 500ml (Salon/Professional Size)</li>
                                    <li> - 1000ml (Bulk Size)</li>
                                </ul>
                            </li>
                            <li><strong>Ingredients</strong>: Aloe Vera Extract, Vitamin E, Shea Butter, Green Tea Extract, Glycerin</li>
                            <li><strong>Denefits</strong>: Gently removes dirt and impurities, nourishes with natural extracts, promotes healthy hair growth, enhances shine, and is suitable for daily use on all hair types.</li>
                            <li><strong>Description</strong>: AuraRay Shampoo is a premium hair care product designed to cleanse and nourish all hair types, leaving it soft, smooth, and manageable. </li>
                            <li><strong>Price</strong>: 99.9$</li>
                        </ul>
                    </div>
                    <div class="product-description" data-aos="fade-up" data-aos-delay="300">
                        <h2>Usage instructions</h2>
                        <p>
                            Apply a small amount to damp hair, massage gently, and rinse thoroughly. Use as needed for best results.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /product Details Section -->

</main>

@endsection
