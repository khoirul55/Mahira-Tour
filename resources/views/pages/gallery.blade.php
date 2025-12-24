@extends('layouts.app')

@section('title', 'Galeri Kegiatan - Mahira Tour')

@section('content')
<style>
    /* Hero Section - Image Background with Overlay */
    .gallery-hero {
        position: relative;
        height: 500px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    
    .hero-background img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        animation: kenBurns 20s ease-in-out infinite alternate;
    }
    
    @keyframes kenBurns {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.08);
        }
    }
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 29, 95, 0.70);
        z-index: 2;
    }
    
    .hero-content {
        position: relative;
        z-index: 3;
        text-align: center;
        padding: 0 20px;
        max-width: 900px;
    }
    
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    
    .hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 20px;
        font-family: 'Lora', serif;
        color: white;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        line-height: 1.2;
    }
    
    .hero-title .word {
        display: inline-block;
        animation: fadeInUp 0.8s ease backwards;
    }
    
    .hero-title .word:nth-child(1) { animation-delay: 0.1s; }
    .hero-title .word:nth-child(2) { animation-delay: 0.3s; }
    .hero-title .word:nth-child(3) { animation-delay: 0.5s; }
    .hero-title .word:nth-child(4) { animation-delay: 0.7s; }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
        color: white;
        opacity: 0.95;
        animation: fadeIn 1s ease 0.9s backwards;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
        line-height: 1.6;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 0.95; }
    }
    
    /* Filter Buttons */
    .filter-container {
        background: white;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        padding: 20px 0;
        margin-bottom: 40px;
        position: sticky;
        top: 76px;
        z-index: 30;
    }
    
    .filter-scroll {
        display: flex;
        gap: 10px;
        overflow-x: auto;
        padding: 5px 0;
        scrollbar-width: thin;
        scrollbar-color: #E5E7EB transparent;
    }
    
    .filter-scroll::-webkit-scrollbar {
        height: 4px;
    }
    
    .filter-scroll::-webkit-scrollbar-track {
        background: transparent;
    }
    
    .filter-scroll::-webkit-scrollbar-thumb {
        background: #E5E7EB;
        border-radius: 10px;
    }
    
    .filter-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
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
        background: #F9FAFB;
    }
    
    .filter-btn.active {
        background: #001D5F;
        color: white;
        border-color: #001D5F;
    }
    
    /* Stats Cards - REMOVED */
    
    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 50px;
    }
    
    .gallery-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
    }
    
    .gallery-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }
    
    .gallery-image-wrapper {
        position: relative;
        overflow: hidden;
        padding-top: 75%; /* 4:3 Aspect Ratio */
    }
    
    .gallery-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    
    .gallery-card:hover .gallery-image {
        transform: scale(1.1);
    }
    
    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);
        padding: 25px 20px 20px 20px;
        transform: translateY(0);
        transition: all 0.3s ease;
    }
    
    .gallery-title {
        color: white;
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 8px;
        line-height: 1.3;
    }
    
    .gallery-category {
        display: inline-block;
        background: rgba(255,255,255,0.25);
        backdrop-filter: blur(10px);
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    
    .zoom-icon {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 45px;
        height: 45px;
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
        color: #001D5F;
        font-size: 1.3rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .gallery-card:hover .zoom-icon {
        opacity: 1;
        transform: scale(1.1);
    }
    
    /* Modal - Style dari Home */
    .gallery-modal {
        display: none;
        position: fixed;
        z-index: 99999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        animation: fadeIn 0.3s ease;
    }
    
    .gallery-modal.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    body.modal-open {
        overflow: hidden;
    }
    
    .gallery-modal-content {
        max-width: 90%;
        max-height: 90%;
        position: relative;
    }
    
    .gallery-modal-content img {
        max-width: 100%;
        max-height: 90vh;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.5);
    }
    
    .gallery-close {
        position: absolute;
        top: 30px;
        right: 50px;
        font-size: 50px;
        color: white;
        cursor: pointer;
        z-index: 100000;
        transition: transform 0.3s ease;
        background: none;
        border: none;
        line-height: 1;
    }
    
    .gallery-close:hover {
        transform: scale(1.2) rotate(90deg);
    }
    
    .gallery-counter {
        position: absolute;
        top: 30px;
        left: 50px;
        color: white;
        font-size: 20px;
        font-weight: 600;
        z-index: 100000;
        background: rgba(0, 0, 0, 0.5);
        padding: 10px 20px;
        border-radius: 50px;
        backdrop-filter: blur(10px);
    }
    
    .gallery-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border: 2px solid white;
        padding: 20px;
        font-size: 30px;
        cursor: pointer;
        border-radius: 50%;
        transition: all 0.3s ease;
        z-index: 100000;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        backdrop-filter: blur(10px);
    }
    
    .gallery-nav:hover {
        background: white;
        color: #001D5F;
        transform: translateY(-50%) scale(1.1);
    }
    
    .gallery-nav.prev {
        left: 30px;
    }
    
    .gallery-nav.next {
        right: 30px;
    }
    
    .modal-info {
        text-align: center;
        margin-top: 20px;
        color: white;
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
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(0,29,95,0.4);
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
        opacity: 0.4;
    }
    
    .no-results h4 {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #6B7280;
    }
    
    .no-results p {
        font-size: 1rem;
    }
    
    /* CTA Section - REMOVED */
    
    @media (max-width: 768px) {
        .gallery-hero {
            height: 400px;
        }
        
        .hero-title {
            font-size: 2.2rem;
        }
        
        .hero-subtitle {
            font-size: 1rem;
        }
        
        .hero-icon {
            font-size: 2.8rem;
        }
        
        .filter-container {
            top: 70px;
            padding: 15px 0;
        }
        
        .filter-btn {
            padding: 8px 16px;
            font-size: 0.85rem;
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .gallery-close {
            top: 20px;
            right: 20px;
            font-size: 40px;
        }
        
        .gallery-counter {
            top: 20px;
            left: 20px;
            font-size: 16px;
        }
        
        .gallery-nav {
            width: 50px;
            height: 50px;
            padding: 15px;
            font-size: 24px;
        }
        
        .gallery-nav.prev {
            left: 15px;
        }
        
        .gallery-nav.next {
            right: 15px;
        }
        
        .modal-title {
            font-size: 1.2rem;
        }
    }
    
    @media (max-width: 480px) {
        .gallery-hero {
            height: 350px;
        }
        
        .hero-title {
            font-size: 1.8rem;
        }
        
        .hero-subtitle {
            font-size: 0.9rem;
        }
        
        .hero-icon {
            font-size: 2.5rem;
        }
        
        .gallery-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Hero Section with Image Background -->
<section class="gallery-hero">
    <!-- Background Image -->
    <div class="hero-background">
        <img src="{{ asset('storage/hero/hero-gallery.jpeg') }}" alt="Jamaah Mahira Tour" loading="eager">
    </div>
    
    <!-- Overlay -->
    <div class="hero-overlay"></div>
    
    <!-- Content -->
    <div class="hero-content">
        <h1 class="hero-title">
            <span class="word">Momen</span> 
            <span class="word">Suci</span> 
            <span class="word">Jamaah</span>
            <span class="word">Mahira Tour</span>
        </h1>
        <p class="hero-subtitle">Dokumentasi perjalanan ibadah Umrah bersama Mahira Tour</p>
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
        <!-- Gallery Grid -->
        <div class="gallery-grid" id="galleryGrid">
            @foreach($galleries as $index => $gallery)
            <div class="gallery-card" data-category="{{ $gallery['category'] }}" onclick="openModal({{ $index }})">
                <div class="gallery-image-wrapper">
                    <img src="{{ $gallery['image'] }}" alt="{{ $gallery['title'] }}" class="gallery-image" loading="lazy">
                    <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-title">{{ $gallery['title'] }}</div>
                        <span class="gallery-category">{{ $gallery['category'] }}</span>
                    </div>
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
    </div>
</section>

<!-- Modal - Style dari Home -->
<div class="gallery-modal" id="galleryModal">
    <span class="gallery-close" onclick="closeGalleryModal()">&times;</span>
    <div class="gallery-counter" id="galleryCounter">1 / 5</div>
    <div class="gallery-nav prev" onclick="changeGallery(-1)">
        <i class="bi bi-chevron-left"></i>
    </div>
    <div class="gallery-nav next" onclick="changeGallery(1)">
        <i class="bi bi-chevron-right"></i>
    </div>
    <div class="gallery-modal-content">
        <img id="galleryModalImg" src="" alt="">
        <div class="modal-info">
            <div class="modal-title" id="modalTitle"></div>
            <span class="modal-category" id="modalCategory"></span>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const galleries = @json($galleries);
    let currentGalleryIndex = 0;
    let filteredGalleries = [...galleries];

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

        // Filter items and update filteredGalleries
        filteredGalleries = [];
        items.forEach((item, index) => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = 'block';
                filteredGalleries.push(galleries[index]);
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        // Show/hide no results
        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    // Open Modal - Style dari Home
    function openModal(index) {
        currentGalleryIndex = index;
        const modal = document.getElementById('galleryModal');
        const img = document.getElementById('galleryModalImg');
        const counter = document.getElementById('galleryCounter');
        const title = document.getElementById('modalTitle');
        const category = document.getElementById('modalCategory');
        
        if (!modal || !img || !counter) return;
        
        modal.classList.add('active');
        img.src = galleries[index].image;
        img.alt = galleries[index].title;
        title.textContent = galleries[index].title;
        category.textContent = galleries[index].category;
        counter.textContent = `${index + 1} / ${galleries.length}`;
        
        document.body.classList.add('modal-open');
    }

    // Close Modal
    function closeGalleryModal() {
        const modal = document.getElementById('galleryModal');
        if (!modal) return;
        
        modal.classList.remove('active');
        document.body.classList.remove('modal-open');
    }

    // Change Gallery (Previous/Next)
    function changeGallery(direction) {
        currentGalleryIndex += direction;
        
        if (currentGalleryIndex < 0) {
            currentGalleryIndex = galleries.length - 1;
        } else if (currentGalleryIndex >= galleries.length) {
            currentGalleryIndex = 0;
        }
        
        const img = document.getElementById('galleryModalImg');
        const counter = document.getElementById('galleryCounter');
        const title = document.getElementById('modalTitle');
        const category = document.getElementById('modalCategory');
        
        if (!img || !counter) return;
        
        // Smooth transition
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.2s ease';
        
        setTimeout(() => {
            img.src = galleries[currentGalleryIndex].image;
            img.alt = galleries[currentGalleryIndex].title;
            title.textContent = galleries[currentGalleryIndex].title;
            category.textContent = galleries[currentGalleryIndex].category;
            counter.textContent = `${currentGalleryIndex + 1} / ${galleries.length}`;
            img.style.opacity = '1';
        }, 200);
    }

    // Keyboard Navigation
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('galleryModal');
        if (modal && modal.classList.contains('active')) {
            if (e.key === 'ArrowLeft') changeGallery(-1);
            if (e.key === 'ArrowRight') changeGallery(1);
            if (e.key === 'Escape') closeGalleryModal();
        }
    });

    // Close modal when clicking outside
    const galleryModal = document.getElementById('galleryModal');
    if (galleryModal) {
        galleryModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeGalleryModal();
            }
        });
    }

    // Prevent body scroll when modal is open
    document.getElementById('galleryModal').addEventListener('wheel', function(e) {
        e.preventDefault();
    }, { passive: false });
</script>
@endpush
@endsection