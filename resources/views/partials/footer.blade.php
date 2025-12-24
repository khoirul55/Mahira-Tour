{{-- resources/views/partials/footer.blade.php --}}
<style>
    /* Footer Premium Design - Updated Colors */
    .footer-mahira {
        background: linear-gradient(180deg, #001D5F 0%, #001440 100%);
        color: white;
        position: relative;
        overflow: hidden;
        margin-top: auto;
    }
    
    .footer-mahira::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.03"/></svg>') repeat;
        pointer-events: none;
    }
    
    .footer-mahira .footer-top {
        padding: 4rem 0 2rem;
        position: relative;
        z-index: 2;
    }
    
    .footer-mahira .footer-brand {
        margin-bottom: 1.5rem;
    }
    
    .footer-mahira .footer-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 1.75rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
    }
    
    .footer-mahira .footer-logo-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        border: 2px solid rgba(255, 255, 255, 0.2);
    }
    
    .footer-mahira .footer-description {
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.7;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
    }
    
    .footer-mahira .footer-badge {
        display: inline-block;
        background: rgba(212, 175, 55, 0.15);
        border: 2px solid rgba(212, 175, 55, 0.3);
        color: #D4AF37;
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }
    
    .footer-mahira .social-links {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }
    
    .footer-mahira .social-link {
        width: 42px;
        height: 42px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.15);
    }
    
    .footer-mahira .social-link:hover {
        background: #D4AF37;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(212, 175, 55, 0.3);
        border-color: #D4AF37;
    }
    
    .footer-mahira .footer-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: white;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .footer-mahira .footer-title::before {
        content: '';
        width: 4px;
        height: 20px;
        background: linear-gradient(180deg, #D4AF37 0%, #B8941F 100%);
        border-radius: 4px;
    }
    
    .footer-mahira .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-mahira .footer-links li {
        margin-bottom: 0.75rem;
    }
    
    .footer-mahira .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .footer-mahira .footer-links a::before {
        content: '›';
        font-size: 1.2rem;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
    }
    
    .footer-mahira .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }
    
    .footer-mahira .footer-links a:hover::before {
        opacity: 1;
        transform: translateX(0);
    }
    
    .footer-mahira .contact-item {
        display: flex;
        align-items: start;
        gap: 12px;
        margin-bottom: 1rem;
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.9rem;
    }
    
    .footer-mahira .contact-icon {
        width: 36px;
        height: 36px;
        background: rgba(212, 175, 55, 0.15);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #D4AF37;
        flex-shrink: 0;
    }
    
    .footer-mahira .contact-item a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .footer-mahira .contact-item a:hover {
        color: white;
    }
    
    /* Newsletter Section */
    .footer-newsletter {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 1.75rem;
        border: 2px solid rgba(255, 255, 255, 0.1);
        margin-top: 1rem;
    }
    
    .footer-newsletter h4 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .footer-newsletter p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.85rem;
        margin-bottom: 1rem;
    }
    
    .footer-newsletter .newsletter-form {
        display: flex;
        gap: 10px;
    }
    
    .footer-newsletter input {
        flex: 1;
        padding: 0.85rem 1.25rem;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        color: white;
        font-size: 0.9rem;
    }
    
    .footer-newsletter input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }
    
    .footer-newsletter input:focus {
        outline: none;
        border-color: #D4AF37;
        background: rgba(255, 255, 255, 0.15);
    }
    
    .footer-newsletter button {
        padding: 0.85rem 1.75rem;
        background: linear-gradient(135deg, #D4AF37 0%, #B8941F 100%);
        color: white;
        border: none;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
    }
    
    .footer-newsletter button:hover {
        background: linear-gradient(135deg, #B8941F 0%, #9A7A1A 100%);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(212, 175, 55, 0.3);
    }
    
    /* Footer Bottom */
    .footer-bottom {
        border-top: 2px solid rgba(255, 255, 255, 0.1);
        padding: 1.75rem 0;
        margin-top: 2rem;
    }
    
    .footer-bottom-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .footer-copyright {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.85rem;
    }
    
    .footer-license {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(212, 175, 55, 0.15);
        padding: 8px 16px;
        border-radius: 50px;
        border: 2px solid rgba(212, 175, 55, 0.3);
    }
    
    .footer-license i {
        color: #D4AF37;
    }
    
    .footer-license span {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.85rem;
        font-weight: 600;
    }
    
    /* Floating WhatsApp Button */
    .floating-whatsapp {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 1000;
    }
    
    .whatsapp-button {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.8rem;
        box-shadow: 0 8px 30px rgba(37, 211, 102, 0.4);
        cursor: pointer;
        transition: all 0.3s ease;
        animation: floatAnimation 3s ease-in-out infinite;
        border: 3px solid rgba(255, 255, 255, 0.3);
    }
    
    .whatsapp-button:hover {
        transform: scale(1.1);
        box-shadow: 0 12px 40px rgba(37, 211, 102, 0.6);
    }
    
    .whatsapp-tooltip {
        position: absolute;
        right: 75px;
        top: 50%;
        transform: translateY(-50%);
        background: white;
        color: #001D5F;
        padding: 12px 20px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.9rem;
        white-space: nowrap;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease;
    }
    
    .whatsapp-tooltip::after {
        content: '';
        position: absolute;
        right: -8px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid white;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
    }
    
    .floating-whatsapp:hover .whatsapp-tooltip {
        opacity: 1;
        right: 80px;
    }
    
    @keyframes floatAnimation {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .footer-newsletter .newsletter-form {
            flex-direction: column;
        }
        
        .footer-newsletter button {
            width: 100%;
        }
        
        .footer-bottom-content {
            flex-direction: column;
            text-align: center;
        }
        
        .floating-whatsapp {
            bottom: 20px;
            right: 20px;
        }
        
        .whatsapp-button {
            width: 55px;
            height: 55px;
            font-size: 1.6rem;
        }
        
        .whatsapp-tooltip {
            display: none;
        }
    }
</style>

<footer class="footer-mahira">
    <div class="footer-top">
        <div class="container">
            <div class="row g-4">
                <!-- Brand Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <div class="footer-logo">
                          <img src="{{ asset('images/mahira-logo.png') }}" alt="Mahira Tour" style="height: 50px; width: auto;">
                            <span>Mahira Tour</span>
                        </div>

                        <div class="footer-badge">
                            <i class="bi bi-shield-check"></i> Berizin Resmi Kemenag RI
                        </div>
                        <p class="footer-description">
                            Travel Haji & Umrah terpercaya dengan pengalaman lebih dari 20 tahun 
                            melayani ribuan jamaah ke Tanah Suci. Komitmen kami adalah memberikan 
                            pelayanan terbaik untuk perjalanan ibadah Anda.
                        </p>
                        <div class="social-links">
                            <a href="https://facebook.com/mahiratour" class="social-link" target="_blank">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://instagram.com/mahiratour" class="social-link" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://youtube.com/@mahiratour" class="social-link" target="_blank">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a href="https://twitter.com/mahiratour" class="social-link" target="_blank">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="https://tiktok.com/@mahiratour" class="social-link" target="_blank">
                                <i class="bi bi-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Menu</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('packages') }}">Paket Umrah</a></li>
                        <li><a href="{{ route('schedule') }}">Jadwal</a></li>
                        <li><a href="{{ route('gallery') }}">Galeri</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title">Layanan</h5>
                    <ul class="footer-links">
                        <li><a href="#">Paket Umrah Reguler</a></li>
                        <li><a href="#">Paket Umrah VIP</a></li>
                        <li><a href="#">Paket Haji Furoda</a></li>
                        <li><a href="#">Umrah Plus Turki</a></li>
                        <li><a href="#">Umrah Ramadhan</a></li>
                        <li><a href="#">Manasik Haji/Umrah</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title">Hubungi Kami</h5>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            Jl. Raya Makkah No. 123<br>
                            Jakarta Selatan 12345
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <a href="tel:+628123456789">+62 812-3456-7890</a><br>
                            <a href="tel:+622187654321">+62 21 8765-4321</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <a href="mailto:info@mahiratour.com">info@mahiratour.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            Senin - Sabtu<br>
                            08:00 - 17:00 WIB
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Newsletter -->
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="footer-newsletter">
                        <h4>
                            <i class="bi bi-envelope-heart"></i>
                            Berlangganan Newsletter
                        </h4>
                        <p>Dapatkan info promo, tips umrah, dan update jadwal terbaru langsung ke email Anda</p>
                        <form class="newsletter-form" onsubmit="return false;">
                            <input type="email" placeholder="Masukkan email Anda" required>
                            <button type="submit">
                                <i class="bi bi-send-fill"></i> Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="footer-copyright">
                    &copy; {{ date('Y') }} <strong>Mahira Tour</strong>. All Rights Reserved. 
                    Made with <i class="bi bi-heart-fill text-danger"></i> in Indonesia
                </p>
                <div class="footer-license">
                    <i class="bi bi-shield-check"></i>
                    <span>Izin Kemenag: 123/PPIU/2024</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<div class="floating-whatsapp">
    <a href="https://wa.me/+6282184515310?text=Assalamualaikum, saya ingin konsultasi tentang paket umrah" target="_blank" class="whatsapp-button">
        <i class="bi bi-whatsapp"></i>
    </a>
    <div class="whatsapp-tooltip">
        💬 Butuh Bantuan? Chat Kami!
    </div>
</div>

<script>
    // Newsletter Form Handler
    document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        
        // Show success message (you can replace this with actual API call)
        alert('Terima kasih! Email ' + email + ' telah berhasil didaftarkan untuk newsletter.');
        this.reset();
    });
</script>