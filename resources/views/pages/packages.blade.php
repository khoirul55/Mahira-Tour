@extends('layouts.app')

@section('title', 'Paket Umrah & Haji - Mahira Tour')

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
    }
    
    .breadcrumb-custom a:hover {
        opacity: 1;
    }
    
    .filter-section {
        background: var(--white);
        box-shadow: 0 4px 20px rgba(0, 29, 95, 0.08);
        position: sticky;
        top: 76px;
        z-index: 999;
        padding: 20px 0;
    }
    
    .filter-btn {
        border: 2px solid var(--lighter-navy);
        background: var(--white);
        color: var(--text-gray);
        padding: 12px 28px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .filter-btn:hover {
        border-color: var(--primary-navy);
        background: var(--lighter-navy);
        color: var(--primary-navy);
        transform: translateY(-2px);
    }
    
    .filter-btn.active {
        border-color: var(--primary-navy);
        background: var(--primary-navy);
        color: var(--white);
        box-shadow: 0 8px 25px rgba(0, 29, 95, 0.25);
    }
    
    .package-card {
        background: var(--white);
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 29, 95, 0.08);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        border: 2px solid transparent;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .package-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 70px rgba(0, 29, 95, 0.2);
        border-color: var(--gold);
    }
    
    .package-image-wrapper {
        position: relative;
        height: 240px;
        overflow: hidden;
    }
    
    .package-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    
    .package-card:hover .package-image-wrapper img {
        transform: scale(1.15);
    }
    
    .package-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, var(--gold), #F4D03F);
        color: var(--primary-navy);
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.85rem;
        box-shadow: 0 8px 25px rgba(212, 175, 55, 0.5);
        z-index: 10;
        display: flex;
        align-items: center;
        gap: 6px;
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
    
    .package-body {
        padding: 2rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .package-title {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--primary-navy);
        margin-bottom: 1rem;
        line-height: 1.3;
    }
    
    .package-meta {
        display: flex;
        gap: 12px;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }
    
    .package-meta-item {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: var(--lighter-navy);
        color: var(--primary-navy);
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
    }
    
    .package-meta-item i {
        font-size: 1rem;
    }
    
    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem 0;
        flex: 1;
    }
    
    .feature-list li {
        padding: 12px 0;
        border-bottom: 1px solid var(--lighter-navy);
        color: var(--text-gray);
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 0.95rem;
        transition: all 0.3s;
    }
    
    .feature-list li:last-child {
        border-bottom: none;
    }
    
    .feature-list li:hover {
        color: var(--primary-navy);
        padding-left: 10px;
    }
    
    .feature-list li i {
        color: var(--gold);
        font-size: 1.1rem;
        flex-shrink: 0;
    }
    
    .package-footer {
        border-top: 2px solid var(--lighter-navy);
        padding-top: 1.5rem;
        margin-top: auto;
    }
    
    .package-price-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }
    
    .package-price-label {
        font-size: 0.85rem;
        color: var(--text-gray);
        margin-bottom: 5px;
        display: block;
    }
    
    .package-price-amount {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--primary-navy);
        line-height: 1;
    }
    
    .package-price-person {
        font-size: 0.85rem;
        color: var(--text-gray);
    }
    
    .btn-package {
        width: 100%;
        padding: 14px;
        background: var(--primary-navy);
        color: var(--white);
        border: none;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1rem;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        text-decoration: none;
    }
    
    .btn-package:hover {
        background: var(--light-navy);
        transform: translateX(5px);
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.3);
        color: var(--white);
    }
    
    .why-choose-section {
        background: var(--lighter-navy);
        padding: 100px 0;
    }
    
    .why-card {
        background: var(--white);
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 10px 40px rgba(0, 29, 95, 0.08);
        transition: all 0.4s;
        height: 100%;
    }
    
    .why-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0, 29, 95, 0.15);
    }
    
    .why-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.3);
    }
    
    .why-icon i {
        font-size: 2rem;
        color: var(--white);
    }
    
    .why-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--primary-navy);
        margin-bottom: 15px;
    }
    
    .why-text {
        color: var(--text-gray);
        line-height: 1.7;
    }
    
    .cta-section {
        background: linear-gradient(135deg, var(--primary-navy) 0%, var(--light-navy) 100%);
        padding: 80px 0;
        color: var(--white);
        position: relative;
        overflow: hidden;
    }
    
    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>') repeat;
    }
    
    .cta-content {
        position: relative;
        z-index: 2;
    }
    
    .btn-cta {
        padding: 18px 45px;
        background: var(--gold);
        color: var(--white);
        border: none;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.15rem;
        transition: all 0.4s;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        box-shadow: 0 10px 35px rgba(212, 175, 55, 0.4);
    }
    
    .btn-cta:hover {
        background: #F4D03F;
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 15px 50px rgba(212, 175, 55, 0.6);
        color: var(--white);
    }
    
    @media (max-width: 768px) {
        .page-header {
            padding: 80px 0 50px;
        }
        
        .filter-btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
        
        .package-card {
            margin-bottom: 30px;
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
                <span>Paket Umrah & Haji</span>
            </div>
            <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">Paket Umrah & Haji</h1>
            <p class="lead" style="max-width: 700px; margin: 0 auto; font-size: 1.25rem;" data-aos="fade-up" data-aos-delay="100">
                Pilih paket yang sesuai dengan kebutuhan spiritual dan budget Anda
            </p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="filter-section">
    <div class="container">
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            @foreach($packageTypes as $key => $type)
            <button class="filter-btn {{ $key === 'all' ? 'active' : '' }}" data-filter="{{ $key }}">
                <i class="bi bi-box-seam"></i>
                <span>{{ $type }}</span>
            </button>
            @endforeach
        </div>
    </div>
</section>

<!-- Packages Grid -->
<section class="py-5" style="padding: 100px 0;">
    <div class="container">
        <div class="row g-4" id="packagesContainer">
            @foreach($packages as $package)
            <div class="col-lg-3 col-md-6 package-item" data-type="{{ $package['type'] }}" data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                <div class="package-card">
                    <div class="package-image-wrapper">
                        <img src="{{ $package['image'] }}" alt="{{ $package['name'] }}">
                        @if($package['badge'])
                        <span class="package-badge">
                            <i class="bi bi-star-fill"></i>
                            {{ $package['badge'] }}
                        </span>
                        @endif
                    </div>
                    
                    <div class="package-body">
                        <h3 class="package-title">{{ $package['name'] }}</h3>
                        
                        <div class="package-meta">
                            <span class="package-meta-item">
                                <i class="bi bi-clock"></i>
                                {{ $package['duration'] }}
                            </span>
                            <span class="package-meta-item">
                                <i class="bi bi-check-circle"></i>
                                {{ $package['available'] ? 'Tersedia' : 'Sold Out' }}
                            </span>
                        </div>
                        
                        <ul class="feature-list">
                            @foreach(array_slice($package['features'], 0, 4) as $feature)
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                        
                        <div class="package-footer">
                            <div class="package-price-section">
                                <div>
                                    <span class="package-price-label">Mulai dari</span>
                                    <div class="package-price-amount">
                                        Rp {{ number_format($package['price'] / 1000000, 0) }}jt
                                    </div>
                                    <span class="package-price-person">/orang</span>
                                </div>
                            </div>
                            
                            <a href="{{ route('package.detail', $package['id']) }}" class="btn-package">
                                Lihat Detail
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-subtitle" style="color: var(--gold); font-weight: 600; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px; display: inline-block; padding: 8px 20px; background: rgba(212, 175, 55, 0.1); border-radius: 50px;">
                KEUNGGULAN KAMI
            </div>
            <h2 class="fw-bold mb-4" style="font-size: 2.5rem; color: var(--primary-navy);">Kenapa Memilih Paket Kami?</h2>
            <p class="text-muted" style="max-width: 700px; margin: 0 auto; font-size: 1.1rem;">
                Mahira Tour memberikan pelayanan terbaik dengan fasilitas lengkap untuk kenyamanan ibadah Anda
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h5 class="why-title">Hotel Strategis</h5>
                    <p class="why-text">Dekat dengan Masjidil Haram & Masjid Nabawi untuk kemudahan beribadah</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h5 class="why-title">Pembimbing Profesional</h5>
                    <p class="why-text">Muthawwif & tour leader berpengalaman siap membimbing Anda</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h5 class="why-title">Layanan 24/7</h5>
                    <p class="why-text">Customer service siap membantu kapan saja melalui WhatsApp</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <h5 class="why-title">Harga Transparan</h5>
                    <p class="why-text">Tidak ada biaya tersembunyi, semua sudah termasuk dalam paket</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content text-center">
            <div data-aos="fade-up">
                <h3 class="fw-bold mb-3" style="font-size: 2.5rem;">Butuh Bantuan Memilih Paket?</h3>
                <p class="mb-5" style="font-size: 1.25rem; opacity: 0.95; max-width: 600px; margin: 0 auto 2rem;">
                    Konsultasikan kebutuhan Anda dengan tim kami secara GRATIS
                </p>
                <a href="https://wa.me/6282184515310" class="btn-cta">
                    <i class="bi bi-whatsapp"></i>
                    Hubungi via WhatsApp
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
    
    // Filter functionality
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            const items = document.querySelectorAll('.package-item');
            
            items.forEach(item => {
                if (filter === 'all' || item.dataset.type === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
</script>
@endpush