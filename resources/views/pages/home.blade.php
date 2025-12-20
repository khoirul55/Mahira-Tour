{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Beranda - Mahira Tour | Travel Haji & Umrah Terpercaya')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
<!-- Enhanced Hero Section with Islamic Design -->
<section class="hero-section">
    <!-- Islamic Decorative Borders -->
    <div class="hero-border-top"></div>
    <div class="hero-border-bottom"></div>
    
    <!-- Hero Slider Background -->
<!-- Hero Slider Background -->
    <div class="hero-slider">
        <!-- Slide 1: Umrah Package -->
        <div class="hero-slide active" data-slide="1">
            <img src="{{ asset('images/hero/kaaba.jpg') }}" alt="Kaaba Makkah">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="bi bi-award-fill"></i>
                        <span>Berizin Resmi Kementerian Agama RI</span>
                    </div>
                    <h1 class="hero-title">
                        Wujudkan Impian <span class="hero-title-highlight">Umrah</span> Anda
                    </h1>
                    <div class="hero-divider"></div>
                    <p class="hero-subtitle">
                        Berangkat ke Tanah Suci dengan tenang dan khusyuk bersama pembimbing berpengalaman. Mulai dari Rp 22 juta dengan fasilitas lengkap.
                    </p>
                    <div class="hero-cta">
                        <a href="{{ route('schedule') }}" class="btn-hero btn-hero-primary">
                            <i class="bi bi-calendar-check"></i>
                            Lihat Jadwal & Harga
                        </a>
                        <a href="https://wa.me/628123456789" class="btn-hero btn-hero-outline">
                            <i class="bi bi-whatsapp"></i>
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2: Haji Furoda -->
        <div class="hero-slide" data-slide="2">
            <img src="{{ asset('images/hero/office.jpg') }}" alt="Arafah">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="bi bi-star-fill"></i>
                        <span>Program Haji Khusus Terbaik</span>
                    </div>
                    <h1 class="hero-title">
                        Program <span class="hero-title-highlight">Haji Furoda</span> 2025
                    </h1>
                    <div class="hero-divider"></div>
                    <p class="hero-subtitle">
                        Tunaikan rukun Islam kelima dengan nyaman. Hotel bintang 5, tenda ber-AC di Arafah, dan handling penuh 25 hari.
                    </p>
                    <div class="hero-cta">
                        <a href="{{ route('package.detail', 6) }}" class="btn-hero btn-hero-primary">
                            <i class="bi bi-info-circle"></i>
                            Detail Paket Haji
                        </a>
                        <a href="https://wa.me/628123456789" class="btn-hero btn-hero-outline">
                            <i class="bi bi-telephone"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3: Ramadhan Special -->
        <div class="hero-slide" data-slide="3">
            <img src="{{ asset('images/hero/promo.jpg') }}" alt="Masjid Nabawi">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="bi bi-moon-stars-fill"></i>
                        <span>Penawaran Spesial Ramadhan</span>
                    </div>
                    <h1 class="hero-title">
                        Umrah <span class="hero-title-highlight">Ramadhan</span> 1446H
                    </h1>
                    <div class="hero-divider"></div>
                    <p class="hero-subtitle">
                        Raih pahala berlipat di bulan suci Ramadhan. Termasuk sahur & iftar premium, tarawih di Masjidil Haram, dan hotel walking distance.
                    </p>
                    <div class="hero-cta">
                        <a href="{{ route('package.detail', 5) }}" class="btn-hero btn-hero-primary">
                            <i class="bi bi-gift"></i>
                            Lihat Paket Ramadhan
                        </a>
                        <a href="{{ route('register') }}" class="btn-hero btn-hero-outline">
                            <i class="bi bi-person-plus"></i>
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 4: VIP Premium -->
        <div class="hero-slide" data-slide="4">
            <img src="{{ asset('images/hero/kabah-view.jpg') }}" alt="Kabah View">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="bi bi-gem"></i>
                        <span>Layanan Premium Eksklusif</span>
                    </div>
                    <h1 class="hero-title">
                        Paket <span class="hero-title-highlight">VIP Premium</span>
                    </h1>
                    <div class="hero-divider"></div>
                    <p class="hero-subtitle">
                        Pengalaman umrah tak terlupakan dengan hotel view Ka'bah, first class ticket, city tour, dan pelayanan mewah untuk kenyamanan maksimal.
                    </p>
                    <div class="hero-cta">
                        <a href="{{ route('package.detail', 2) }}" class="btn-hero btn-hero-primary">
                            <i class="bi bi-stars"></i>
                            Explore VIP Package
                        </a>
                        <a href="https://wa.me/628123456789" class="btn-hero btn-hero-outline">
                            <i class="bi bi-chat-dots"></i>
                            Chat Admin
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 5: Umrah Plus Turki -->
        <div class="hero-slide" data-slide="5">
            <img src="{{ asset('images/hero/turki-istanbul.jpg') }}" alt="Istanbul Turkey">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="bi bi-globe-asia-australia"></i>
                        <span>Paket Wisata Religi</span>
                    </div>
                    <h1 class="hero-title">
                        Umrah Plus <span class="hero-title-highlight">Turki</span>
                    </h1>
                    <div class="hero-divider"></div>
                    <p class="hero-subtitle">
                        Kombinasi sempurna ibadah umrah dan wisata Istanbul. Kunjungi Masjid Biru, Hagia Sophia, dan Grand Bazaar dalam satu perjalanan.
                    </p>
                    <div class="hero-cta">
                        <a href="{{ route('package.detail', 3) }}" class="btn-hero btn-hero-primary">
                            <i class="bi bi-airplane"></i>
                            Lihat Itinerary
                        </a>
                        <a href="https://wa.me/628123456789" class="btn-hero btn-hero-outline">
                            <i class="bi bi-question-circle"></i>
                            Tanya Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="islamic-pattern"></div>
    
    <!-- Slider Navigation Buttons - Side Position -->
    <button class="slider-nav-btn slider-prev" aria-label="Previous Slide">
        <i class="bi bi-chevron-left"></i>
    </button>
    <button class="slider-nav-btn slider-next" aria-label="Next Slide">
        <i class="bi bi-chevron-right"></i>
    </button>
    
    <!-- Slider Dots - Bottom Center -->
    <div class="slider-dots">
        <button class="slider-dot active" data-slide="0" aria-label="Slide 1"></button>
        <button class="slider-dot" data-slide="1" aria-label="Slide 2"></button>
        <button class="slider-dot" data-slide="2" aria-label="Slide 3"></button>
        <button class="slider-dot" data-slide="3" aria-label="Slide 4"></button>
        <button class="slider-dot" data-slide="4" aria-label="Slide 5"></button>
    </div>
</section>

<!-- Quick Filter -->
<section class="filter-section">
    <div class="container">
        <div class="filter-tabs">
            <button class="filter-tab active">Semua Jadwal</button>
            <button class="filter-tab">Januari - Maret</button>
            <button class="filter-tab">April - Juni</button>
            <button class="filter-tab">Juli - September</button>
            <button class="filter-tab">Oktober - Desember</button>
        </div>
    </div>
</section>

<!-- Schedule Section -->
<section class="schedule-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Jadwal Terbaru</span>
            <h2 class="section-title">Pilihan Jadwal Keberangkatan</h2>
            <p class="section-subtitle">
                Berangkat sesuai jadwal Anda dengan fasilitas lengkap dan pembimbing berpengalaman
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Schedule Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="schedule-card">
                    <div class="schedule-header">
                        <span class="schedule-badge available">Tersedia</span>
                        <h3 class="schedule-package-name">Paket Umrah Reguler</h3>
                        <div class="schedule-duration">
                            <i class="bi bi-clock"></i> 9 Hari 7 Malam
                        </div>
                    </div>
                    <div class="schedule-body">
                        <div class="schedule-dates">
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Keberangkatan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-event"></i>
                                    15 Mar 2025
                                </div>
                            </div>
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Kepulangan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-check"></i>
                                    23 Mar 2025
                                </div>
                            </div>
                        </div>
                        
                        <ul class="schedule-features">
                            <li><i class="bi bi-check-circle-fill"></i> Hotel Bintang 5 dekat Haram</li>
                            <li><i class="bi bi-check-circle-fill"></i> Tiket Pesawat PP (Garuda/Saudia)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Makan 3x Sehari (Buffet)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Pembimbing Ibadah Berpengalaman</li>
                            <li><i class="bi bi-check-circle-fill"></i> Visa & Asuransi Perjalanan</li>
                        </ul>
                        
                        <div class="schedule-footer">
                            <div class="schedule-price-wrapper">
                                <span class="schedule-price-label">Mulai dari</span>
                                <span class="schedule-price">Rp 28jt</span>
                            </div>
                            <div class="schedule-seats">
                                <span class="schedule-seats-label">Sisa Kursi</span>
                                <span class="schedule-seats-count">27/45</span>
                            </div>
                        </div>
                        
                        <a href="{{ route('package.detail', 1) }}" class="btn-schedule">
                            <i class="bi bi-info-circle"></i>
                            Lihat Detail & Daftar
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Schedule Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="schedule-card">
                    <div class="schedule-header">
                        <span class="schedule-badge limited">Hampir Penuh</span>
                        <h3 class="schedule-package-name">Paket Umrah VIP Premium</h3>
                        <div class="schedule-duration">
                            <i class="bi bi-clock"></i> 12 Hari 10 Malam
                        </div>
                    </div>
                    <div class="schedule-body">
                        <div class="schedule-dates">
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Keberangkatan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-event"></i>
                                    10 Apr 2025
                                </div>
                            </div>
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Kepulangan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-check"></i>
                                    21 Apr 2025
                                </div>
                            </div>
                        </div>
                        
                        <ul class="schedule-features">
                            <li><i class="bi bi-check-circle-fill"></i> Hotel Bintang 5 View Ka'bah</li>
                            <li><i class="bi bi-check-circle-fill"></i> Tiket First Class (Garuda)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Makan Premium (Arab & Indo)</li>
                            <li><i class="bi bi-check-circle-fill"></i> City Tour Madinah & Jeddah</li>
                            <li><i class="bi bi-check-circle-fill"></i> Koper Premium + Perlengkapan</li>
                        </ul>
                        
                        <div class="schedule-footer">
                            <div class="schedule-price-wrapper">
                                <span class="schedule-price-label">Mulai dari</span>
                                <span class="schedule-price">Rp 45jt</span>
                            </div>
                            <div class="schedule-seats">
                                <span class="schedule-seats-label">Sisa Kursi</span>
                                <span class="schedule-seats-count limited">5/30</span>
                            </div>
                        </div>
                        
                        <a href="{{ route('package.detail', 2) }}" class="btn-schedule">
                            <i class="bi bi-info-circle"></i>
                            Lihat Detail & Daftar
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Schedule Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="schedule-card">
                    <div class="schedule-header">
                        <span class="schedule-badge available">Tersedia</span>
                        <h3 class="schedule-package-name">Paket Umrah Plus Turki</h3>
                        <div class="schedule-duration">
                            <i class="bi bi-clock"></i> 15 Hari 13 Malam
                        </div>
                    </div>
                    <div class="schedule-body">
                        <div class="schedule-dates">
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Keberangkatan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-event"></i>
                                    05 Mei 2025
                                </div>
                            </div>
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Kepulangan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-check"></i>
                                    19 Mei 2025
                                </div>
                            </div>
                        </div>
                        
                        <ul class="schedule-features">
                            <li><i class="bi bi-check-circle-fill"></i> Umrah + Wisata Istanbul</li>
                            <li><i class="bi bi-check-circle-fill"></i> Hotel Bintang 5 (Saudi & Turki)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Visit Masjid Biru & Hagia Sophia</li>
                            <li><i class="bi bi-check-circle-fill"></i> Shopping Grand Bazaar</li>
                            <li><i class="bi bi-check-circle-fill"></i> Tour Leader Berpengalaman</li>
                        </ul>
                        
                        <div class="schedule-footer">
                            <div class="schedule-price-wrapper">
                                <span class="schedule-price-label">Mulai dari</span>
                                <span class="schedule-price">Rp 38jt</span>
                            </div>
                            <div class="schedule-seats">
                                <span class="schedule-seats-label">Sisa Kursi</span>
                                <span class="schedule-seats-count">35/45</span>
                            </div>
                        </div>
                        
                        <a href="{{ route('package.detail', 3) }}" class="btn-schedule">
                            <i class="bi bi-info-circle"></i>
                            Lihat Detail & Daftar
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Schedule Card 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="schedule-card">
                    <div class="schedule-header">
                        <span class="schedule-badge available">Tersedia</span>
                        <h3 class="schedule-package-name">Paket Umrah Ekonomis</h3>
                        <div class="schedule-duration">
                            <i class="bi bi-clock"></i> 9 Hari 7 Malam
                        </div>
                    </div>
                    <div class="schedule-body">
                        <div class="schedule-dates">
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Keberangkatan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-event"></i>
                                    20 Jun 2025
                                </div>
                            </div>
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Kepulangan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-check"></i>
                                    28 Jun 2025
                                </div>
                            </div>
                        </div>
                        
                        <ul class="schedule-features">
                            <li><i class="bi bi-check-circle-fill"></i> Hotel Bintang 3-4 Ajyad/Aziziyah</li>
                            <li><i class="bi bi-check-circle-fill"></i> Tiket Pesawat PP (Lion/Citilink)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Makan 3x Sehari</li>
                            <li><i class="bi bi-check-circle-fill"></i> Pembimbing Ibadah</li>
                            <li><i class="bi bi-check-circle-fill"></i> Visa & Handling</li>
                        </ul>
                        
                        <div class="schedule-footer">
                            <div class="schedule-price-wrapper">
                                <span class="schedule-price-label">Mulai dari</span>
                                <span class="schedule-price">Rp 22jt</span>
                            </div>
                            <div class="schedule-seats">
                                <span class="schedule-seats-label">Sisa Kursi</span>
                                <span class="schedule-seats-count">40/45</span>
                            </div>
                        </div>
                        
                        <a href="{{ route('package.detail', 4) }}" class="btn-schedule">
                            <i class="bi bi-info-circle"></i>
                            Lihat Detail & Daftar
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Schedule Card 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="schedule-card">
                    <div class="schedule-header">
                        <span class="schedule-badge available">Tersedia</span>
                        <h3 class="schedule-package-name">Paket Umrah Ramadhan</h3>
                        <div class="schedule-duration">
                            <i class="bi bi-clock"></i> 12 Hari 10 Malam
                        </div>
                    </div>
                    <div class="schedule-body">
                        <div class="schedule-dates">
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Keberangkatan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-event"></i>
                                    01 Mar 2025
                                </div>
                            </div>
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Kepulangan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-check"></i>
                                    12 Mar 2025
                                </div>
                            </div>
                        </div>
                        
                        <ul class="schedule-features">
                            <li><i class="bi bi-check-circle-fill"></i> Special Ramadhan Package</li>
                            <li><i class="bi bi-check-circle-fill"></i> Hotel Bintang 5 Walking Distance</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sahur & Iftar Premium</li>
                            <li><i class="bi bi-check-circle-fill"></i> Tarawih di Masjidil Haram</li>
                            <li><i class="bi bi-check-circle-fill"></i> Paket Berkah Ramadhan</li>
                        </ul>
                        
                        <div class="schedule-footer">
                            <div class="schedule-price-wrapper">
                                <span class="schedule-price-label">Mulai dari</span>
                                <span class="schedule-price">Rp 42jt</span>
                            </div>
                            <div class="schedule-seats">
                                <span class="schedule-seats-label">Sisa Kursi</span>
                                <span class="schedule-seats-count">18/40</span>
                            </div>
                        </div>
                        
                        <a href="{{ route('package.detail', 5) }}" class="btn-schedule">
                            <i class="bi bi-info-circle"></i>
                            Lihat Detail & Daftar
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Schedule Card 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="schedule-card">
                    <div class="schedule-header">
                        <span class="schedule-badge limited">Hampir Penuh</span>
                        <h3 class="schedule-package-name">Paket Haji Furoda</h3>
                        <div class="schedule-duration">
                            <i class="bi bi-clock"></i> 25 Hari 23 Malam
                        </div>
                    </div>
                    <div class="schedule-body">
                        <div class="schedule-dates">
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Keberangkatan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-event"></i>
                                    10 Jun 2025
                                </div>
                            </div>
                            <div class="schedule-date-item">
                                <div class="schedule-date-label">Kepulangan</div>
                                <div class="schedule-date-value">
                                    <i class="bi bi-calendar-check"></i>
                                    04 Jul 2025
                                </div>
                            </div>
                        </div>
                        
                        <ul class="schedule-features">
                            <li><i class="bi bi-check-circle-fill"></i> Program Haji Khusus (ONH Plus)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Hotel Bintang 5 Makkah & Madinah</li>
                            <li><i class="bi bi-check-circle-fill"></i> Full AC Bus & Catering</li>
                            <li><i class="bi bi-check-circle-fill"></i> Tenda Arafah Ber-AC</li>
                            <li><i class="bi bi-check-circle-fill"></i> Handling Penuh 25 Hari</li>
                        </ul>
                        
                        <div class="schedule-footer">
                            <div class="schedule-price-wrapper">
                                <span class="schedule-price-label">Mulai dari</span>
                                <span class="schedule-price">Rp 85jt</span>
                            </div>
                            <div class="schedule-seats">
                                <span class="schedule-seats-label">Sisa Kursi</span>
                                <span class="schedule-seats-count limited">8/35</span>
                            </div>
                        </div>
                        
                        <a href="{{ route('package.detail', 6) }}" class="btn-schedule">
                            <i class="bi bi-info-circle"></i>
                            Lihat Detail & Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('schedule') }}" class="btn-cta btn-cta-primary">
                <i class="bi bi-calendar3"></i>
                Lihat Semua Jadwal
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number">9+</div>
                <div class="stat-label">Tahun Pengalaman</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">15K+</div>
                <div class="stat-label">Jamaah Dilayani</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">6</div>
                <div class="stat-label">Cabang di Indonesia</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">Kepuasan Jamaah</div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Mengapa Pilih Kami</span>
            <h2 class="section-title">Keunggulan Mahira Tour</h2>
            <p class="section-subtitle">
                Kami berkomitmen memberikan pelayanan terbaik untuk perjalanan ibadah Anda
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="feature-title">Izin Resmi</h3>
                    <p class="feature-description">
                        Terdaftar dan berizin resmi dari Kementerian Agama RI
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <h3 class="feature-title">Hotel Terbaik</h3>
                    <p class="feature-description">
                        Hotel bintang 5 dengan jarak dekat dari Masjidil Haram
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 class="feature-title">Tim Profesional</h3>
                    <p class="feature-description">
                        Pembimbing ibadah dan tour leader berpengalaman
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-wallet2"></i>
                    </div>
                    <h3 class="feature-title">Harga Terjangkau</h3>
                    <p class="feature-description">
                        Paket umrah dengan harga kompetitif dan fasilitas lengkap
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Siap Berangkat ke Tanah Suci?</h2>
            <p class="cta-subtitle">
                Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik.<br>
                Tim profesional kami siap membantu Anda 24/7.
            </p>
            <div class="cta-buttons">
                <a href="https://wa.me/628123456789" class="btn-cta btn-cta-primary">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi via WhatsApp
                </a>
                <a href="{{ route('register') }}" class="btn-cta btn-cta-secondary">
                    <i class="bi bi-person-plus"></i>
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush