@extends('layouts.app')

@section('title', 'Our Doors – Luxury Hardwood Door Collection | Velora Doors')
@section('meta_description', 'Browse Velora Doors collection of solid hardwood doors — classic panels, arabesque inlay, contemporary, and bespoke designs available for export.')
@section('canonical', url('/our-doors'))
@section('og_title', 'Luxury Door Collection – Velora Doors')
@section('og_description', 'Solid African hardwood doors — classic panels, arabesque inlay, fluted teak and bespoke carved designs. Available for export worldwide.')
@section('og_image', asset('assets/img/doors/door-5.webp'))

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
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Row 1: 2 columns -->
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('assets/img/doors/gall1.webp') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/gall1.webp') }}" class="img-fluid mx-auto d-block" alt="Contemporary Collection">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('assets/img/doors/gall2.webp') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/gall2.webp') }}" class="img-fluid mx-auto d-block" alt="Contemporary Door Collection">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Row 2: 3 columns -->
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('assets/img/doors/door-6.webp') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/door-6.webp') }}" class="img-fluid mx-auto d-block" alt="Fluted Teak Door">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('assets/img/doors/door-7.webp') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/door-7.webp') }}" class="img-fluid mx-auto d-block" alt="Arabesque Inlay Door">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('assets/img/doors/door-10.webp') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/door-10.webp') }}" class="img-fluid mx-auto d-block" alt="Bespoke Collection">
                            </div>
                        </div>
                    </a>
                </div>

                

    
                
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('assets/img/doors/gall11.png') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/gall11.png') }}" class="img-fluid mx-auto d-block" alt="Sunburst Carved Door">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('assets/img/doors/door-4.1.webp') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/door-4.1.webp') }}" class="img-fluid mx-auto d-block" alt="Lattice Inlay Door">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('assets/img/doors/gall8.png') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/gall8.png') }}" class="img-fluid mx-auto d-block" alt="Fluted Teak Door">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('assets/img/doors/gall9.png') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/gall9.png') }}" class="img-fluid mx-auto d-block" alt="Arabesque Inlay Door">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('assets/img/doors/gall10.png') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/gall10.png') }}" class="img-fluid mx-auto d-block" alt="Bespoke Collection">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Row 4: 2 columns -->
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('assets/img/doors/gall5.png') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/gall5.png') }}" class="img-fluid mx-auto d-block" alt="Lattice Inlay Door">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('assets/img/doors/gall6.png') }}" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/doors/gall6.png') }}" class="img-fluid mx-auto d-block" alt="Sunburst Carved Door">
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <!-- CTA -->
            <div class="velora-gallery-cta">
                <p>Each door is custom-built to order. Request a quote or ask about export availability.</p>
                <a href="/contact" class="velora-cta-btn">Request a Quote</a>
            </div>

        </div>
    </section>

    @include('includes.footer')
@endsection
