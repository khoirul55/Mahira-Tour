@extends('layouts.app')

@section('title', 'Hubungi Kami - Mahira Tour')

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
    
    .contact-card {
        background: var(--white);
        border-radius: 24px;
        padding: 3rem;
        box-shadow: 0 15px 50px rgba(0, 29, 95, 0.1);
        border: 2px solid var(--lighter-navy);
        transition: all 0.4s;
        height: 100%;
    }
    
    .contact-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 70px rgba(0, 29, 95, 0.2);
        border-color: var(--gold);
    }
    
    .contact-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.3);
    }
    
    .contact-icon i {
        font-size: 2rem;
        color: var(--white);
    }
    
    .contact-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--primary-navy);
        margin-bottom: 15px;
        text-align: center;
    }
    
    .contact-info {
        text-align: center;
        color: var(--text-gray);
        line-height: 1.8;
    }
    
    .contact-info a {
        color: var(--text-gray);
        text-decoration: none;
        transition: color 0.3s;
    }
    
    .contact-info a:hover {
        color: var(--primary-navy);
    }
    
    .form-section {
        background: var(--lighter-navy);
        padding: 100px 0;
    }
    
    .form-card {
        background: var(--white);
        border-radius: 24px;
        padding: 3rem;
        box-shadow: 0 15px 50px rgba(0, 29, 95, 0.1);
    }
    
    .form-label {
        font-weight: 600;
        color: var(--primary-navy);
        margin-bottom: 10px;
    }
    
    .form-control, .form-select {
        padding: 14px 20px;
        border: 2px solid var(--lighter-navy);
        border-radius: 12px;
        transition: all 0.3s;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-navy);
        box-shadow: 0 0 0 0.2rem rgba(0, 29, 95, 0.15);
    }
    
    .btn-submit {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        color: var(--white);
        border: none;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.05rem;
        transition: all 0.3s;
        box-shadow: 0 8px 25px rgba(0, 29, 95, 0.25);
    }
    
    .btn-submit:hover {
        background: linear-gradient(135deg, var(--light-navy), var(--primary-navy));
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(0, 29, 95, 0.35);
    }
    
    .branch-card {
        background: var(--white);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 29, 95, 0.08);
        transition: all 0.4s;
        border: 2px solid var(--lighter-navy);
        height: 100%;
        margin-bottom: 20px;
    }
    
    .branch-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0, 29, 95, 0.15);
        border-color: var(--primary-navy);
    }
    
    .branch-name {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--primary-navy);
        margin-bottom: 10px;
    }
    
    .branch-address {
        color: var(--text-gray);
        line-height: 1.7;
        margin-bottom: 10px;
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
                <span>Hubungi Kami</span>
            </div>
            <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">Hubungi Kami</h1>
            <p class="lead" style="max-width: 700px; margin: 0 auto; font-size: 1.25rem;" data-aos="fade-up" data-aos-delay="100">
                Kami siap membantu Anda mewujudkan perjalanan spiritual yang berkesan
            </p>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="py-5" style="padding: 100px 0; background: var(--white);">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h4 class="contact-title">Telepon</h4>
                    <div class="contact-info">
                        <a href="tel:{{ $contactInfo['phone'] }}">{{ $contactInfo['phone'] }}</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h4 class="contact-title">WhatsApp</h4>
                    <div class="contact-info">
                        <a href="https://wa.me/{{ $contactInfo['whatsapp'] }}" target="_blank">
                            {{ $contactInfo['phone'] }}
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h4 class="contact-title">Email</h4>
                    <div class="contact-info">
                        <a href="mailto:{{ $contactInfo['email'] }}">{{ $contactInfo['email'] }}</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h4 class="contact-title">Alamat</h4>
                    <div class="contact-info">
                        {{ $contactInfo['main_office'] }}
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-instagram"></i>
                    </div>
                    <h4 class="contact-title">Instagram</h4>
                    <div class="contact-info">
                        <a href="https://instagram.com/{{ str_replace('@', '', $contactInfo['instagram']) }}" target="_blank">
                            {{ $contactInfo['instagram'] }}
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <h4 class="contact-title">Jam Operasional</h4>
                    <div class="contact-info">
                        {{ $contactInfo['hours']['weekday'] }}<br>
                        {{ $contactInfo['hours']['saturday'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-card" data-aos="fade-up">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold" style="color: var(--primary-navy); font-size: 2.5rem;">Kirim Pesan</h2>
                        <p class="text-muted">Isi formulir di bawah ini dan tim kami akan segera menghubungi Anda</p>
                    </div>
                    
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif
                    
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap *</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label">No. Telepon *</label>
                                <input type="tel" name="phone" class="form-control" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label">Subjek *</label>
                                <select name="subject" class="form-select" required>
                                    <option value="">Pilih Subjek</option>
                                    <option value="Informasi Paket">Informasi Paket</option>
                                    <option value="Jadwal Keberangkatan">Jadwal Keberangkatan</option>
                                    <option value="Pembayaran">Pembayaran</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label class="form-label">Pesan *</label>
                                <textarea name="message" class="form-control" rows="6" required></textarea>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn-submit">
                                    <i class="bi bi-send-fill me-2"></i>
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Branches -->
<section class="py-5" style="padding: 100px 0; background: var(--white);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold" style="color: var(--primary-navy); font-size: 2.5rem;">Kantor Cabang Kami</h2>
            <p class="text-muted">Hadir di berbagai kota untuk melayani Anda dengan lebih baik</p>
        </div>
        
        <div class="row g-4">
            @foreach($branches as $branch)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="branch-card">
                    <h5 class="branch-name">
                        <i class="bi bi-building me-2" style="color: var(--gold);"></i>
                        {{ $branch['name'] }}
                    </h5>
                    <p class="branch-address">
                        <i class="bi bi-geo-alt me-2" style="color: var(--primary-navy);"></i>
                        {{ $branch['address'] }}
                    </p>
                    @if($branch['phone'] !== '-')
                    <p class="mb-0">
                        <i class="bi bi-telephone me-2" style="color: var(--primary-navy);"></i>
                        <a href="tel:{{ $branch['phone'] }}" style="color: var(--text-gray); text-decoration: none;">
                            {{ $branch['phone'] }}
                        </a>
                    </p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection