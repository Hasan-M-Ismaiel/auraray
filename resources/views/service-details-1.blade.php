@extends('layouts.app_main')

@section('content')


<main class="main">
    <section id="hero" class="hero_other section dark-background">
        <img id="hero_image_other" src="{{ asset('assets/img/hero-bg-other-page.png') }}" alt="" data-aos="fade-in">
    </section>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Service Details</h1>
                        <p class="mb-0">Create Your Own Brand with Custom Beauty Products</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Service Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                        <h4>Download Catalog</h4>
                        <div class="download-catalog">
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Have a Question?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+971 6 715 5323
                                55</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:info@auraray.ae">info@auraray.ae</a></p>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                    <h3>Private Label Manufacturing</h3>
                    <p>
                        At Al Enayah Al Kamlah, we specialize in private label manufacturing services that enable beauty businesses and salons to develop their own customized
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>hair care</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>skin care</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>grooming products</span></li>
                    </ul>
                    <p>
                        Our custom product manufacturing services are designed to meet the specific needs of our partners, ensuring every product aligns with their brand image and quality standards.
                    </p>
                    <p>
                        Whether you are starting a new product line or expanding your existing offerings, our professional-grade manufacturing team ensures that every product is crafted with the highest level of precision and attention to detail. 
                    </p>
                    <p>
                    Let us help bring your beauty brand to life with our expert private label manufacturing services, providing high-quality solutions that elevate your salon business.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

</main>

@endsection