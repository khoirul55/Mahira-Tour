@extends('layouts.app')

@section('title', 'Jadwal Keberangkatan - Mahira Tour')

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
        --success: #10B981;
        --warning: #F59E0B;
        --danger: #EF4444;
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
    
    .filter-section {
        background: var(--white);
        box-shadow: 0 4px 20px rgba(0, 29, 95, 0.08);
        padding: 20px 0;
    }
    
    .filter-btn {
        border: 2px solid var(--lighter-navy);
        background: var(--white);
        color: var(--text-gray);
        padding: 10px 24px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s;
    }
    
    .filter-btn:hover, .filter-btn.active {
        border-color: var(--primary-navy);
        background: var(--primary-navy);
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 29, 95, 0.2);
    }
    
    .schedule-card {
        background: var(--white);
        border-radius: 24px;
        border-left: 5px solid var(--primary-navy);
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 29, 95, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 2px solid var(--lighter-navy);
        border-left-width: 5px;
        height: 100%;
    }
    
    .schedule-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 70px rgba(0, 29, 95, 0.2);
        border-left-color: var(--gold);
    }
    
    .schedule-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 1.5rem;
    }
    
    .schedule-title {
        font-size: 1.35rem;
        font-weight: 800;
        color: var(--primary-navy);
        margin-bottom: 0;
        line-height: 1.3;
        flex: 1;
    }
    
    .status-badge {
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.85rem;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        white-space: nowrap;
    }
    
    .status-available {
        background: rgba(16, 185, 129, 0.1);
        color: var(--success);
        border: 2px solid var(--success);
    }
    
    .status-almost-full {
        background: rgba(245, 158, 11, 0.1);
        color: var(--warning);
        border: 2px solid var(--warning);
    }
    
    .status-full {
        background: rgba(239, 68, 68, 0.1);
        color: var(--danger);
        border: 2px solid var(--danger);
    }
    
    .schedule-dates {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .date-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px;
        background: var(--lighter-navy);
        border-radius: 15px;
        transition: all 0.3s;
    }
    
    .date-item:hover {
        background: rgba(0, 29, 95, 0.1);
        transform: translateX(5px);
    }
    
    .date-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 1.25rem;
        flex-shrink: 0;
    }
    
    .date-info {
        flex: 1;
    }
    
    .date-label {
        font-size: 0.8rem;
        color: var(--text-gray);
        margin-bottom: 3px;
        display: block;
    }
    
    .date-value {
        font-size: 1rem;
        font-weight: 700;
        color: var(--primary-navy);
    }
    
    .seats-info {
        background: var(--lighter-navy);
        border-radius: 15px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
    }
    
    .seats-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }
    
    .seats-text {
        font-size: 0.95rem;
        color: var(--text-gray);
        font-weight: 600;
    }
    
    .seats-number {
        font-weight: 800;
        color: var(--primary-navy);
    }
    
    .seats-percentage {
        font-size: 0.9rem;
        color: var(--text-gray);
        font-weight: 600;
    }
    
    .seats-progress {
        height: 12px;
        border-radius: 50px;
        background: rgba(0, 29, 95, 0.1);
        overflow: hidden;
        position: relative;
    }
    
    .seats-progress-bar {
        height: 100%;
        border-radius: 50px;
        transition: width 0.6s ease;
        position: relative;
        overflow: hidden;
    }
    
    .seats-progress-bar::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 2s infinite;
    }
    
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
    
    .progress-available {
        background: linear-gradient(90deg, var(--success), #34D399);
    }
    
    .progress-almost-full {
        background: linear-gradient(90deg, var(--warning), #FBBF24);
    }
    
    .progress-full {
        background: linear-gradient(90deg, var(--danger), #F87171);
    }
    
    .schedule-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1.5rem;
        border-top: 2px solid var(--lighter-navy);
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    .price-section {
        flex: 1;
        min-width: 150px;
    }
    
    .price-label {
        font-size: 0.85rem;
        color: var(--text-gray);
        margin-bottom: 5px;
        display: block;
    }
    
    .price-amount {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--primary-navy);
        line-height: 1;
    }
    
    .airline-info {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        background: rgba(212, 175, 55, 0.1);
        border-radius: 50px;
        color: var(--gold);
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }
    
    .btn-register {
        padding: 14px 32px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        color: var(--white);
        border: none;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1rem;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        box-shadow: 0 8px 25px rgba(0, 29, 95, 0.25);
    }
    
    .btn-register:hover {
        background: linear-gradient(135deg, var(--light-navy), var(--primary-navy));
        transform: translateX(5px);
        box-shadow: 0 12px 35px rgba(0, 29, 95, 0.35);
        color: var(--white);
    }
    
    .btn-register:disabled {
        background: #9CA3AF;
        cursor: not-allowed;
        transform: none;
    }
    
    .info-card-section {
        background: var(--lighter-navy);
        padding: 100px 0;
    }
    
    .info-feature-card {
        background: var(--white);
        border-radius: 24px;
        padding: 2.5rem 2rem;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 29, 95, 0.08);
        transition: all 0.4s;
        border: 2px solid transparent;
        height: 100%;
    }
    
    .info-feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0, 29, 95, 0.15);
        border-color: var(--gold);
    }
    
    .info-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.3);
        transition: all 0.4s;
    }
    
    .info-feature-card:hover .info-icon {
        transform: scale(1.15) rotate(5deg);
        background: linear-gradient(135deg, var(--gold), #F4D03F);
    }
    
    .info-icon i {
        font-size: 2.5rem;
        color: var(--white);
    }
    
    .info-title {
        font-size: 1.35rem;
        font-weight: 700;
        color: var(--primary-navy);
        margin-bottom: 15px;
    }
    
    .info-text {
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
    
    .empty-state {
        text-align: center;
        padding: 80px 20px;
    }
    
    .empty-icon {
        font-size: 5rem;
        color: var(--text-gray);
        opacity: 0.5;
        margin-bottom: 25px;
    }
    
    @media (max-width: 768px) {
        .page-header {
            padding: 80px 0 50px;
        }
        
        .schedule-card {
            margin-bottom: 30px;
        }
        
        .schedule-header {
            flex-direction: column;
            gap: 15px;
        }
        
        .schedule-footer {
            flex-direction: column;
            align-items: stretch;
        }
        
        .btn-register {
            width: 100%;
            justify-content: center;
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
                <span>Jadwal Keberangkatan</span>
            </div>
            <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">Jadwal Keberangkatan</h1>
            <p class="lead" style="max-width: 700px; margin: 0 auto; font-size: 1.25rem;" data-aos="fade-up" data-aos-delay="100">
                Pilih jadwal yang sesuai dengan rencana perjalanan spiritual Anda
            </p>
        </div>
    </div>
</section>

<!-- Filter by Route -->
<section class="filter-section">
    <div class="container">
        <div class="d-flex gap-2 justify-content-center flex-wrap">
            <button class="filter-btn active">Semua Jadwal</button>
            @foreach($departure_routes as $route)
            <button class="filter-btn">{{ $route }}</button>
            @endforeach
        </div>
    </div>
</section>

<!-- Schedule List -->
<section class="py-5" style="padding: 100px 0; background: var(--white);">
    <div class="container">
        <div class="row g-4">
            @foreach($schedules as $schedule)
            @php
                $seatsAvailable = $schedule['quota'] - $schedule['seats_taken'];
                $percentage = ($schedule['seats_taken'] / $schedule['quota']) * 100;
                
                $statusClass = match($schedule['status']) {
                    'available' => 'available',
                    'almost_full' => 'almost-full',
                    'full' => 'full',
                    default => 'available'
                };
                
                $statusText = match($schedule['status']) {
                    'available' => 'Tersedia',
                    'almost_full' => 'Hampir Penuh',
                    'full' => 'Penuh',
                    default => 'Tersedia'
                };
                
                $progressClass = match($schedule['status']) {
                    'available' => 'progress-available',
                    'almost_full' => 'progress-almost-full',
                    'full' => 'progress-full',
                    default => 'progress-available'
                };
            @endphp
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 50 }}">
                <div class="schedule-card">
                    <div class="schedule-header">
                        <h3 class="schedule-title">{{ $schedule['package_name'] }}</h3>
                        <span class="status-badge status-{{ $statusClass }}">
                            <i class="bi bi-{{ $schedule['status'] === 'full' ? 'x-circle' : 'check-circle' }}"></i>
                            {{ $statusText }}
                        </span>
                    </div>
                    
                    <div class="schedule-dates">
                        <div class="date-item">
                            <div class="date-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div class="date-info">
                                <span class="date-label">Keberangkatan</span>
                                <span class="date-value">{{ date('d M Y', strtotime($schedule['departure_date'])) }}</span>
                            </div>
                        </div>
                        
                        <div class="date-item">
                            <div class="date-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <div class="date-info">
                                <span class="date-label">Kepulangan</span>
                                <span class="date-value">{{ date('d M Y', strtotime($schedule['return_date'])) }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="seats-info">
                        <div class="seats-header">
                            <span class="seats-text">
                                <i class="bi bi-people me-2"></i>
                                Sisa Kursi: <span class="seats-number">{{ $seatsAvailable }}/{{ $schedule['quota'] }}</span>
                            </span>
                            <span class="seats-percentage">{{ number_format($percentage, 0) }}% terisi</span>
                        </div>
                        <div class="seats-progress">
                            <div class="seats-progress-bar {{ $progressClass }}" style="width: {{ $percentage }}%"></div>
                        </div>
                    </div>
                    
                    <div class="schedule-footer">
                        <div class="price-section">
                            <span class="price-label">Harga mulai dari</span>
                            <div class="price-amount">Rp {{ number_format($schedule['price'] / 1000000, 0) }}jt</div>
                        </div>
                        
                        <div class="text-end">
                            <div class="airline-info">
                                <i class="bi bi-airplane"></i>
                                {{ $schedule['airline'] }}
                            </div>
                            <div style="font-size: 0.85rem; color: var(--text-gray); margin-bottom: 10px;">
                                <i class="bi bi-geo-alt"></i> {{ $schedule['departure_route'] }}
                            </div>
                            @if($schedule['status'] !== 'full')
                            <a href="{{ route('register') }}" class="btn-register">
                                Daftar Sekarang
                                <i class="bi bi-arrow-right"></i>
                            </a>
                            @else
                            <button class="btn-register" disabled>
                                Penuh
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        @if(count($schedules) === 0)
        <div class="empty-state">
            <i class="bi bi-calendar-x empty-icon"></i>
            <h4 style="color: var(--primary-navy); font-weight: 700;">Belum Ada Jadwal Tersedia</h4>
            <p class="text-muted">Silakan hubungi kami untuk informasi jadwal terbaru</p>
        </div>
        @endif
    </div>
</section>

<!-- Info Section -->
<section class="info-card-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-subtitle" style="color: var(--gold); font-weight: 600; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px; display: inline-block; padding: 8px 20px; background: rgba(212, 175, 55, 0.1); border-radius: 50px;">
                KEMUDAHAN PENDAFTARAN
            </div>
            <h2 class="fw-bold" style="font-size: 2.5rem; color: var(--primary-navy);">Kenapa Daftar di Mahira Tour?</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="info-feature-card">
                    <div class="info-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h5 class="info-title">Booking Cepat</h5>
                    <p class="info-text">Proses pendaftaran mudah dan cepat, konfirmasi dalam 1x24 jam</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="info-feature-card">
                    <div class="info-icon">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <h5 class="info-title">Cicilan Tersedia</h5>
                    <p class="info-text">Program cicilan dengan DP 30% dan pelunasan H-30 keberangkatan</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="info-feature-card">
                    <div class="info-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h5 class="info-title">Support 24/7</h5>
                    <p class="info-text">Tim kami siap membantu Anda kapan saja melalui WhatsApp</p>
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
                <h3 class="fw-bold mb-3" style="font-size: 2.5rem;">Tidak Menemukan Jadwal yang Cocok?</h3>
                <p class="mb-5" style="font-size: 1.25rem; opacity: 0.95; max-width: 600px; margin: 0 auto 2rem;">
                    Hubungi kami untuk informasi jadwal private atau keberangkatan khusus
                </p>
                <a href="{{ route('contact') }}" class="btn-cta">
                    <i class="bi bi-telephone"></i>
                    Hubungi Kami Sekarang
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