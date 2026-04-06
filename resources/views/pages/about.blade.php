@extends('layouts.app')

@section('body-class', 'page-about')

@section('hero')
    <!-- About Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('assets/img/doors/door-2.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Velora Doors</h5>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-sections')
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">Velora Doors</div>
                    <div class="section-title">Crafted for Timeless Spaces</div>
                    <p>Welcome to Velora Doors — premium wooden doors crafted from African hardwood, designed for luxury villas and global projects. Every door we create is a statement of craftsmanship, elegance, and durability.</p>
                    <p>Our doors are tailored to suit the most discerning tastes, from classic ornate designs to sleek modern entrances. We serve architects, interior designers, and homeowners across Africa and beyond.</p>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Get in Touch</p>
                            <a href="https://wa.me/254703232666">WhatsApp Us</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset('assets/img/slider/door2.webp') }}" alt="Velora Door" class="mt-90 mb-30">
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset('assets/img/slider/door3.webp') }}" alt="Velora Door">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">© Copyright {{ date('Y') }} by <a href="/">Velora Doors</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
