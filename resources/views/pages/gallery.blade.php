@extends('layouts.app')

@section('title', 'Galeri Kegiatan - Mahira Tour')

@section('content')
<style>
    /* Hero Section */
    .gallery-hero {
        background: linear-gradient(135deg, #001D5F 0%, #003380 100%);
        padding: 120px 0 60px;
        position: relative;
        overflow: hidden;
    }
    
    .gallery-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,144C960,149,1056,139,1152,122.7C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
        background-size: cover;
        opacity: 0.3;
    }
    
    /* Filter Buttons */
    .filter-container {
        background: white;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        padding: 20px 0;
        margin-bottom: 40px;
        position: sticky;
        top: 76px;
        z-index: 30;
    }
    
    .filter-scroll {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding: 5px;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    
    .filter-scroll::-webkit-scrollbar {
        display: none;
    }
    
    .filter-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: white;
        border: 2px solid #E5E7EB;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        color: #374151;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
        flex-shrink: 0;
    }
    
    .filter-btn:hover {
        border-color: #001D5F;
        color: #001D5F;
        background: #F3F4F6;
    }
    
    .filter-btn.active {
        background: #001D5F;
        color: white;
        border-color: #001D5F;
    }
    
    /* Stats Cards */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 50px;
    }
    
    .stat-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .stat-icon {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }
    
    .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: #001D5F;
        margin-bottom: 5px;
    }
    
    .stat-label {
        color: #6B7280;
        font-size: 0.9rem;
    }
    
    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }
    
    .gallery-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
    }
    
    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }
    
    .gallery-image {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .gallery-card:hover .gallery-image {
        transform: scale(1.05);
    }
    
    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        padding: 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    
    .gallery-card:hover .gallery-overlay {
        transform: translateY(0);
    }
    
    .gallery-title {
        color: white;
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 5px;
    }
    
    .gallery-category {
        display: inline-block;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    
    .zoom-icon {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        color: #001D5F;
        font-size: 1.2rem;
    }
    
    .gallery-card:hover .zoom-icon {
        opacity: 1;
    }
    
    /* Modal */
    .modal-backdrop {
        position: fixed;
        inset: 0;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #000000;
        z-index: 99999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
        overflow: hidden;
    }
    
    .modal-backdrop.show {
        display: flex;
    }
    
    body.modal-open {
        overflow: hidden;
    }
    
    .modal-content-wrapper {
        max-width: 1400px;
        width: 100%;
        position: relative;
        z-index: 100000;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .modal-image {
        width: 100%;
        max-height: 80vh;
        object-fit: contain;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 20px 60px rgba(255,255,255,0.1);
    }
    
    .modal-info {
        text-align: center;
        color: white;
        background: transparent;
        padding: 15px;
        border-radius: 10px;
        width: 100%;
    }
    
    .modal-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }
    
    .modal-category {
        display: inline-block;
        background: #001D5F;
        padding: 8px 20px;
        border-radius: 25px;
        font-size: 0.9rem;
        box-shadow: 0 4px 10px rgba(0,29,95,0.3);
    }
    
    .modal-close,
    .modal-nav {
        position: fixed;
        background: rgba(255,255,255,0.15);
        border: 2px solid rgba(255,255,255,0.4);
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 1.4rem;
        z-index: 100001;
    }
    
    .modal-close:hover,
    .modal-nav:hover {
        background: white;
        color: #000;
        border-color: white;
        transform: scale(1.1);
    }
    
    .modal-close {
        top: 20px;
        right: 20px;
    }
    
    .modal-prev {
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
    }
    
    .modal-prev:hover {
        transform: translateY(-50%) scale(1.1);
    }
    
    .modal-next {
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
    }
    
    .modal-next:hover {
        transform: translateY(-50%) scale(1.1);
    }
    
    /* No Results */
    .no-results {
        text-align: center;
        padding: 80px 20px;
        color: #9CA3AF;
    }
    
    .no-results i {
        font-size: 4rem;
        margin-bottom: 20px;
        opacity: 0.3;
    }
    
    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #001D5F 0%, #003380 100%);
        padding: 80px 20px;
        text-align: center;
        color: white;
        border-radius: 20px;
        margin-top: 60px;
    }
    
    .cta-icon {
        font-size: 3rem;
        margin-bottom: 20px;
    }
    
    .cta-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 30px;
    }
    
    .cta-btn {
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
    }
    
    .cta-btn-primary {
        background: white;
        color: #001D5F;
    }
    
    .cta-btn-primary:hover {
        background: #F3F4F6;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    
    .cta-btn-secondary {
        background: #10B981;
        color: white;
    }
    
    .cta-btn-secondary:hover {
        background: #059669;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    
    @media (max-width: 768px) {
        .gallery-hero {
            padding: 100px 0 40px;
        }
        
        .filter-container {
            top: 70px;
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }
        
        .modal-prev,
        .modal-next {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }
        
        .modal-close {
            width: 40px;
            height: 40px;
        }
    }
</style>

<!-- Hero Section -->
<section class="gallery-hero">
    <div class="container">
        <div class="text-center text-white position-relative">
            <h1 class="display-4 fw-bold mb-3">Galeri Kegiatan Umrah</h1>
            <p class="lead mb-0">Dokumentasi perjalanan ibadah jamaah Mahira Tour ke Tanah Suci</p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<div class="filter-container">
    <div class="container">
        <div class="filter-scroll">
            @foreach($categories as $key => $category)
            <button 
                class="filter-btn {{ $key === 'all' ? 'active' : '' }}"
                onclick="filterGallery('{{ $key }}')"
                data-filter="{{ $key }}">
                <i class="bi bi-{{ $key === 'all' ? 'grid-fill' : ($key === 'Makkah' ? 'building' : ($key === 'Madinah' ? 'building-fill' : ($key === 'Wisata Islami' ? 'compass' : ($key === 'Akomodasi' ? 'house-door' : ($key === 'Dokumentasi' ? 'camera' : ($key === 'Fasilitas' ? 'gear' : 'airplane')))))) }}"></i>
                {{ $category }}
            </button>
            @endforeach
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Stats Section -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">📷</div>
                <div class="stat-number">{{ count($galleries) }}+</div>
                <div class="stat-label">Total Foto</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">👥</div>
                <div class="stat-number">500+</div>
                <div class="stat-label">Jamaah Terlayani</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">✈️</div>
                <div class="stat-number">50+</div>
                <div class="stat-label">Keberangkatan</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⭐</div>
                <div class="stat-number">4.9/5</div>
                <div class="stat-label">Rating Kepuasan</div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="galleryGrid">
            @foreach($galleries as $index => $gallery)
            <div class="gallery-card" data-category="{{ $gallery['category'] }}" onclick="openModal({{ $index }})">
                <img src="{{ $gallery['image'] }}" alt="{{ $gallery['title'] }}" class="gallery-image" loading="lazy">
                <div class="zoom-icon">
                    <i class="bi bi-zoom-in"></i>
                </div>
                <div class="gallery-overlay">
                    <div class="gallery-title">{{ $gallery['title'] }}</div>
                    <span class="gallery-category">{{ $gallery['category'] }}</span>
                </div>
            </div>
            @endforeach
        </div>

        <!-- No Results -->
        <div class="no-results" id="noResults" style="display: none;">
            <i class="bi bi-images"></i>
            <h4>Tidak ada foto dalam kategori ini</h4>
            <p>Coba pilih kategori lain</p>
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <div class="cta-icon">📸</div>
            <h2 class="display-5 fw-bold mb-3">Jadilah Bagian dari Cerita Kami</h2>
            <p class="lead mb-4">Daftar sekarang dan wujudkan impian umrah Anda bersama Mahira Tour.<br>Kami siap mengabadikan momen berharga Anda di Tanah Suci.</p>
            <div class="cta-buttons">
                <a href="{{ route('packages') }}" class="cta-btn cta-btn-primary">
                    <i class="bi bi-box-seam"></i>
                    Lihat Paket
                </a>
                <a href="{{ route('register') }}" class="cta-btn cta-btn-secondary">
                    <i class="bi bi-pencil-square"></i>
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal-backdrop" id="galleryModal" onclick="closeModalOnBackdrop(event)">
    <div class="modal-close" onclick="event.stopPropagation(); closeModal()">
        <i class="bi bi-x-lg"></i>
    </div>
    <div class="modal-prev modal-nav" onclick="event.stopPropagation(); previousImage()">
        <i class="bi bi-chevron-left"></i>
    </div>
    <div class="modal-next modal-nav" onclick="event.stopPropagation(); nextImage()">
        <i class="bi bi-chevron-right"></i>
    </div>
    <div class="modal-content-wrapper" onclick="event.stopPropagation()">
        <img id="modalImage" src="" alt="" class="modal-image" loading="eager">
        <div class="modal-info">
            <div class="modal-title" id="modalTitle"></div>
            <span class="modal-category" id="modalCategory"></span>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const galleries = @json($galleries);
    let currentImageIndex = 0;

    // Filter Gallery
    function filterGallery(category) {
        const items = document.querySelectorAll('.gallery-card');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const noResults = document.getElementById('noResults');
        let visibleCount = 0;

        // Update button styles
        filterBtns.forEach(btn => {
            if (btn.dataset.filter === category) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        // Filter items
        items.forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = 'block';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        // Show/hide no results
        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    // Open Modal
    function openModal(index) {
        currentImageIndex = index;
        updateModalContent();
        document.getElementById('galleryModal').classList.add('show');
        document.body.classList.add('modal-open');
    }

    // Close Modal
    function closeModal() {
        document.getElementById('galleryModal').classList.remove('show');
        document.body.classList.remove('modal-open');
    }

    // Close on backdrop click
    function closeModalOnBackdrop(event) {
        if (event.target.id === 'galleryModal') {
            closeModal();
        }
    }

    // Previous Image
    function previousImage() {
        currentImageIndex = (currentImageIndex - 1 + galleries.length) % galleries.length;
        updateModalContent();
    }

    // Next Image
    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % galleries.length;
        updateModalContent();
    }

    // Update Modal Content
    function updateModalContent() {
        const gallery = galleries[currentImageIndex];
        document.getElementById('modalImage').src = gallery.image;
        document.getElementById('modalTitle').textContent = gallery.title;
        document.getElementById('modalCategory').textContent = gallery.category;
    }

    // Keyboard Navigation
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('galleryModal');
        if (modal.classList.contains('show')) {
            if (e.key === 'Escape') closeModal();
            if (e.key === 'ArrowLeft') previousImage();
            if (e.key === 'ArrowRight') nextImage();
        }
    });
</script>
@endpush
@endsection