<!--parallax section-->
<section class="parallax-3">
    <div class="parallax-inner">
    </div>
</section>
<!--/parallax section-->

<!-- product Section -->
<section id="product" class="product section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>product</h2>
        <p>Check our products</p>
    </div><!-- End Section Title -->


    <div class="container">
        <!--search bar-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="row gx-2 gy-2 align-items-center">
                        <div class="col-6 col-md-3">
                            <select id="category" class="form-select theme-select">
                                <option class="option_" selected>Category</option>
                                <option class="option_" value="Hair Care">Hair Care</option>
                                <!-- <option class="option_" value="Shaving and Grooming">Shaving and Grooming</option> -->
                                <!-- <option class="option_" value="Skin Care">Skin Care</option> -->
                            </select>
                        </div>
                        <div class="col-6 col-md-3">
                            <select id="type" class="form-select theme-select">
                                <option class="option_" selected>Type</option>
                                <option class="option_" value="Shower gel">Shower gel</option>
                                <option class="option_" value="Shower scrub">Shower scrub</option>
                                <option class="option_" value="Lotion">Lotion</option>
                                <option class="option_" value="Mask">Mask</option>
                                <option class="option_" value="Serum">Serum</option>
                                <!-- <option class="option_" value="Shampoo">Shampoo</option>
                                <option class="option_" value="Conditioner">Conditioner</option>
                                <option class="option_" value="Hair treatment cream">Hair treatment cream</option>
                                <option class="option_" value="Face scrub">Face scrub</option>
                                <option class="option_" value="Foot & Body scrub">Foot & Body scrub</option>
                                <option class="option_" value="Shaving gel">Shaving gel</option> -->
                            </select>
                        </div>
                        <div class="col-6 col-md-3">
                            <select id="flavor" class="form-select theme-select">
                                <option class="option_" selected>Flavor</option>
                                <option class="option_" value="Mix fruit">Mix fruit</option>
                                <option class="option_" value="Papaya">Papaya</option>
                                <option class="option_" value="Strawberry">Strawberry</option>
                                <option class="option_" value="Aloevera">Aloevera</option>
                                <option class="option_" value="Lavendar">Lavendar</option>
                                <option class="option_" value="Coconut oil">Coconut oil</option>
                                <!-- <option class="option_" value="Aloevera">Aloevera</option>
                                <option class="option_" value="Olive oil">Olive oil</option>
                                <option class="option_" value="Strawberry">Strawberry</option>
                                <option class="option_" value="Lavendar">Lavendar</option>
                                <option class="option_" value="Coconut oil">Coconut oil</option>
                                <option class="option_" value="Argan oil">Argan oil</option>
                                <option class="option_" value="Cool blue">Cool blue</option>
                                <option class="option_" value="Natural clear">Natural clear</option> -->
                            </select>
                        </div>
                        <div class="col-6 col-md-3">
                            <select id="extract" class="form-select theme-select">
                                <option class="option_" selected>Extract</option>
                                <option class="option_" value="Argan">Argan</option>
                                <option class="option_" value="Biotin">Biotin</option>
                                <option class="option_" value="Caviar">Caviar</option>
                                <option class="option_" value="Collagen">Collagen</option>
                                <option class="option_" value="Keratin">Keratin</option>
                                <option class="option_" value="Protein">Protein</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-3">
                            <select id="size" class="form-select theme-select">
                                <option class="option_" selected>Size</option>
                                <!-- <option class="option_" value="500ml">500ml</option> -->
                                <option class="option_" value="125ml">125ml</option>
                                <option class="option_" value="1000ml">1000ml</option>
                                <option class="option_" value="1000ml">3780ml</option>
                                <!-- <option class="option_" value="1200ml">1200ml</option> -->
                                <option class="option_" value="4500ml">4500ml</option>
                                <!-- <option class="option_" value="5000ml">5000ml</option> -->
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button id="search" class="btn search_ theme-btn w-100" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="product-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li class="filter-active mt-2" id="reset" style="color: white;">Reset</li>
            </ul><!-- End product Filters -->

            <div id="products-lists">
                <!--products container-->
                @include('includes.data')
                <!-- End product Container -->
            </div>
        </div>
    </div>
</section>
<!-- /product Section -->