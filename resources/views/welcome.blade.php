@extends('layouts.app')
@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="beranda" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                        <h1>KKN Tematik Unsulbar Gelombang XXIII</h1>
                        <p>Stop Stunting Kec. Campalagian</p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/stop-stunting.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="zoom-in">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 2,
                      "spaceBetween": 40
                    },
                    "480": {
                      "slidesPerView": 3,
                      "spaceBetween": 60
                    },
                    "640": {
                      "slidesPerView": 4,
                      "spaceBetween": 80
                    },
                    "992": {
                      "slidesPerView": 5,
                      "spaceBetween": 120
                    },
                    "1200": {
                      "slidesPerView": 6,
                      "spaceBetween": 120
                    }
                  }
                }
                    </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Pricing Section -->
        <section id="artikel" class="pricing section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Artikel</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    @foreach ($artikels as $artikel)
                    <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item featured">
                            <h3>{{ $artikel->judul }}</h3>
                            <p>
                                {!! Str::limit(strip_tags($artikel->deskripsi), 170, '...') !!}
                            </p>
                            <a href="{{ route('artikel.show', $artikel->id) }}" class="buy-btn mt-3">Baca Selengkapnya</a>
                        </div>
                    </div><!-- End Pricing Item -->
                    @endforeach

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">
        
            <img src="assets/img/cta-bg.jpg" alt="">
        
            <div class="container">
        
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Call To Action</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>
        
            </div>
        
        </section>

        <!-- Faq 2 Section -->
        <section id="faq" class="faq-2 section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Berikut adalah pertanyaan yang sering diajukan</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">
                        <div class="faq-container">
                            @foreach ($faqs as $faq)
                                <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>{{ $faq->pertanyaan }}</h3>
                                    <div class="faq-content">
                                        <p>
                                            {!! $faq->jawaban !!}
                                        </p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Faq 2 Section -->

        <!-- About Section -->
        <section id="tentang-kami" class="about section">
        
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
            </div><!-- End Section Title -->
        
            <div class="container">
        
                <div class="row gy-4">
        
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo</span></li>
                        </ul>
                    </div>
        
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
        
                </div>
        
            </div>
        
        </section>
        <!-- /About Section -->
    </main>
@endsection
