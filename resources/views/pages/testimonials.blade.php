{{-- File: resources/views/pages/testimonial.blade.php --}}
@extends('layouts.app')

@section('title', 'Testimoni Jamaah - Mahira Tour')

@push('styles')
<style>
    /* Body Padding for Fixed Navbar */
    body {
        padding-top: 76px;
    }
    
    /* Hero Section Navy Theme */
    .testimonial-hero {
        background: linear-gradient(135deg, #001D5F 0%, #002875 100%);
        padding: 100px 0 80px;
        position: relative;
        overflow: hidden;
    }
    
    .testimonial-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.05"/></svg>') repeat;
        pointer-events: none;
    }
    
    .testimonial-hero .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }
    
    .hero-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        color: white;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .hero-title {
        font-size: 3rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
    }
    
    .hero-subtitle {
        font-size: 1.15rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        margin: 0 auto;
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-subtitle {
            font-size: 1rem;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="testimonial-hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="bi bi-chat-heart-fill me-2"></i>
                Testimoni Terpercaya
            </div>
            <h1 class="hero-title">
                Testimoni Jamaah
            </h1>
            <p class="hero-subtitle">
                Pengalaman spiritual berharga dari para jamaah yang telah menunaikan ibadah bersama Mahira Tour
            </p>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5 bg-light border-bottom">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-md-3">
                <div class="h2 fw-bold mb-1" style="color: #001D5F;">15k+</div>
                <small class="text-muted">Jamaah Terlayani</small>
            </div>
            <div class="col-6 col-md-3">
                <div class="h2 fw-bold mb-1" style="color: #001D5F;">98%</div>
                <small class="text-muted">Tingkat Kepuasan</small>
            </div>
            <div class="col-6 col-md-3">
                <div class="h2 fw-bold mb-1" style="color: #001D5F;">4.9/5</div>
                <small class="text-muted">Rating Rata-rata</small>
            </div>
            <div class="col-6 col-md-3">
                <div class="h2 fw-bold mb-1" style="color: #001D5F;">9++</div>
                <small class="text-muted">Tahun Pengalaman</small>
            </div>
        </div>
    </div>
</section>

<!-- Featured Video Testimonial Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <span class="badge mb-3 px-3 py-2" style="background-color: #FF0000; color: white;">
                    <i class="bi bi-play-circle-fill me-1"></i>
                    Video Testimoni Pilihan
                </span>
                <h2 class="display-6 fw-bold mb-2" style="color: #1F2937;">Dengarkan Langsung dari Jamaah Kami</h2>
                <p class="text-muted">Pengalaman nyata dalam video testimoni</p>
            </div>
        </div>

        <!-- Featured Video Card -->
        <div class="featured-video-card">
            <div class="row g-0 align-items-center">
                <!-- Video Section -->
                <div class="col-lg-7">
                    <div class="video-wrapper">
                        <iframe 
                            width="100%" 
                            height="450" 
                            src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                            title="Testimoni Jamaah Mahira Tour"
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                            style="border-radius: 16px;">
                        </iframe>
                    </div>
                </div>
                
                <!-- Story Section -->
                <div class="col-lg-5">
                    <div class="video-story-content">
                        <div class="story-quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>
                        
                        <h3 class="story-title">Pengalaman Umrah yang Tak Terlupakan</h3>
                        
                        <div class="story-author">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop" alt="Ahmad Yani" class="author-avatar">
                            <div>
                                <h4 class="author-name">Bapak Ahmad Yani</h4>
                                <p class="author-location">
                                    <i class="bi bi-geo-alt-fill"></i> Lampung
                                    <span class="mx-2">•</span>
                                    <i class="bi bi-box-seam"></i> Paket Umrah Reguler
                                </p>
                            </div>
                        </div>
                        
                        <div class="story-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span class="rating-text">5.0</span>
                        </div>
                        
                        <blockquote class="story-text">
                            "Alhamdulillah, pelayanan Mahira Tour sangat memuaskan. Hotel dekat dengan Masjidil Haram, pembimbing sangat ramah dan membantu. Perlengkapan lengkap, semuanya terorganisir dengan baik. Pengalaman spiritual yang luar biasa!"
                        </blockquote>
                        
                        <div class="story-meta">
                            <i class="bi bi-calendar3"></i>
                            <span>November 2024</span>
                            <span class="mx-2">•</span>
                            <i class="bi bi-clock"></i>
                            <span>9 Hari 7 Malam</span>
                        </div>
                        
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn-watch-full">
                            <i class="bi bi-youtube"></i>
                            Tonton Video Lengkap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Text Testimonials Grid Section -->
<section class="py-5" style="background: linear-gradient(180deg, #FFFFFF 0%, #F8F9FA 100%);">
    <div class="container">
        <!-- Section Header -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge mb-3 px-3 py-2" style="background-color: #001D5F; color: white;">
                    <i class="bi bi-star-fill me-1"></i>
                    Testimoni Terpercaya
                </span>
                <h2 class="display-6 fw-bold mb-3" style="color: #1F2937;">Cerita Inspiratif dari Jamaah Kami</h2>
                <p class="text-muted">
                    Dengarkan pengalaman nyata dari para jamaah yang telah merasakan pelayanan terbaik kami
                </p>
            </div>
        </div>

        <!-- Testimonials Grid -->
        <div class="row g-4">
            @foreach($testimonials as $index => $testimonial)
                <div class="col-lg-4 col-md-6">
                    @include('components.testimonial-card', ['testimonial' => $testimonial])
                </div>
            @endforeach
        </div>

        <!-- Empty State (jika tidak ada testimoni) -->
        @if(count($testimonials) === 0)
            <div class="row">
                <div class="col-12 text-center py-5">
                    <i class="bi bi-chat-dots display-1 text-muted mb-3"></i>
                    <h3 class="text-muted">Belum Ada Testimoni</h3>
                    <p class="text-muted">Testimoni dari jamaah akan ditampilkan di sini</p>
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Featured Video Styles -->
<style>
    .featured-video-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 29, 95, 0.12);
        transition: all 0.4s ease;
    }
    
    .featured-video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 80px rgba(0, 29, 95, 0.18);
    }
    
    .video-wrapper {
        padding: 2rem;
        background: linear-gradient(135deg, #001D5F 0%, #002875 100%);
    }
    
    .video-wrapper iframe {
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
    }
    
    .video-story-content {
        padding: 3rem 2.5rem;
        position: relative;
    }
    
    .story-quote-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: rgba(0, 29, 95, 0.05);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .story-quote-icon i {
        font-size: 2rem;
        color: #001D5F;
        opacity: 0.3;
    }
    
    .story-title {
        font-size: 1.75rem;
        font-weight: 800;
        color: #001D5F;
        margin-bottom: 1.5rem;
        line-height: 1.3;
    }
    
    .story-author {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.25rem;
        padding-bottom: 1.25rem;
        border-bottom: 2px solid #F3F4F6;
    }
    
    .author-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #001D5F;
        box-shadow: 0 4px 15px rgba(0, 29, 95, 0.2);
    }
    
    .author-name {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1F2937;
        margin: 0 0 0.25rem 0;
    }
    
    .author-location {
        font-size: 0.85rem;
        color: #6B7280;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    
    .story-rating {
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 1.25rem;
    }
    
    .story-rating i {
        color: #FFA500;
        font-size: 1.1rem;
    }
    
    .rating-text {
        margin-left: 8px;
        font-weight: 700;
        color: #001D5F;
        font-size: 1.1rem;
    }
    
    .story-text {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #374151;
        font-style: italic;
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
        border-left: 4px solid #001D5F;
        font-family: 'Georgia', serif;
    }
    
    .story-meta {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.9rem;
        color: #6B7280;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }
    
    .story-meta i {
        color: #001D5F;
    }
    
    .btn-watch-full {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #FF0000 0%, #CC0000 100%);
        color: white;
        padding: 14px 28px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(255, 0, 0, 0.3);
    }
    
    .btn-watch-full:hover {
        background: linear-gradient(135deg, #CC0000 0%, #990000 100%);
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(255, 0, 0, 0.45);
        color: white;
    }
    
    .btn-watch-full i {
        font-size: 1.4rem;
    }
    
    @media (max-width: 991px) {
        .video-wrapper {
            padding: 1.5rem;
        }
        
        .video-wrapper iframe {
            height: 300px;
        }
        
        .video-story-content {
            padding: 2rem 1.5rem;
        }
        
        .story-title {
            font-size: 1.5rem;
        }
        
        .btn-watch-full {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<!-- Call to Action Section -->
<section class="py-5" style="background: linear-gradient(135deg, #001D5F 0%, #002875 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,<svg width=&quot;100&quot; height=&quot;100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><circle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;2&quot; fill=&quot;white&quot; opacity=&quot;0.05&quot;/></svg>') repeat; pointer-events: none;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="bg-white rounded-4 shadow-sm p-5">
                    <i class="bi bi-heart-fill text-danger display-4 mb-3"></i>
                    <h3 class="fw-bold mb-3">Siap Merasakan Pengalaman Ibadah yang Berkesan?</h3>
                    <p class="text-muted mb-4">
                        Bergabunglah dengan ribuan jamaah lainnya yang telah mempercayai Mahira Tour 
                        untuk perjalanan spiritual mereka
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ route('packages') }}" class="btn btn-lg px-4" style="background-color: #001D5F; color: white; border-radius: 50px; font-weight: 700;">
                            <i class="bi bi-gift me-2"></i>
                            Lihat Paket Umrah
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4" style="border-radius: 50px; font-weight: 700; border-width: 2px;">
                            <i class="bi bi-telephone me-2"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Styles -->
<style>
    /* Button Hover Effects */
    .btn {
        transition: all 0.3s ease;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.3);
    }
</style>

@endsection