{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Beranda - Mahira Tour | Travel Haji & Umrah Terpercaya')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<!-- ==================== HERO VIDEO SECTION ==================== -->
<section class="hero-video-section">
    <!-- Background Video -->
    <video class="hero-video" autoplay muted loop playsinline preload="metadata" poster="{{ asset('images/hero/kaabah-poster.jpg') }}">
        <source src="{{ asset('videos/kaabah-hero.mp4') }}" type="video/mp4">
        <source src="{{ asset('videos/kaabah-hero.webm') }}" type="video/webm">
        Your browser does not support the video tag.
    </video>
    
    <!-- Dark Overlay -->
    <div class="hero-overlay"></div>
    
    <!-- Hero Content -->
    <div class="hero-content-wrapper">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>Terpercaya Sejak 2016</span>
                </div>
                
                <h1 class="hero-title">
                    Wujudkan Ibadah Umrah & Haji<br>
                    Bersama <span class="highlight">Keluarga</span>
                </h1>
                
                <p class="hero-subtitle">
                    Bimbingan lengkap, fasilitas nyaman, harga transparan.<br>
                    Berangkat dengan tenang, pulang dengan penuh berkah.
                </p>
                
                <div class="hero-cta">
                    <a href="#paket" class="btn-primary">
                        <i class="bi bi-calendar-check"></i>
                        Lihat Paket Umrah
                    </a>
                    <a href="https://wa.me/6282184515310" class="btn-outline" target="_blank">
                        <i class="bi bi-whatsapp"></i>
                        Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== STATS SECTION ==================== -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">99%</div>
                <div class="stat-label">Jamaah Puas</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">20+</div>
                <div class="stat-label">Tahun Pengalaman</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">3000+</div>
                <div class="stat-label">Jamaah Dilayani</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">6</div>
                <div class="stat-label">Kantor Cabang</div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== ABOUT SECTION ==================== -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="section-badge">Tentang Kami</span>
                    <h2 class="section-title">Mahira Tour<br>Travel Umrah & Haji Terpercaya</h2>
                    <p class="section-text">
                        Mahira Tour adalah perusahaan travel yang fokus pada penyelenggaraan perjalanan Umrah dan Haji. 
                        Berizin resmi dari Kementerian Agama RI, kami berkomitmen memberikan pelayanan terbaik 
                        dengan fasilitas premium dan bimbingan spiritual yang mendalam.
                    </p>
                    
                    <ul class="feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Izin Resmi Kemenag RI</li>
                        <li><i class="bi bi-check-circle-fill"></i> Pembimbing Berpengalaman</li>
                        <li><i class="bi bi-check-circle-fill"></i> Fasilitas Premium</li>
                        <li><i class="bi bi-check-circle-fill"></i> Harga Kompetitif</li>
                    </ul>
                    
                    <div class="about-buttons">
                        <a href="{{ route('about') }}" class="btn-primary">Tentang Kami</a>
                        <a href="#legalitas" class="btn-text">Lihat Legalitas</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('images/hero/jamaah2.jpeg') }}" alt="Kantor Mahira Tour">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== WHY CHOOSE US SECTION ==================== -->
<section class="why-section">
    <div class="container">
        <div class="section-header-center">
            <span class="section-badge">Mengapa Pilih Kami</span>
            <h2 class="section-title">Keunggulan Mahira Tour</h2>
            <p class="section-subtitle">
                Komitmen kami adalah memberikan pengalaman ibadah yang berkah dan tak terlupakan
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h3 class="why-title">Sesuai Syariat Islam</h3>
                    <p class="why-text">
                        Seluruh program kami mengikuti tuntunan Al-Qur'an dan Sunnah dengan bimbingan ustadz kompeten.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="why-title">Izin Resmi</h3>
                    <p class="why-text">
                        Terdaftar dan diawasi langsung oleh Kementerian Agama RI PPIU No : 21062301498960002  
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="why-title">Profesional & Berpengalaman</h3>
                    <p class="why-text">
                        Tim pembimbing dan tour leader yang berpengalaman melayani ribuan jamaah sejak 2016.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PACKAGE SECTION ==================== -->
