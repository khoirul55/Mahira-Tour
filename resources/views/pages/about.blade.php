@extends('layouts.app')

@section('title', 'Tentang Kami - Mahira Tour')

@push('styles')
<style>
    :root {
        --primary-navy: #001D5F;
        --white: #FFFFFF;
        --light-navy: #002B8F;
        --lighter-navy: #E8EBF3;
        --gold: #D4AF37;
        --text-dark: #1A1A1A;
        --text-gray: #6B7280;
    }
    
    .page-header {
        background: linear-gradient(135deg, var(--primary-navy) 0%, var(--light-navy) 100%);
        color: var(--white);
        padding: 120px 0 80px;
        position: relative;
        overflow: hidden;
    }
    
    .page-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>') repeat;
        opacity: 0.3;
    }
    
    .page-header-content {
        position: relative;
        z-index: 2;
    }
    
    .breadcrumb-custom {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        padding: 8px 20px;
        display: inline-block;
        margin-bottom: 20px;
    }
    
    .breadcrumb-custom a {
        color: var(--white);
        text-decoration: none;
        opacity: 0.8;
        transition: opacity 0.3s;
    }
    
    .breadcrumb-custom a:hover {
        opacity: 1;
    }
    
    .section-title-wrapper {
        text-align: center;
        margin-bottom: 60px;
    }
    
    .section-subtitle {
        color: var(--gold);
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 15px;
        display: inline-block;
        padding: 8px 20px;
        background: rgba(212, 175, 55, 0.1);
        border-radius: 50px;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 20px;
        line-height: 1.2;
    }
    
    .section-description {
        color: var(--text-gray);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.7;
    }
    
    .about-hero-img {
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 29, 95, 0.15);
        overflow: hidden;
        position: relative;
    }
    
    .about-hero-img::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0, 29, 95, 0.2) 0%, transparent 100%);
    }
    
    .stat-card {
        background: var(--white);
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 29, 95, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 2px solid transparent;
        height: 100%;
    }
    
    .stat-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0, 29, 95, 0.15);
        border-color: var(--gold);
    }
    
    .stat-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.3);
        transition: all 0.4s;
    }
    
    .stat-card:hover .stat-icon {
        transform: scale(1.1) rotate(5deg);
        background: linear-gradient(135deg, var(--gold), #F4D03F);
    }
    
    .stat-icon i {
        font-size: 2rem;
        color: var(--white);
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary-navy);
        margin-bottom: 10px;
        line-height: 1;
    }
    
    .stat-label {
        color: var(--text-gray);
        font-size: 1rem;
        font-weight: 600;
    }
    
    .vision-mission-card {
        background: var(--white);
        border-radius: 24px;
        padding: 3rem;
        box-shadow: 0 15px 50px rgba(0, 29, 95, 0.1);
        height: 100%;
        border: 2px solid var(--lighter-navy);
        transition: all 0.4s;
        position: relative;
        overflow: hidden;
    }
    
    .vision-mission-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-navy), var(--gold));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s ease;
    }
    
    .vision-mission-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 70px rgba(0, 29, 95, 0.2);
        border-color: var(--gold);
    }
    
    .vision-mission-card:hover::before {
        transform: scaleX(1);
    }
    
    .vm-icon-wrapper {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--lighter-navy), rgba(0, 29, 95, 0.1));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        transition: all 0.4s;
    }
    
    .vision-mission-card:hover .vm-icon-wrapper {
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        transform: scale(1.1) rotate(-5deg);
    }
    
    .vm-icon-wrapper i {
        font-size: 2.5rem;
        color: var(--primary-navy);
        transition: color 0.4s;
    }
    
    .vision-mission-card:hover .vm-icon-wrapper i {
        color: var(--white);
    }
    
    .vm-title {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--primary-navy);
        margin-bottom: 20px;
    }
    
    .vm-text {
        color: var(--text-gray);
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 25px;
    }
    
    .mission-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .mission-list li {
        padding: 15px 0;
        border-bottom: 1px solid var(--lighter-navy);
        color: var(--text-gray);
        display: flex;
        align-items: start;
        gap: 15px;
        transition: all 0.3s;
    }
    
    .mission-list li:last-child {
        border-bottom: none;
    }
    
    .mission-list li:hover {
        color: var(--primary-navy);
        padding-left: 10px;
    }
    
    .mission-list li i {
        color: var(--gold);
        font-size: 1.2rem;
        margin-top: 3px;
        flex-shrink: 0;
    }
    
    .leadership-section {
        background: linear-gradient(180deg, var(--white) 0%, var(--lighter-navy) 100%);
        padding: 100px 0;
    }
    
    .leader-card {
        background: var(--white);
        border-radius: 24px;
        padding: 3rem;
        text-align: center;
        box-shadow: 0 15px 50px rgba(0, 29, 95, 0.1);
        transition: all 0.4s;
        border: 2px solid transparent;
        height: 100%;
    }
    
    .leader-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 70px rgba(0, 29, 95, 0.2);
        border-color: var(--gold);
    }
    
    .leader-avatar {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        font-size: 3rem;
        font-weight: 800;
        color: var(--white);
        box-shadow: 0 15px 40px rgba(0, 29, 95, 0.3);
        transition: all 0.4s;
        border: 5px solid var(--white);
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.2), 0 0 0 10px rgba(0, 29, 95, 0.05);
    }
    
    .leader-card:hover .leader-avatar {
        transform: scale(1.1);
        background: linear-gradient(135deg, var(--gold), #F4D03F);
    }
    
    .leader-name {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--primary-navy);
        margin-bottom: 10px;
    }
    
    .leader-position {
        color: var(--text-gray);
        font-size: 1rem;
        font-weight: 600;
    }
    
    .branches-section {
        padding: 100px 0;
        background: var(--white);
    }
    
    .branch-card {
        background: var(--white);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 29, 95, 0.08);
        transition: all 0.4s;
        border: 2px solid var(--lighter-navy);
        height: 100%;
    }
    
    .branch-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0, 29, 95, 0.15);
        border-color: var(--primary-navy);
    }
    
    .branch-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .branch-icon i {
        color: var(--white);
        font-size: 1.5rem;
    }
    
    .branch-region {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--primary-navy);
        margin-bottom: 5px;
    }
    
    .branch-name {
        color: var(--text-gray);
        font-size: 0.9rem;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .branch-address {
        color: var(--text-gray);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 0;
    }
    
    .license-section {
        background: linear-gradient(135deg, var(--primary-navy) 0%, var(--light-navy) 100%);
        padding: 80px 0;
        color: var(--white);
        position: relative;
        overflow: hidden;
    }
    
    .license-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>') repeat;
    }
    
    .license-content {
        position: relative;
        z-index: 2;
    }
    
    .license-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 2.5rem;
        border: 2px solid rgba(255, 255, 255, 0.2);
        transition: all 0.4s;
        height: 100%;
    }
    
    .license-card:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: var(--gold);
        transform: translateY(-10px);
    }
    
    .license-icon {
        font-size: 3.5rem;
        margin-bottom: 25px;
        color: var(--gold);
        transition: all 0.4s;
    }
    
    .license-card:hover .license-icon {
        transform: scale(1.2) rotate(10deg);
    }
    
    .license-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: var(--white);
    }
    
    .license-text {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.9);
        margin: 0;
    }
    
    @media (max-width: 768px) {
        .page-header {
            padding: 80px 0 50px;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .stat-card, .vision-mission-card, .leader-card {
            margin-bottom: 20px;
        }
    }
</style>
@endpush

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content text-center">
            <div class="breadcrumb-custom">
                <a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Beranda</a>
                <span class="mx-2">/</span>
                <span>Tentang Kami</span>
            </div>
            <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">Tentang Mahira Tour</h1>
            <p class="lead" style="max-width: 700px; margin: 0 auto; font-size: 1.25rem;" data-aos="fade-up" data-aos-delay="100">
                {{ $companyInfo['tagline'] }} - Mitra terpercaya perjalanan ibadah Anda sejak {{ $companyInfo['founded'] }}
            </p>
        </div>
    </div>
</section>

<!-- Company Profile -->
<section class="py-5" style="padding: 100px 0;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-hero-img">
                    <img src="https://images.unsplash.com/photo-1542816417-0983c9c9ad53?w=800&h=600&fit=crop" 
                         class="img-fluid" alt="Mahira Tour">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-subtitle">PROFIL PERUSAHAAN</div>
                <h2 class="section-title mb-4">{{ $companyInfo['name'] }}</h2>
                <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.8;">
                    {{ $companyInfo['description'] }}
                </p>
                
                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div class="stat-number">{{ $companyInfo['founded'] }}</div>
                            <div class="stat-label">Tahun Berdiri</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="stat-number">{{ $companyInfo['ppiu_date'] }}</div>
                            <div class="stat-label">Izin PPIU Resmi</div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 p-4" style="background: var(--lighter-navy); border-radius: 15px; border-left: 5px solid var(--primary-navy);">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-geo-alt-fill text-primary fs-3 me-3"></i>
                        <div>
                            <small class="text-muted d-block mb-1">Kantor Pusat</small>
                            <strong class="text-dark">{{ $companyInfo['main_office'] }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-5" style="background: var(--lighter-navy); padding: 100px 0;">
    <div class="container">
        <div class="section-title-wrapper" data-aos="fade-up">
            <div class="section-subtitle">VISI & MISI</div>
            <h2 class="section-title">Komitmen Kami untuk Anda</h2>
            <p class="section-description">
                Dedikasi penuh dalam memberikan pelayanan terbaik untuk perjalanan ibadah Anda
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="vision-mission-card">
                    <div class="vm-icon-wrapper">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3 class="vm-title">Visi Kami</h3>
                    <p class="vm-text">{{ $visionMission['vision'] }}</p>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="vision-mission-card">
                    <div class="vm-icon-wrapper">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3 class="vm-title">Misi Kami</h3>
                    <ul class="mission-list">
                        @foreach($visionMission['missions'] as $mission)
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>{{ $mission }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership -->
<section class="leadership-section">
    <div class="container">
        <div class="section-title-wrapper" data-aos="fade-up">
            <div class="section-subtitle">KEPEMIMPINAN</div>
            <h2 class="section-title">Pimpinan Mahira Tour</h2>
            <p class="section-description">
                Dipimpin oleh profesional berpengalaman di bidang travel dan layanan haji & umrah
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            @foreach($leadership as $index => $leader)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                <div class="leader-card">
                    <div class="leader-avatar">
                        {{ substr($leader['name'], 0, 1) }}
                    </div>
                    <h4 class="leader-name">{{ $leader['name'] }}</h4>
                    <p class="leader-position">{{ $leader['position'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Branches -->
<section class="branches-section">
    <div class="container">
        <div class="section-title-wrapper" data-aos="fade-up">
            <div class="section-subtitle">JARINGAN KAMI</div>
            <h2 class="section-title">Cabang di Seluruh Indonesia</h2>
            <p class="section-description">
                Hadir di berbagai kota untuk melayani Anda dengan lebih baik
            </p>
        </div>
        
        <div class="row g-4">
            @foreach($branches as $index => $branch)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 50 }}">
                <div class="branch-card">
                    <div class="branch-icon">
                        <i class="bi bi-{{ $branch['is_main'] ? 'building' : 'geo-alt' }}"></i>
                    </div>
                    <h5 class="branch-region">{{ $branch['region'] }}</h5>
                    <p class="branch-name">{{ $branch['name'] }}</p>
                    <p class="branch-address">
                        <i class="bi bi-map me-2 text-primary"></i>{{ $branch['address'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Licenses -->
<section class="license-section">
    <div class="container">
        <div class="license-content text-center">
            <div class="section-title-wrapper" data-aos="fade-up">
                <div class="section-subtitle" style="background: rgba(255, 255, 255, 0.1); color: var(--gold);">LEGALITAS & SERTIFIKASI</div>
                <h2 class="section-title" style="color: var(--white);">Terdaftar & Tersertifikasi Resmi</h2>
                <p class="section-description" style="color: rgba(255, 255, 255, 0.9);">
                    Mahira Tour memiliki izin lengkap dan tersertifikasi untuk memberikan pelayanan terbaik
                </p>
            </div>
            
            <div class="row g-4 mt-5">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="license-card">
                        <i class="bi bi-award license-icon"></i>
                        <h4 class="license-title">Izin PPIU Resmi</h4>
                        <p class="license-text">Kementerian Agama RI<br>Diterbitkan: {{ $companyInfo['ppiu_date'] }}</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="license-card">
                        <i class="bi bi-shield-check license-icon"></i>
                        <h4 class="license-title">Terdaftar Resmi</h4>
                        <p class="license-text">ASITA & AMPHURI<br>Anggota Aktif</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="license-card">
                        <i class="bi bi-patch-check license-icon"></i>
                        <h4 class="license-title">Sertifikasi Internasional</h4>
                        <p class="license-text">ISO 9001:2015<br>Quality Management</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5" style="padding: 80px 0; background: var(--white);">
    <div class="container text-center">
        <div data-aos="fade-up">
            <h3 class="fw-bold mb-3" style="color: var(--primary-navy); font-size: 2.5rem;">
                Siap Memulai Perjalanan Spiritual Anda?
            </h3>
            <p class="lead text-muted mb-5" style="max-width: 600px; margin: 0 auto 2rem;">
                Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('packages') }}" class="btn btn-lg px-5" style="background: var(--primary-navy); color: var(--white); border-radius: 50px; font-weight: 600; padding: 15px 40px; transition: all 0.3s;">
                    <i class="bi bi-box-seam me-2"></i>Lihat Paket Kami
                </a>
                <a href="https://wa.me/{{ $companyInfo['phone'] }}" class="btn btn-lg px-5" style="background: var(--gold); color: var(--white); border-radius: 50px; font-weight: 600; padding: 15px 40px; transition: all 0.3s;">
                    <i class="bi bi-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>
@endpush