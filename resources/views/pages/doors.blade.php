@extends('layouts.app')

@section('body-class', 'page-doors')

@section('hero')
    <!-- Doors Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('assets/img/doors/door-2.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Our Collection</h5>
                    <h1>Our Doors</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-sections')
    <!-- Door Gallery -->
    <section class="velora-gallery-section">
        <div class="container-fluid px-0">

            <!-- Section Header -->
            <div class="velora-gallery-header">
                <div class="section-subtitle">Crafted from African Hardwood</div>
                <div class="velora-gallery-title">Door Collection</div>
            </div>

            <!-- Grid -->
            <div class="velora-door-grid">

                <!-- Item — tall left -->
                <div class="velora-door-item vdg-tall">
                    <a href="{{ asset('assets/img/slider/door4.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-1.webp') }}" alt="Classic Hardwood Door">
                        <div class="velora-door-overlay">
                            <span>Classic Hardwood</span>
                        </div>
                    </a>
                </div>

                <!-- Right column — stacked two -->
                <div class="velora-door-item vdg-stack-top">
                    <a href="{{ asset('assets/img/doors/door-2.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-2.webp') }}" alt="Royal Panel Door">
                        <div class="velora-door-overlay">
                            <span>Royal Panel</span>
                        </div>
                    </a>
                </div>
                <div class="velora-door-item vdg-stack-bottom">
                    <a href="{{ asset('assets/img/doors/door-3.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-3.webp') }}" alt="Wood Finish Palette">
                        <div class="velora-door-overlay">
                            <span>Wood Finishes</span>
                        </div>
                    </a>
                </div>

                <!-- Full-width feature -->
                <div class="velora-door-item vdg-wide">
                    <a href="{{ asset('assets/img/doors/door-4.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-4.webp') }}" alt="Contemporary Collection">
                        <div class="velora-door-overlay">
                            <span>Contemporary Collection</span>
                        </div>
                    </a>
                </div>

                <!-- Feature right -->
                <div class="velora-door-item vdg-feature">
                    <a href="{{ asset('assets/img/doors/door-5.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-5.webp') }}" alt="Grand Double Door">
                        <div class="velora-door-overlay">
                            <span>Grand Double Door</span>
                        </div>
                    </a>
                </div>

                <!-- Row of 3 -->
                <div class="velora-door-item vdg-third">
                    <a href="{{ asset('assets/img/doors/door-6.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-6.webp') }}" alt="Fluted Teak Door">
                        <div class="velora-door-overlay">
                            <span>Fluted Teak</span>
                        </div>
                    </a>
                </div>
                <div class="velora-door-item vdg-third">
                    <a href="{{ asset('assets/img/doors/door-7.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-7.webp') }}" alt="Arabesque Inlay Door">
                        <div class="velora-door-overlay">
                            <span>Arabesque Inlay</span>
                        </div>
                    </a>
                </div>
                <div class="velora-door-item vdg-third">
                    <a href="{{ asset('assets/img/doors/door-8.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-8.webp') }}" alt="Bespoke Collection">
                        <div class="velora-door-overlay">
                            <span>Bespoke Collection</span>
                        </div>
                    </a>
                </div>

                <!-- Row of 2 -->
                <div class="velora-door-item vdg-half">
                    <a href="{{ asset('assets/img/doors/door-9.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-9.webp') }}" alt="Lattice Inlay Door">
                        <div class="velora-door-overlay">
                            <span>Lattice Inlay</span>
                        </div>
                    </a>
                </div>
                <div class="velora-door-item vdg-half">
                    <a href="{{ asset('assets/img/doors/door-10.webp') }}" class="img-zoom">
                        <img src="{{ asset('assets/img/doors/door-10.webp') }}" alt="Sunburst Carved Door">
                        <div class="velora-door-overlay">
                            <span>Sunburst Carved</span>
                        </div>
                    </a>
                </div>

            </div><!-- /.velora-door-grid -->

            <!-- CTA -->
            <div class="velora-gallery-cta">
                <p>Each door is custom-built to order. Request a quote or ask about export availability.</p>
                <a href="/contact" class="velora-cta-btn">Request a Quote</a>
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
