<!-- Footer Section -->
<footer class="footer-gradient mt-5">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="row py-5">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="footer-brand mb-3">
                    <i class="bi bi-shop-window me-2"></i>
                    <span>Techmen</span>
                </div>
                <p class="footer-text mb-3">
                    Your trusted marketplace for quality tech products. Buy and sell with confidence on Pakistan's leading e-commerce platform.
                </p>
                <div class="social-links">
                    <a href="#" class="social-icon" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="social-icon" title="Twitter">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="social-icon" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="social-icon" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="/home"><i class="bi bi-chevron-right"></i> Home</a></li>
                    <li><a href="/cart"><i class="bi bi-chevron-right"></i> Cart</a></li>
                    <li><a href="/orders"><i class="bi bi-chevron-right"></i> Orders</a></li>
                    <li><a href="/seller/become"><i class="bi bi-chevron-right"></i> Become a Seller</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">Customer Service</h5>
                <ul class="footer-links">
                    <li><a href="/contactus"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Help Center</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Shipping Info</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Returns Policy</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Track Order</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title">Get in Touch</h5>
                <ul class="footer-contact">
                    <li>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>123 Main Street<br>Lahore, Punjab, Pakistan</span>
                    </li>
                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <span>+92 300 1234567</span>
                    </li>
                    <li>
                        <i class="bi bi-envelope-fill"></i>
                        <span>support@techmen.com</span>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>Mon - Fri: 9:00 AM - 6:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom py-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">
                        &copy; 2025 <strong>Techmen</strong>. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                    <span class="mx-2">|</span>
                    <a href="#" class="footer-bottom-link">Terms of Service</a>
                    <span class="mx-2">|</span>
                    <a href="#" class="footer-bottom-link">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .footer-gradient::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.3;
    }

    .footer-gradient > .container {
        position: relative;
        z-index: 1;
    }

    .footer-brand {
        font-size: 1.75rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
    }

    .footer-brand i {
        font-size: 2rem;
    }

    .footer-text {
        opacity: 0.9;
        line-height: 1.7;
        font-size: 0.95rem;
    }

    .footer-title {
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.75rem;
        font-size: 1.1rem;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 2px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 0.75rem;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        font-size: 0.95rem;
    }

    .footer-links a i {
        margin-right: 0.5rem;
        font-size: 0.75rem;
        transition: transform 0.3s ease;
    }

    .footer-links a:hover {
        color: white;
        padding-left: 0.5rem;
    }

    .footer-links a:hover i {
        transform: translateX(5px);
    }

    .footer-contact {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-contact li {
        margin-bottom: 1rem;
        display: flex;
        align-items: start;
        font-size: 0.95rem;
    }

    .footer-contact i {
        margin-right: 0.75rem;
        margin-top: 0.25rem;
        font-size: 1.1rem;
        opacity: 0.9;
    }

    .footer-contact span {
        opacity: 0.9;
        line-height: 1.6;
    }

    .social-links {
        display: flex;
        gap: 0.75rem;
        margin-top: 1.5rem;
    }

    .social-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
        backdrop-filter: blur(10px);
    }

    .social-icon:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-3px) rotate(5deg);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 0.9rem;
    }

    .footer-bottom p {
        opacity: 0.9;
    }

    .footer-bottom-link {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .footer-bottom-link:hover {
        color: white;
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .footer-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-title {
            text-align: center;
        }

        .footer-links a {
            justify-content: center;
        }

        .social-links {
            justify-content: center;
        }

        .footer-contact li {
            justify-content: center;
        }

        .footer-brand {
            justify-content: center;
        }

        .footer-text {
            text-align: center;
        }
    }
</style>