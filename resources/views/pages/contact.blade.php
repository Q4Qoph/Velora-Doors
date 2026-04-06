@extends('layouts.app')

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
                            <a href="mailto:Info@veloradoors.com">Info@veloradoors.com</a>
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

                    <div class="reservations mb-30">
                        <div class="icon">
                            <span class="flaticon-location-pin"></span>
                        </div>
                        <div class="text">
                            <p>Website</p>
                            <a href="https://www.veloradoors.com" target="_blank">www.veloradoors.com</a>
                        </div>
                    </div>

                    <!-- WhatsApp CTA -->
                    <a id="veloraWhatsappBtn" href="https://wa.me/254703232666?text=Hello%20Velora%20Doors%2C%20I%20would%20like%20to%20request%20a%20quote." target="_blank" class="velora-whatsapp-btn mt-30">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                        Chat on WhatsApp
                    </a>

                    <!-- Catalogue CTA -->
                    <a href="{{ asset('assets/docs/velora-catalogue.pdf') }}" target="_blank" class="velora-catalogue-btn mt-15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                        </svg>
                        Download Catalogue
                    </a>
                </div>

                <!-- Quote Form -->
                <div class="col-md-6 offset-md-1 mb-30">
                    <h3>Request a Quote</h3>
                    @if(session('success'))
                        <div class="alert alert-success mb-30" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger mb-30" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}" class="contact__form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
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
                                    <input name="phone" type="tel" placeholder="Phone / WhatsApp *" required>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
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
                                <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                            </div>
                        </div>
                    </form>

                    <script>
                    (function() {
                        var phoneCode  = document.getElementById('veloraPhoneCode');
                        var countryEl  = document.getElementById('veloraCountry');
                        var inquiryEl  = document.getElementById('veloraInquiryType');
                        var whatsappBtn = document.getElementById('veloraWhatsappBtn');

                        // Map: phone code value → country option value
                        var codeToCountry = {
                            '+971': 'United Arab Emirates',
                            '+966': 'Saudi Arabia',
                            '+974': 'Qatar',
                            '+965': 'Kuwait',
                            '+973': 'Bahrain',
                            '+968': 'Oman',
                            '+44':  'United Kingdom',
                            '+49':  'Germany',
                            '+33':  'France',
                            '+39':  'Italy',
                            '+34':  'Spain',
                            '+31':  'Netherlands',
                            '+254': 'Kenya',
                            '+255': 'Tanzania',
                            '+256': 'Uganda',
                            '+27':  'South Africa',
                            '+234': 'Nigeria',
                            '+1':   'United States',
                            '+61':  'Australia',
                            '+91':  'India',
                            '+86':  'China',
                        };

                        // Reverse map
                        var countryToCode = {};
                        for (var code in codeToCountry) {
                            countryToCode[codeToCountry[code]] = code;
                        }

                        // Phone code → auto-fill country
                        phoneCode.addEventListener('change', function() {
                            var country = codeToCountry[this.value];
                            if (country) setSelect(countryEl, country);
                        });

                        // Country → auto-fill phone code
                        countryEl.addEventListener('change', function() {
                            var code = countryToCode[this.value];
                            if (code) setSelect(phoneCode, code);
                        });

                        // WhatsApp pre-fill from inquiry type
                        inquiryEl.addEventListener('change', function() {
                            whatsappBtn.href = 'https://wa.me/254703232666?text=' +
                                'Hello%20Velora%20Doors%2C%20I%20would%20like%20to%20inquire%20about%3A%20' +
                                encodeURIComponent(this.value);
                        });

                        function setSelect(el, val) {
                            for (var i = 0; i < el.options.length; i++) {
                                if (el.options[i].value === val) { el.selectedIndex = i; break; }
                            }
                        }

                        // Init: sync country to match default phone code (+254 → Kenya)
                        setSelect(countryEl, codeToCountry[phoneCode.value] || '');
                    })();
                    </script>
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