<section class="package-section" id="paket">
    <div class="container">
        <div class="section-header-center">
            <span class="section-badge">Paket Istimewa</span>
            <h2 class="section-title">Penawaran Paket Haji dan Umrah</h2>
            <p class="section-subtitle">
                Pilih paket yang sesuai dengan kebutuhan dan kenyamanan spiritual Anda
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Package 1: Umrah Reguler -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card">
                    <div class="package-image">
                        <img src="{{ asset('images/hero/kaabah.jpg') }}" alt="Umrah Reguler">
                        <div class="package-badge">Tersedia</div>
                    </div>
                    <div class="package-body">
                        <h3 class="package-title">Paket Umrah Reguler</h3>
                        <div class="package-meta">
                            <span><i class="bi bi-calendar"></i> 9 Hari 7 Malam</span>
                            <span><i class="bi bi-geo-alt"></i> Makkah - Madinah</span>
                        </div>
                        
                        <ul class="package-features">
                            <li><i class="bi bi-check"></i> Hotel Bintang 5</li>
                            <li><i class="bi bi-check"></i> Tiket Pesawat PP</li>
                            <li><i class="bi bi-check"></i> Makan 3x Sehari</li>
                            <li><i class="bi bi-check"></i> Pembimbing Ibadah</li>
                        </ul>
                        
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="price-label">Mulai dari</span>
                                <span class="price-value">Rp 28 Juta</span>
                            </div>
                            <a href="{{ route('package.detail', 1) }}" class="btn-package">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Package 2: Umrah VIP Premium (Best Seller) -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card featured">
                    <div class="package-image">
                        <img src="{{ asset('images/hero/promo.jpg') }}" alt="Umrah VIP">
                        <div class="package-badge featured">Best Seller</div>
                    </div>
                    <div class="package-body">
                        <h3 class="package-title">Paket Umrah VIP Premium</h3>
                        <div class="package-meta">
                            <span><i class="bi bi-calendar"></i> 12 Hari 10 Malam</span>
                            <span><i class="bi bi-geo-alt"></i> Makkah - Madinah</span>
                        </div>
                        
                        <ul class="package-features">
                            <li><i class="bi bi-check"></i> Hotel View Ka'bah</li>
                            <li><i class="bi bi-check"></i> First Class Ticket</li>
                            <li><i class="bi bi-check"></i> Makan Premium</li>
                            <li><i class="bi bi-check"></i> City Tour</li>
                        </ul>
                        
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="price-label">Mulai dari</span>
                                <span class="price-value">Rp 45 Juta</span>
                            </div>
                            <a href="{{ route('package.detail', 2) }}" class="btn-package">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Package 3: Umrah Ramadhan -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card">
                    <div class="package-image">
                        <img src="{{ asset('images/hero/hero-5.jpg') }}" alt="Umrah Ramadhan">
                        <div class="package-badge">Tersedia</div>
                    </div>
                    <div class="package-body">
                        <h3 class="package-title">Paket Umrah Ramadhan</h3>
                        <div class="package-meta">
                            <span><i class="bi bi-calendar"></i> 12 Hari 10 Malam</span>
                            <span><i class="bi bi-geo-alt"></i> Makkah - Madinah</span>
                        </div>
                        
                        <ul class="package-features">
                            <li><i class="bi bi-check"></i> Special Ramadhan</li>
                            <li><i class="bi bi-check"></i> Hotel Bintang 5</li>
                            <li><i class="bi bi-check"></i> Sahur & Iftar Premium</li>
                            <li><i class="bi bi-check"></i> Tarawih di Haram</li>
                        </ul>
                        
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="price-label">Mulai dari</span>
                                <span class="price-value">Rp 42 Juta</span>
                            </div>
                            <a href="{{ route('package.detail', 3) }}" class="btn-package">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('schedule') }}" class="btn-primary-lg">
                Lihat Semua Paket
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ==================== TESTIMONIAL SECTION ==================== -->
<section class="testimonial-section">
    <div class="container">
        <div class="section-header-center">
            <span class="section-badge">Testimoni</span>
            <h2 class="section-title">Video Testimoni Jamaah</h2>
            <p class="section-subtitle">
                Dengarkan pengalaman jamaah yang telah merasakan ibadah bersama Mahira Tour
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-video">
                        <video controls poster="{{ asset('images/testimonial-1.jpg') }}">
                            <source src="{{ asset('videos/testimonial-1.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="testimonial-content">
                        <h4 class="testimonial-title">Pengalaman Umrah Luar Biasa</h4>
                        <p class="testimonial-name">Ibu Siti - Jakarta</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-video">
                        <video controls poster="{{ asset('images/testimonial-2.jpg') }}">
                            <source src="{{ asset('videos/testimonial-2.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="testimonial-content">
                        <h4 class="testimonial-title">Pelayanan Sangat Memuaskan</h4>
                        <p class="testimonial-name">Bapak Ahmad - Bandung</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-video">
                        <video controls poster="{{ asset('images/testimonial-3.jpg') }}">
                            <source src="{{ asset('videos/testimonial-3.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="testimonial-content">
                        <h4 class="testimonial-title">Terima Kasih Mahira Tour</h4>
                        <p class="testimonial-name">Ibu Fatimah - Surabaya</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('testimonials') }}" class="btn-outline-primary">
                Lihat Semua Testimoni
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ==================== GALLERY SECTION ==================== -->
<section class="gallery-section">
    <div class="container">
        <div class="section-header-center">
            <span class="section-badge">Galeri</span>
            <h2 class="section-title">Dokumentasi Perjalanan Ibadah</h2>
        </div>
        
        <div class="gallery-grid">
            @php
            $galleries = [
                ['src' => 'gallery/gallery-1.jpeg', 'alt' => 'Jamaah di Masjid Nabawi'],
                ['src' => 'gallery/gallery-2.jpeg', 'alt' => 'Jamaah di Jabal Rahmah'],
                ['src' => 'gallery/gallery-3.jpeg', 'alt' => 'Jamaah di Masjidil Haram'],
                ['src' => 'gallery/gallery-4.jpeg', 'alt' => 'Jamaah di Makkah'],
                ['src' => 'gallery/gallery-5.jpeg', 'alt' => 'Jamaah di Madinah'],
                ['src' => 'gallery/gallery-6.jpeg', 'alt' => 'Jamaah Mahira Tour']
            ];
            @endphp
            
            @foreach($galleries as $index => $item)
            <div class="gallery-item" onclick="openGalleryModal({{ $index }})">
                <img src="{{ asset('images/' . $item['src']) }}" alt="{{ $item['alt'] }}">
                <div class="gallery-overlay">
                    <i class="bi bi-zoom-in"></i>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('gallery') }}" class="btn-outline-primary">
                Lihat Galeri Lengkap
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Gallery Modal -->
<div id="galleryModal" class="gallery-modal">
    <span class="gallery-close" onclick="closeGalleryModal()">&times;</span>
    <div class="gallery-counter" id="galleryCounter"></div>
    
    <button class="gallery-nav prev" onclick="changeGallery(-1)">
        <i class="bi bi-chevron-left"></i>
    </button>
    
    <div class="gallery-modal-content">
        <img id="galleryModalImg" src="" alt="">
    </div>
    
    <button class="gallery-nav next" onclick="changeGallery(1)">
        <i class="bi bi-chevron-right"></i>
    </button>
