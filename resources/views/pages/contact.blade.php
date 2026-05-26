@extends('layouts.app')

@section('title', 'Contact Us – Request a Quote | Velora Doors')
@section('meta_description', 'Contact Velora Doors to request a custom quote, export order, or catalogue. We serve clients in UAE, Saudi Arabia, UK, Germany, Kenya and more.')
@section('canonical', url('/contact-us'))
@section('og_title', 'Get in Touch – Velora Doors')
@section('og_description', 'Request a quote or export order for premium African hardwood doors. Serving the Middle East, Europe and beyond.')
@section('og_image', asset('assets/img/doors/door-2.webp'))

@section('body-class', 'page-contact')

@section('hero')
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('assets/img/doors/door-2.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <h5>Get in Touch</h5>
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-sections')
<!-- SwipeToast CSS (loaded in <head> via to 'styles' stack, but layout doesn't have one, so we'll place it here - it's a CSS, safe) -->
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery.swipetoast.min.css') }}">

<!-- Loading Overlay CSS -->
<style>
    /* Loading overlay */
    .velora-loading-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 9999;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .velora-loading-overlay.active {
        display: flex;
    }

    .velora-loading-spinner {
        width: 50px;
        height: 50px;
        border: 4px solid rgba(255, 255, 255, 0.2);
        border-top-color: #c9a96e;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
        margin-bottom: 16px;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    .velora-loading-text {
        color: #fff;
        font-family: 'Cinzel', serif;
        font-size: 14px;
        letter-spacing: 2px;
    }
</style>

<!-- Loading Overlay (hidden) -->
<div class="velora-loading-overlay" id="loadingOverlay">
    <div class="velora-loading-spinner"></div>
    <div class="velora-loading-text">Sending your message...</div>
</div>

<!-- Contact Section -->
<section class="contact section-padding">
    <div class="container">
        <div class="row mb-90">

            <!-- Contact Info -->
            <div class="col-md-5 mb-60">
                <h3>Velora Doors</h3>
                <p>Premium wooden doors crafted from African hardwood, designed for luxury villas and global projects. Reach out to us for inquiries, export orders, or a custom quote.</p>

                <div class="reservations mb-30">
                    <div class="icon">
                        <span class="flaticon-envelope"></span>
                    </div>
                    <div class="text">
                        <p>Email</p>
                        <a href="mailto:contact@veloradoors.com">contact@veloradoors.com</a>
                    </div>
                </div>

                <div class="reservations mb-30">
                    <div class="icon">
                        <span class="flaticon-call"></span>
                    </div>
                    <div class="text">
                        <p>WhatsApp</p>
                        <a href="https://wa.me/254703232666" target="_blank">+254 703 232 666</a>
                    </div>
                </div>

                <!-- hidden anchor still needed for WhatsApp JS sync -->
                <a id="veloraWhatsappBtn" href="https://wa.me/254703232666?text=Hello%20Velora%20Doors%2C%20I%20would%20like%20to%20request%20a%20quote." style="display:none"></a>
            </div>

            <!-- Quote Form -->
            <div class="col-md-6 offset-md-1 mb-30">
                <h3>Request a Quote</h3>

                @if(session('success'))
                <div id="flashSuccess" data-message="{{ session('success') }}" style="display:none;"></div>
                @endif
                @if(session('error'))
                <div id="flashError" data-message="{{ session('error') }}" style="display:none;"></div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="contact__form" id="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" placeholder="Your Name *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" placeholder="Your Email *" required>
                        </div>
                        <div class="col-md-3 form-group">
                            <div class="velora-phone-group">
                                <select id="veloraPhoneCode" name="phone_code" class="velora-phone-code">
                                    <option value="+971" data-country="United Arab Emirates">🇦🇪 +971</option>
                                    <option value="+966" data-country="Saudi Arabia">🇸🇦 +966</option>
                                    <option value="+974" data-country="Qatar">🇶🇦 +974</option>
                                    <option value="+965" data-country="Kuwait">🇰🇼 +965</option>
                                    <option value="+973" data-country="Bahrain">🇧🇭 +973</option>
                                    <option value="+968" data-country="Oman">🇴🇲 +968</option>
                                    <option value="+44">🇬🇧 +44</option>
                                    <option value="+49" data-country="Germany">🇩🇪 +49</option>
                                    <option value="+33" data-country="France">🇫🇷 +33</option>
                                    <option value="+39" data-country="Italy">🇮🇹 +39</option>
                                    <option value="+34" data-country="Spain">🇪🇸 +34</option>
                                    <option value="+31" data-country="Netherlands">🇳🇱 +31</option>
                                    <option value="+254" data-country="Kenya" selected>🇰🇪 +254</option>
                                    <option value="+255" data-country="Tanzania">🇹🇿 +255</option>
                                    <option value="+256" data-country="Uganda">🇺🇬 +256</option>
                                    <option value="+27" data-country="South Africa">🇿🇦 +27</option>
                                    <option value="+234" data-country="Nigeria">🇳🇬 +234</option>
                                    <option value="+1" data-country="United States">🇺🇸 +1</option>
                                    <option value="+61" data-country="Australia">🇦🇺 +61</option>
                                    <option value="+91" data-country="India">🇮🇳 +91</option>
                                    <option value="+86" data-country="China">🇨🇳 +86</option>
                                    <option value="other">🌍 Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-9 form-group">
                            <input name="phone" type="tel" placeholder="Phone / WhatsApp *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <select id="veloraCountry" name="country" required>
                                <option value="" disabled selected>Country *</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Oman">Oman</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Italy">Italy</option>
                                <option value="Spain">Spain</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Uganda">Uganda</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="United States">United States</option>
                                <option value="Australia">Australia</option>
                                <option value="India">India</option>
                                <option value="China">China</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <select id="veloraInquiryType" name="inquiry_type" required>
                                <option value="" disabled selected>Inquiry Type *</option>
                                <option value="Export Order">Export Order</option>
                                <option value="Custom Quote">Custom Quote</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Partnership / Distribution">Partnership / Distribution</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <input name="subject" type="text" placeholder="Subject (e.g. Export Inquiry, Custom Door Quote)" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" cols="30" rows="5" placeholder="Tell us about your project — door style, quantity, destination country... *" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark2" id="submitBtn"><span>Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
@endsection

{{-- Push scripts to the stack we added in the layout --}}
@push('scripts')
<script src="{{ asset('assets/vendor/jquery.swipetoast.min.js') }}"></script>
<script>
    $(document).ready(function() {

        // Helper function to set select value
        function setSelect(el, val) {
            for (var i = 0; i < el.options.length; i++) {
                if (el.options[i].value === val) {
                    el.selectedIndex = i;
                    break;
                }
            }
        }

        // --- 1. Show toast if there's a session flash message (server-side redirect fallback) ---
        if ($('#flashSuccess').length) {
            $.swipeToast({
                message: $('#flashSuccess').data('message'),
                type: "success",
                duration: 6000,
                position: "top-center",
                progressBar: true,
                closeButton: true
            });
        }
        if ($('#flashError').length) {
            $.swipeToast({
                message: $('#flashError').data('message'),
                type: "error",
                duration: 6000,
                position: "top-center",
                progressBar: true,
                closeButton: true
            });
        }

        // --- 2. AJAX form submission with loading overlay ---
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            var $form = $(this);
            var $btn = $('#submitBtn');
            var originalHtml = $btn.html();
            var $loading = $('#loadingOverlay');

            // Show loading overlay and disable button
            $loading.addClass('active');
            $btn.prop('disabled', true).html('<span>Sending...</span>');

            $.ajax({
                url: $form.attr('action'),
                method: 'POST',
                data: $form.serialize(),
                success: function(response) {
                    // Hide loading
                    $loading.removeClass('active');

                    // Success toast
                    $.swipeToast({
                        message: response.message || "Thank you! Your message has been sent. We'll get back to you within 24 hours.",
                        type: "success",
                        duration: 6000,
                        position: "top-center",
                        progressBar: true,
                        closeButton: true
                    });

                    // Reset the form
                    $form[0].reset();
                    setSelect(document.getElementById('veloraCountry'), 'Kenya');
                    setSelect(document.getElementById('veloraPhoneCode'), '+254');
                },
                error: function(xhr) {
                    // Hide loading
                    $loading.removeClass('active');

                    var msg = "Something went wrong. Please try again later.";
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        msg = xhr.responseJSON.message;
                    } else if (xhr.status === 422) {
                        msg = "Please fill in all required fields correctly.";
                    }

                    // Error toast
                    $.swipeToast({
                        message: msg,
                        type: "error",
                        duration: 6000,
                        position: "top-center",
                        progressBar: true,
                        closeButton: true
                    });
                },
                complete: function() {
                    // Restore button
                    $btn.prop('disabled', false).html(originalHtml);
                }
            });
        });

        // --- 3. Phone code / Country sync (unchanged) ---
        (function() {
            var phoneCode = document.getElementById('veloraPhoneCode');
            var countryEl = document.getElementById('veloraCountry');
            var inquiryEl = document.getElementById('veloraInquiryType');
            var whatsappBtn = document.getElementById('veloraWhatsappBtn');

            var codeToCountry = {
                '+971': 'United Arab Emirates',
                '+966': 'Saudi Arabia',
                '+974': 'Qatar',
                '+965': 'Kuwait',
                '+973': 'Bahrain',
                '+968': 'Oman',
                '+44': 'United Kingdom',
                '+49': 'Germany',
                '+33': 'France',
                '+39': 'Italy',
                '+34': 'Spain',
                '+31': 'Netherlands',
                '+254': 'Kenya',
                '+255': 'Tanzania',
                '+256': 'Uganda',
                '+27': 'South Africa',
                '+234': 'Nigeria',
                '+1': 'United States',
                '+61': 'Australia',
                '+91': 'India',
                '+86': 'China',
            };

            var countryToCode = {};
            for (var code in codeToCountry) {
                countryToCode[codeToCountry[code]] = code;
            }

            phoneCode.addEventListener('change', function() {
                var country = codeToCountry[this.value];
                if (country) setSelect(countryEl, country);
            });

            countryEl.addEventListener('change', function() {
                var code = countryToCode[this.value];
                if (code) setSelect(phoneCode, code);
            });

            inquiryEl.addEventListener('change', function() {
                whatsappBtn.href = 'https://wa.me/254703232666?text=' +
                    'Hello%20Velora%20Doors%2C%20I%20would%20like%20to%20inquire%20about%3A%20' +
                    encodeURIComponent(this.value);
            });

            // Init sync
            setSelect(countryEl, codeToCountry[phoneCode.value] || 'Kenya');
        })();
    });
</script>
@endpush