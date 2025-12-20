@extends('layouts.app')

@section('title', 'Pendaftaran Jamaah - Mahira Tour')

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
    
    .form-card {
        background: var(--white);
        border-radius: 30px;
        box-shadow: 0 25px 80px rgba(0, 29, 95, 0.15);
        padding: 3rem;
        border: 2px solid var(--lighter-navy);
    }
    
    .form-header-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        box-shadow: 0 15px 40px rgba(0, 29, 95, 0.3);
    }
    
    .form-header-icon i {
        font-size: 3rem;
        color: var(--white);
    }
    
    .form-label {
        font-weight: 700;
        color: var(--primary-navy);
        margin-bottom: 10px;
        font-size: 0.95rem;
    }
    
    .required::after {
        content: "*";
        color: #EF4444;
        margin-left: 5px;
        font-weight: 700;
    }
    
    .form-control, .form-select {
        border: 2px solid var(--lighter-navy);
        border-radius: 12px;
        padding: 14px 18px;
        font-size: 1rem;
        transition: all 0.3s;
        background: var(--white);
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-navy);
        box-shadow: 0 0 0 0.25rem rgba(0, 29, 95, 0.15);
        background: var(--white);
    }
    
    .form-control:hover, .form-select:hover {
        border-color: var(--primary-navy);
    }
    
    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }
    
    .info-card {
        background: linear-gradient(135deg, #FEF3C7, #FDE68A);
        border-left: 5px solid var(--gold);
        padding: 1.5rem;
        border-radius: 15px;
        margin-bottom: 2rem;
        box-shadow: 0 8px 25px rgba(212, 175, 55, 0.2);
    }
    
    .info-card i {
        color: var(--gold);
        font-size: 1.5rem;
    }
    
    .section-divider {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 3rem 0 2rem;
    }
    
    .section-divider::before,
    .section-divider::after {
        content: '';
        flex: 1;
        border-bottom: 2px solid var(--lighter-navy);
    }
    
    .section-divider-text {
        padding: 0 1.5rem;
        font-weight: 700;
        color: var(--primary-navy);
        font-size: 1.1rem;
        background: var(--lighter-navy);
        padding: 10px 30px;
        border-radius: 50px;
    }
    
    .btn-submit {
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        color: var(--white);
        border: none;
        padding: 18px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        transition: all 0.4s;
        box-shadow: 0 10px 35px rgba(0, 29, 95, 0.3);
    }
    
    .btn-submit:hover {
        background: linear-gradient(135deg, var(--light-navy), var(--primary-navy));
        transform: translateY(-3px);
        box-shadow: 0 15px 50px rgba(0, 29, 95, 0.4);
        color: var(--white);
    }
    
    .btn-back {
        background: var(--white);
        color: var(--primary-navy);
        border: 2px solid var(--primary-navy);
        padding: 18px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        transition: all 0.3s;
    }
    
    .btn-back:hover {
        background: var(--primary-navy);
        color: var(--white);
        transform: translateY(-3px);
    }
    
    .step-card {
        background: var(--white);
        border-radius: 20px;
        padding: 2.5rem 2rem;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 29, 95, 0.08);
        transition: all 0.4s;
        border: 2px solid var(--lighter-navy);
        height: 100%;
    }
    
    .step-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0, 29, 95, 0.15);
        border-color: var(--gold);
    }
    
    .step-number {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary-navy), var(--light-navy));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.3);
        transition: all 0.4s;
    }
    
    .step-card:hover .step-number {
        transform: scale(1.15) rotate(5deg);
        background: linear-gradient(135deg, var(--gold), #F4D03F);
    }
    
    .step-number span {
        font-size: 2rem;
        font-weight: 800;
        color: var(--white);
    }
    
    .step-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--primary-navy);
        margin-bottom: 15px;
    }
    
    .step-text {
        color: var(--text-gray);
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .form-check-input:checked {
        background-color: var(--primary-navy);
        border-color: var(--primary-navy);
    }
    
    .form-check-input:focus {
        box-shadow: 0 0 0 0.25rem rgba(0, 29, 95, 0.15);
    }
    
    .invalid-feedback {
        font-weight: 600;
        font-size: 0.875rem;
    }
    
    @media (max-width: 768px) {
        .form-card {
            padding: 2rem 1.5rem;
        }
        
        .page-header {
            padding: 80px 0 50px;
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
                <a href="{{ route('packages') }}">Paket</a>
                <span class="mx-2">/</span>
                <span>Pendaftaran</span>
            </div>
            <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">Pendaftaran Jamaah</h1>
            <p class="lead" style="max-width: 700px; margin: 0 auto; font-size: 1.25rem;" data-aos="fade-up" data-aos-delay="100">
                Lengkapi form di bawah ini untuk memulai perjalanan spiritual Anda
            </p>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-5" style="padding: 100px 0; background: var(--lighter-navy);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 15px; border-left: 5px solid #10B981;">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <strong>Berhasil!</strong><br>
                            {{ session('success') }}
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif
                
                <div class="form-card" data-aos="fade-up">
                    <div class="text-center mb-5">
                        <div class="form-header-icon">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <h3 class="fw-bold mb-3" style="color: var(--primary-navy); font-size: 2rem;">Form Pendaftaran Umrah</h3>
                        <p class="text-muted" style="font-size: 1.05rem;">Isi data dengan lengkap dan benar</p>
                    </div>
                    
                    <div class="info-card">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-info-circle-fill me-3"></i>
                            <div>
                                <strong style="color: var(--text-dark); font-size: 1.05rem;">Informasi Penting:</strong>
                                <p class="mb-0 mt-2" style="color: var(--text-gray);">
                                    Setelah mengisi form, tim Mahira Tour akan menghubungi Anda dalam <strong>1x24 jam</strong> untuk konfirmasi dan informasi pembayaran.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <form action="{{ route('register.submit') }}" method="POST">
                        @csrf
                        
                        <!-- Personal Info -->
                        <div class="mb-5">
                            <h5 class="fw-bold mb-4" style="color: var(--primary-navy); font-size: 1.4rem;">
                                <i class="bi bi-person-circle me-2"></i>Data Pribadi
                            </h5>
                            
                            <div class="row g-4">
                                <div class="col-md-3">
                                    <label class="form-label required">Gelar</label>
                                    <select class="form-select @error('title') is-invalid @enderror" name="title" required>
                                        <option value="">Pilih</option>
                                        @foreach($titles as $title)
                                        <option value="{{ $title }}">{{ $title }}</option>
                                        @endforeach
                                    </select>
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-9">
                                    <label class="form-label required">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" 
                                           name="full_name" placeholder="Sesuai KTP/Paspor" required>
                                    @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <label class="form-label required">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           name="email" placeholder="contoh@email.com" required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label required">No. WhatsApp</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                           name="phone" placeholder="08xxxxxxxxxx" required>
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <label class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" name="address" rows="3" placeholder="Alamat sesuai KTP"></textarea>
                            </div>
                            
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <label class="form-label">Provinsi</label>
                                    <select class="form-select" name="province">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach($provinces as $province)
                                        <option value="{{ $province }}">{{ $province }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" name="city" placeholder="Nama Kota/Kabupaten">
                                </div>
                            </div>
                        </div>
                        
                        <div class="section-divider">
                            <span class="section-divider-text">PILIH PAKET</span>
                        </div>
                        
                        <!-- Package Selection -->
                        <div class="mb-5">
                            <h5 class="fw-bold mb-4" style="color: var(--primary-navy); font-size: 1.4rem;">
                                <i class="bi bi-box-seam me-2"></i>Informasi Paket
                            </h5>
                            
                            <div class="mb-4">
                                <label class="form-label required">Paket yang Dipilih</label>
                                <select class="form-select @error('package_id') is-invalid @enderror" name="package_id" required>
                                    <option value="">-- Pilih Paket Umrah --</option>
                                    @foreach($packages as $id => $package)
                                    <option value="{{ $id }}">{{ $package }}</option>
                                    @endforeach
                                </select>
                                @error('package_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <label class="form-label required">Jalur Keberangkatan</label>
                                    <select class="form-select @error('departure_route') is-invalid @enderror" name="departure_route" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach($departure_routes as $route)
                                        <option value="{{ $route }}">{{ $route }}</option>
                                        @endforeach
                                    </select>
                                    @error('departure_route')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="form-label required">Tanggal Keberangkatan</label>
                                    <input type="date" class="form-control @error('departure_date') is-invalid @enderror" 
                                           name="departure_date" min="{{ date('Y-m-d') }}" required>
                                    @error('departure_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="form-label required">Jumlah Jamaah</label>
                                    <input type="number" class="form-control @error('num_people') is-invalid @enderror" 
                                           name="num_people" min="1" value="1" required>
                                    @error('num_people')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <label class="form-label">Catatan Tambahan</label>
                                <textarea class="form-control" name="message" rows="4" 
                                          placeholder="Pertanyaan atau permintaan khusus (opsional)"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-check mb-4 p-4" style="background: var(--lighter-navy); border-radius: 15px;">
                            <input class="form-check-input" type="checkbox" id="terms" required style="width: 20px; height: 20px; margin-top: 2px;">
                            <label class="form-check-label ms-2" for="terms" style="color: var(--text-dark);">
                                Saya menyetujui <a href="{{ route('terms') }}" class="fw-bold" style="color: var(--primary-navy);">syarat dan ketentuan</a> yang berlaku
                            </label>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-8">
                                <button type="submit" class="btn-submit w-100">
                                    <i class="bi bi-send me-2"></i>Kirim Pendaftaran
                                </button>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('packages') }}" class="btn-back w-100">
                                    <i class="bi bi-arrow-left me-2"></i>Kembali
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Next Steps -->
<section class="py-5" style="padding: 100px 0; background: var(--white);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-subtitle" style="color: var(--gold); font-weight: 600; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px; display: inline-block; padding: 8px 20px; background: rgba(212, 175, 55, 0.1); border-radius: 50px;">
                PROSES SELANJUTNYA
            </div>
            <h2 class="fw-bold" style="font-size: 2.5rem; color: var(--primary-navy);">Langkah Setelah Pendaftaran</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="step-card">
                    <div class="step-number">
                        <span>1</span>
                    </div>
                    <h5 class="step-title">Konfirmasi Tim</h5>
                    <p class="step-text">Tim Mahira Tour akan menghubungi Anda untuk konfirmasi data dan informasi lebih lanjut</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="step-card">
                    <div class="step-number">
                        <span>2</span>
                    </div>
                    <h5 class="step-title">Pembayaran DP</h5>
                    <p class="step-text">Lakukan pembayaran DP minimal 30% dari total harga paket yang dipilih</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="step-card">
                    <div class="step-number">
                        <span>3</span>
                    </div>
                    <h5 class="step-title">Persiapan Dokumen</h5>
                    <p class="step-text">Lengkapi dokumen persyaratan dan ikuti manasik persiapan keberangkatan</p>
                </div>
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