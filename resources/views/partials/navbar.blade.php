{{-- resources/views/partials/navbar.blade.php --}}
<style>
    /* Navbar Modern Glassmorphism */
    .navbar-mahira {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        box-shadow: 0 4px 30px rgba(0, 29, 95, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        padding: 0;
        border-bottom: 1px solid rgba(0, 29, 95, 0.1);
    }
    
    .navbar-mahira.scrolled {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(25px);
        box-shadow: 0 8px 40px rgba(0, 29, 95, 0.12);
        padding: 0;
    }
    
    .navbar-mahira .navbar-brand {
        font-size: 1.5rem;
        font-weight: 800;
        color: #001D5F;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 1rem 0;
        transition: all 0.3s ease;
    }
    
    .navbar-mahira .navbar-brand:hover {
        transform: scale(1.05);
    }
    
    .navbar-mahira .brand-logo {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #001D5F 0%, #003380 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.3rem;
        box-shadow: 0 4px 15px rgba(0, 29, 95, 0.3);
        animation: glow 3s ease-in-out infinite;
    }
    
    @keyframes glow {
        0%, 100% {
            box-shadow: 0 4px 15px rgba(0, 29, 95, 0.3);
        }
        50% {
            box-shadow: 0 4px 25px rgba(0, 29, 95, 0.5);
        }
    }
    
    .navbar-mahira .nav-link {
        color: #001D5F;
        font-weight: 600;
        font-size: 0.95rem;
        padding: 0.75rem 1.25rem !important;
        margin: 0 0.25rem;
        border-radius: 10px;
        transition: all 0.3s ease;
        position: relative;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .navbar-mahira .nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%) scaleX(0);
        width: 30px;
        height: 3px;
        background: #001D5F;
        border-radius: 3px 3px 0 0;
        transition: transform 0.3s ease;
    }
    
    .navbar-mahira .nav-link:hover,
    .navbar-mahira .nav-link.active {
        color: #001D5F;
        background: rgba(0, 29, 95, 0.08);
    }
    
    .navbar-mahira .nav-link:hover::before,
    .navbar-mahira .nav-link.active::before {
        transform: translateX(-50%) scaleX(1);
    }
    
    .navbar-mahira .btn-register {
        background: linear-gradient(135deg, #001D5F 0%, #003380 100%);
        color: white;
        padding: 0.65rem 1.75rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.9rem;
        border: none;
        box-shadow: 0 6px 20px rgba(0, 29, 95, 0.25);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .navbar-mahira .btn-register:hover {
        background: linear-gradient(135deg, #002875 0%, #0044aa 100%);
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(0, 29, 95, 0.35);
    }
    
    .navbar-mahira .promo-badge {
        position: absolute;
        top: -8px;
        right: -8px;
        background: linear-gradient(135deg, #F59E0B 0%, #DC2626 100%);
        color: white;
        font-size: 0.65rem;
        padding: 3px 8px;
        border-radius: 50px;
        font-weight: 700;
        animation: pulse 2s ease-in-out infinite;
        box-shadow: 0 2px 10px rgba(245, 158, 11, 0.4);
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
    }
    
    /* Mobile Menu Styling */
    .navbar-mahira .navbar-toggler {
        border: 2px solid #001D5F;
        border-radius: 8px;
        padding: 0.5rem 0.75rem;
    }
    
    .navbar-mahira .navbar-toggler:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 29, 95, 0.25);
    }
    
    .navbar-mahira .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23001D5F' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    
    @media (max-width: 991px) {
        .navbar-mahira .navbar-collapse {
            background: white;
            margin-top: 1rem;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 29, 95, 0.1);
        }
        
        .navbar-mahira .nav-link {
            padding: 0.75rem 1rem !important;
            margin: 0.25rem 0;
        }
        
        .navbar-mahira .btn-register {
            width: 100%;
            justify-content: center;
            margin-top: 1rem;
        }
    }
</style>

<nav class="navbar navbar-mahira navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="brand-logo">
                <i class="bi bi-moon-stars-fill"></i>
            </div>
            <span>Mahira Tour</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-house-door-fill"></i> Beranda
                    </a>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link {{ request()->routeIs('packages') ? 'active' : '' }}" href="{{ route('packages') }}">
                        <i class="bi bi-box-seam-fill"></i> Paket
                        <span class="promo-badge">PROMO</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('schedule') ? 'active' : '' }}" href="{{ route('schedule') }}">
                        <i class="bi bi-calendar3"></i> Jadwal
                    </a>
                </li>
                <li class="nav-item"> 
                     <a class="nav-link {{ request()->routeIs('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}">
                        <i class="bi bi-chat-quote-fill"></i>Testimoni
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">
                        <i class="bi bi-images"></i> Galeri
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <i class="bi bi-info-circle-fill"></i> Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        <i class="bi bi-envelope-fill"></i> Kontak
                    </a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn-register" href="{{ route('register') }}">
                        <i class="bi bi-person-plus-fill"></i>
                        Daftar Sekarang
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-mahira');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Auto-close mobile menu on link click
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            
            if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });
</script>