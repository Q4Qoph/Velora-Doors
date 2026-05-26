@extends('layouts.app')

@section('title', 'About Us – Velora Doors | Mvule Hardwood Door Exporters')
@section('meta_description', 'Founded in 2021 in Mombasa, Kenya — Velora Doors manufactures and exports premium solid Mvule hardwood doors to global markets. Custom-crafted for luxury residential, commercial, and hospitality projects.')
@section('canonical', url('/about-us'))
@section('og_title', 'About Velora Doors')
@section('og_description', 'Crafting bespoke solid Mvule hardwood doors from Mombasa, Kenya — exported worldwide to the Middle East, Europe, and beyond.')
@section('og_image', asset('assets/img/doors/door-2.webp'))

@section('body-class', 'page-about')

@section('hero')
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

{{-- Section 1: Brand Story - SINGLE IMAGE --}}
<section class="about section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="section-subtitle">Founded 2021 &middot; Mombasa, Kenya</div>
                <div class="section-title">Crafted from Africa's Finest Hardwood</div>
                <p>Founded in 2021 and headquartered in Mombasa, Kenya, Velora Doors is a premium manufacturer of solid wood doors. From our strategic coastal hub, we deliver high-quality, custom-crafted doors to global markets with reliability, precision, and consistency.</p>
                <p>We specialize in producing durable, architect-grade solid doors using Mvule wood — also known as African Teak or Iroko — one of Africa's most valued and resilient hardwoods. Our focus is on combining natural material strength with refined craftsmanship to meet the demands of high-end residential, commercial, and hospitality projects.</p>
            </div>
            <div class="col-lg-5 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <div class="text-center">
                    <img src="{{ asset('assets/img/slider/about.png') }}" alt="Velora Solid Hardwood Door" class="img-fluid w-100 mt-90 mb-30">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 2: Our Material — Mvule --}}
<section class="section-padding bg-blck">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle" style="color:#c9a96e;">Our Material</div>
                <div class="section-title" style="color:rgba(255,230,180,0.95);">Mvule &mdash; Africa's Teak</div>
                <p class="mb-30" style="max-width:680px;margin:0 auto;color:rgba(255,255,255,0.55);">Mvule (<em>Milicia excelsa</em>) is a fast-growing tropical hardwood native to West and East Africa, reaching heights of up to 50 metres. It is widely regarded as a premium material for exterior and structural applications due to its exceptional performance and longevity.</p>
            </div>

            <div class="col-md-4 col-sm-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="velora-material-card">
                    <span class="flaticon-shield velora-material-icon"></span>
                    <h5>Durability &amp; Strength</h5>
                    <p>High density with natural resistance to weather, rot, and insects — built to last for generations.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="velora-material-card">
                    <span class="flaticon-like velora-material-icon"></span>
                    <h5>Natural Aesthetic</h5>
                    <p>Transitions from light golden tones to deep, rich brown over time — beauty that deepens with age.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="velora-material-card">
                    <span class="flaticon-home velora-material-icon"></span>
                    <h5>Versatility</h5>
                    <p>Suitable for doors, flooring, marine applications, staircases, and structural use across industries.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="velora-material-card">
                    <span class="flaticon-clipboard velora-material-icon"></span>
                    <h5>Workability</h5>
                    <p>Allows precise crafting and high-quality finishing despite its density — ideal for intricate door designs.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="velora-material-card">
                    <span class="flaticon-rating velora-material-icon"></span>
                    <h5>Market Prestige</h5>
                    <p>Known as "Africa's Teak" — internationally recognised for both performance and prestige in luxury construction.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Rest of sections remain unchanged --}}
{{-- Section 3: Why Choose Velora --}}
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-30 animate-box" data-animate-effect="fadeInLeft">
                <div class="section-subtitle">Why Choose Us</div>
                <div class="section-title">Built for Demanding Projects</div>
                <p>Every Velora door is produced to architect-grade standards, engineered for longevity in the world's most demanding climates. From coastal humidity to desert heat, our doors are built to perform.</p>
                <p>We work directly with architects, developers, interior designers, and procurement teams — offering full customisation at every stage of production.</p>
            </div>
            <div class="col-md-6 offset-md-1 animate-box" data-animate-effect="fadeInRight">
                <div class="velora-why-list">
                    <div class="velora-why-item">
                        <span class="flaticon-shield"></span>
                        <div>
                            <h6>High Durability</h6>
                            <p>Built for long-term performance in harsh environments.</p>
                        </div>
                    </div>
                    <div class="velora-why-item">
                        <span class="flaticon-like"></span>
                        <div>
                            <h6>Premium Material</h6>
                            <p>100% solid Mvule hardwood, sourced from East and Central Africa.</p>
                        </div>
                    </div>
                    <div class="velora-why-item">
                        <span class="flaticon-clipboard"></span>
                        <div>
                            <h6>Custom Production</h6>
                            <p>Made to exact size, design, and finish specifications for every project.</p>
                        </div>
                    </div>
                    <div class="velora-why-item">
                        <span class="flaticon-air-freight"></span>
                        <div>
                            <h6>Global Shipping</h6>
                            <p>Reliable export from Mombasa Port to all major markets worldwide.</p>
                        </div>
                    </div>
                    <div class="velora-why-item">
                        <span class="flaticon-world"></span>
                        <div>
                            <h6>International Support</h6>
                            <p>Sales presence across Japan, United States, Netherlands, and Turkey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 4: Global Reach --}}
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Global Operations</div>
                <div class="section-title">From Mombasa to the World</div>
            </div>
            <div class="col-md-4 mb-30 animate-box text-center" data-animate-effect="fadeInUp">
                <span class="flaticon-location-pin velora-global-icon"></span>
                <h5 class="velora-global-heading">Timber Sourcing</h5>
                <p class="velora-global-text">Kenya &middot; Tanzania &middot; Uganda &middot; Democratic Republic of Congo</p>
                <p class="velora-global-sub">Premium-grade Mvule logs selected from certified sources across East and Central Africa.</p>
            </div>
            <div class="col-md-4 mb-30 animate-box text-center" data-animate-effect="fadeInUp">
                <span class="flaticon-air-freight velora-global-icon"></span>
                <h5 class="velora-global-heading">Export Hub</h5>
                <p class="velora-global-text">Mombasa Port, Kenya</p>
                <p class="velora-global-sub">Strategically positioned for efficient international logistics and secure global delivery to all major ports.</p>
            </div>
            <div class="col-md-4 mb-30 animate-box text-center" data-animate-effect="fadeInUp">
                <span class="flaticon-globe velora-global-icon"></span>
                <h5 class="velora-global-heading">Primary Markets</h5>
                <p class="velora-global-text">Real Estate &middot; Architecture &middot; Hospitality &middot; Commercial Construction</p>
                <p class="velora-global-sub">Supporting developers, architects, and designers across the Middle East, Europe, and beyond.</p>
            </div>
            <div class="col-md-12 text-center mt-30">
                <p class="velora-global-quote"><em>"Production capacity and lead times available upon request."</em></p>
                <a href="/contact-us" class="velora-cta-btn mt-20" style="display:inline-block;">Request a Quote</a>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')
@endsection