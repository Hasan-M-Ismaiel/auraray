<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="{{ asset('assets/img/logo_.png') }}" alt="...">
            <!-- <span>.</span> -->
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home<br></a></li>
                <li><a href="{{ route('home') }}#about">About Us</a></li>
                <li><a href="{{ route('home') }}#product ">Products</a></li>
                <li><a href="{{ route('home') }}#services">Services</a></li>
                <li><a href="{{ route('home') }}#contact ">Contact Us</a></li>
                <li><a href="assets/catalog/Auraray.pdf"><i class="bi bi-download me-2"></i>Catalog</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- <a class="btn-getstarted" href="{{ route('home') }}#about">Al Enayah Al Kamlah </a> -->
    </div>
</header>