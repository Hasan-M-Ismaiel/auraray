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
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <select id="category" class="form-select" style="max-width: 150px;">
                            <option class="option_" selected>Category</option>
                            <option class="option_" value="Hair Care">Hair Care</option>
                            <option class="option_" value="Shaving and Grooming">Shaving and Grooming</option>
                            <option class="option_" value="Skin Care">Skin Care</option>
                        </select>
                        <select id="type" class="form-select" style="max-width: 150px;">
                            <option class="option_" selected>Type</option>
                            <option class="option_" value="Shampoo">Shampoo</option>
                            <option class="option_" value="Conditioner">Conditioner</option>
                            <option class="option_" value="Hair treatment cream">Hair treatment cream</option>
                            <option class="option_" value="Face scrub">Face scrub</option>
                            <option class="option_" value="Foot & Body scrub">Foot & Body scrub</option>
                            <option class="option_" value="Shower gel">Shower gel</option>
                        </select>
                        <select id="flavor" class="form-select" style="max-width: 150px;">
                            <option class="option_" selected>Flavor</option>
                            <option class="option_" value="Aloevera">Aloevera</option>
                            <option class="option_" value="Olive oil">Olive oil</option>
                            <option class="option_" value="Strawberry">Strawberry</option>
                            <option class="option_" value="Lavendar">Lavendar</option>
                            <option class="option_" value="Coconut oil">Coconut oil</option>
                            <option class="option_" value="Argan oil">Argan oil</option>
                        </select>
                        <select id="size" class="form-select" style="max-width: 150px;">
                            <option class="option_" selected>Size</option>
                            <option class="option_" value="500">500ml</option>
                            <option class="option_" value="1000">1000ml</option>
                            <option class="option_" value="1200">1200ml</option>
                            <option class="option_" value="4500">4500ml</option>
                            <option class="option_" value="5000">5000ml</option>
                        </select>
                        <button id="search" class="btn search_" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="product-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li class="filter-active" id="reset">Reset</li>
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