</div>

<!-- ==================== LOCATION SECTION ==================== -->
<section class="location-section">
    <div class="container">
        <div class="section-header-center">
            <span class="section-badge">Lokasi Kami</span>
            <h2 class="section-title">Kunjungi Kantor Pusat Mahira Tour</h2>
            <p class="section-subtitle">
                Jl. Raya Makkah No. 123, Jakarta Selatan 12345
            </p>
        </div>
        
        <div class="location-wrapper">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7974.528410081892!2d101.3896565!3d-2.050239!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2da1004b62a7c9%3A0xdebd36e55d2e3189!2sTravel%20Umroh%20Mahira%20Tour!5e0!3m2!1sid!2sid!4v1766545347293!5m2!1sid!2sid" 
                height="450" 
                style="border:0; border-radius: 16px;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        
        <div class="text-center mt-4">
            <a href="https://www.google.com/maps/place/Travel+Umroh+Mahira+Tour/@-2.050239,101.3896565,15z" target="_blank" class="btn-primary-lg">
                <i class="bi bi-map"></i>
                Buka di Google Maps
            </a>
        </div>
    </div>
</section>

<!-- ==================== PARTNERS SECTION ==================== -->
<section class="partners-section">
    <div class="container">
        <div class="section-header-center">
            <span class="section-badge">Mitra Kami</span>
            <h2 class="section-title">Maskapai yang Digunakan</h2>
        </div>
        
        <div class="partners-grid">
            <div class="partner-item">
                <img src="{{ asset('images/partners/garuda.png') }}" alt="Garuda Indonesia">
            </div>
            <div class="partner-item">
                <img src="{{ asset('images/partners/saudia.png') }}" alt="Saudia Airlines">
            </div>
            <div class="partner-item">
                <img src="{{ asset('images/partners/batik.png') }}" alt="Batik Air">
            </div>
            <div class="partner-item">
                <img src="{{ asset('images/partners/lion.png') }}" alt="Lion Air">
            </div>
        </div>
    </div>
</section>

<!-- ==================== CTA SECTION ==================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Siap Berangkat ke Tanah Suci?</h2>
            <p class="cta-subtitle">
                Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik
            </p>
            <div class="cta-buttons">
                <a href="https://wa.me/628123456789" class="btn-cta-primary" target="_blank">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi via WhatsApp
                </a>
                <a href="{{ route('register') }}" class="btn-cta-secondary">
                    <i class="bi bi-person-plus"></i>
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FLOATING INQUIRY BUTTON ==================== 
 <div class="floating-inquiry">
    <span class="inquiry-label">Ada Pertanyaan?</span>
    <button class="inquiry-button" data-bs-toggle="modal" data-bs-target="#inquiryModal">
        <i class="bi bi-chat-dots-fill"></i>
    </button>
</div>

 ==================== INQUIRY MODAL ==================== 
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inquiryModalLabel">Konsultasi Paket Umrah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="inquiryForm">
                    <input type="text" name="name" placeholder="Nama Lengkap *" required>
                    <input type="email" name="email" placeholder="Email *" required>
                    <input type="tel" name="phone" placeholder="Nomor WhatsApp *" required>
                    <select name="package" required>
                        <option value="">Pilih Paket *</option>
                        <option value="Umrah Reguler">Umrah Reguler</option>
                        <option value="Umrah VIP Premium">Umrah VIP Premium</option>
                        <option value="Umrah Ramadhan">Umrah Ramadhan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <textarea name="message" placeholder="Pertanyaan Anda (Opsional)" rows="3"></textarea>
                    <button type="submit">
                        <i class="bi bi-send-fill"></i> Kirim Pertanyaan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div> -->

@endsection

@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush