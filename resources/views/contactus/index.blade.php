<x-navbar/>

<style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --primary-color: #667eea;
            --secondary-color: #764ba2;
        }

        body {
            background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
            min-height: 100vh;
        }

        /* Page Header */
        .page-header {
            background: var(--primary-gradient);
            color: white;
            padding: 3rem 0;
            margin-bottom: 3rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
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
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.3;
        }

        .page-header h1 {
            position: relative;
            z-index: 1;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .page-header p {
            position: relative;
            z-index: 1;
            opacity: 0.95;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2rem rgba(102, 126, 234, 0.15);
        }

        .card-title {
            color: var(--secondary-color);
            font-weight: 700;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .card-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        /* Form Styling */
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.15);
        }

        .form-control:hover, .form-select:hover {
            border-color: #cbd5e1;
        }

        textarea.form-control {
            resize: vertical;
        }

        /* Buttons */
        .btn-primary {
            background: var(--primary-gradient);
            border: none;
            border-radius: 2rem;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.4);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Contact Info Icons */
        .contact-icon {
            background: var(--primary-gradient);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
        }

        .contact-icon:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.4);
        }

        .contact-info-item {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 0.75rem;
        }

        .contact-info-item:hover {
            background: rgba(102, 126, 234, 0.05);
        }

        .contact-info-item h6 {
            color: var(--secondary-color);
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        /* Social Buttons */
        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-outline-primary:hover {
            background: var(--primary-gradient);
            border-color: transparent;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.3);
        }

        .btn-outline-info {
            border: 2px solid #0dcaf0;
            color: #0dcaf0;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-outline-info:hover {
            background: #0dcaf0;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(13, 202, 240, 0.3);
        }

        .btn-outline-danger {
            border: 2px solid #dc3545;
            color: #dc3545;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-outline-danger:hover {
            background: #dc3545;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(220, 53, 69, 0.3);
        }

        /* Accordion */
        .accordion-item {
            border: 2px solid #e9ecef;
            border-radius: 0.75rem !important;
            margin-bottom: 1rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .accordion-item:hover {
            border-color: var(--primary-color);
        }

        .accordion-button {
            background: white;
            color: #495057;
            font-weight: 600;
            border-radius: 0.75rem;
            padding: 1rem 1.25rem;
            transition: all 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            background: var(--primary-gradient);
            color: white;
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.15);
            border-color: var(--primary-color);
        }

        .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .accordion-button.collapsed::after {
            filter: none;
        }

        .accordion-body {
            padding: 1.25rem;
            color: #6c757d;
            line-height: 1.7;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            animation: fadeInUp 0.6s ease-out;
        }

        .card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .card:nth-child(3) {
            animation-delay: 0.2s;
        }

        /* Required field asterisk */
        .text-danger {
            color: #dc3545 !important;
        }
    </style>

<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="mb-3">
                        <i class="bi bi-envelope-heart me-3"></i>Contact Us
                    </h1>
                    <p class="lead mb-0">Have a question or feedback? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body p-4 p-md-5">
                        <h4 class="card-title mb-4">Send us a Message</h4>
                        
                        <form action="" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+92 300 1234567">
                                </div>

                                <div class="col-md-6">
                                    <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="" selected disabled>Choose a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="order">Order Related</option>
                                        <option value="support">Technical Support</option>
                                        <option value="feedback">Feedback</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="bi bi-send-fill me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-4">Contact Information</h5>
                        
                        <div class="contact-info-item d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="contact-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Address</h6>
                                <p class="text-muted mb-0">123 Main Street, Lahore, Punjab, Pakistan</p>
                            </div>
                        </div>

                        <div class="contact-info-item d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Phone</h6>
                                <p class="text-muted mb-0">+92 300 1234567</p>
                            </div>
                        </div>

                        <div class="contact-info-item d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="contact-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Email</h6>
                                <p class="text-muted mb-0">support@example.com</p>
                            </div>
                        </div>

                        <div class="contact-info-item d-flex">
                            <div class="flex-shrink-0">
                                <div class="contact-icon">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Working Hours</h6>
                                <p class="text-muted mb-0">Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 4:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-4">Follow Us</h5>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-facebook me-1"></i> Facebook
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm">
                                <i class="bi bi-twitter me-1"></i> Twitter
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-instagram me-1"></i> Instagram
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-linkedin me-1"></i> LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-4 p-md-5">
                        <h4 class="card-title mb-4">Frequently Asked Questions</h4>
                        
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        <i class="bi bi-question-circle me-2"></i> How long does delivery take?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Standard delivery usually takes 3-5 business days within Pakistan. Express delivery is available for major cities with 1-2 business days delivery time.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        <i class="bi bi-credit-card me-2"></i> What payment methods do you accept?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We accept cash on delivery, credit/debit cards, and online bank transfers. All payment methods are secure and encrypted.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        <i class="bi bi-arrow-repeat me-2"></i> Can I return or exchange products?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we offer a 7-day return and exchange policy for most products. Items must be unused and in original packaging. Please contact our support team to initiate a return.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        <i class="bi bi-truck me-2"></i> How can I track my order?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Once your order is shipped, you'll receive a tracking number via email. You can also check your order status by logging into your account and visiting the "My Orders" page.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>