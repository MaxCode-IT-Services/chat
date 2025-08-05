<!-- Start Footer Area -->
<footer class="modern-color-footer" style="padding-top:150px;">
    <div class="container">
        <!-- Footer Top Section -->
        <div class="footer-top-section">
            <div class="row g-4">
                <!-- Contact Info Column -->
                <div class="col-lg-5 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-4">
                            <a href="#">
                                <img class="logo-light" src="{{ setting('copyright_logo') && @is_file_exists(setting('copyright_logo')['original_image']) ? get_media(setting('copyright_logo')['original_image']) : getFileLink('80x80',[]) }}"
                                     alt="Corporate Logo">
                            </a>
                        </div>
                        <h6 class="title text-light mb-4">{!! setting('high_lighted_text',app()->getLocale()) !!}</h6>
                        <p class="footer-description mb-4">
                            {!! setting('footer_description', app()->getLocale()) ?? 'Your trusted partner for quality services and solutions.' !!}
                        </p>
                        <div class="contact-info">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul class="contact-list">
                                <li class="d-flex align-items-center">
                                    <i class="las la-phone me-3"></i>
                                    <a href="tel:{!! setting('contact_phone', app()->getLocale()) !!}">{!! setting('contact_phone', app()->getLocale()) !!}</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="las la-envelope me-3"></i>
                                    <a href="mailto:{!! setting('contact_email', app()->getLocale()) !!}">{!! setting('contact_email', app()->getLocale()) !!}</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="las la-map-marker-alt me-3"></i>
                                    <span>New Mandi Road, Dausa (Rajasthan) - 303303</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Useful Links Column -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Useful Links</h4>
                        @if($menu_useful_links && is_array(setting('footer_useful_link_menu')))
                        <ul class="footer-links">
                            @foreach($menu_useful_links as $key => $value)
                                <li>
                                    <a href="{{ @$value['url'] == 'javascript:void(0)' ? '#' : @$value['url'] }}">
                                        <i class="las la-angle-right me-2"></i>
                                        {{ @$value['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Quick Links</h4>
                        @if($menu_quick_links && is_array(setting('footer_useful_link_menu')))
                        <ul class="footer-links">
                            @foreach($menu_quick_links as $key => $value)
                                <li>
                                    <a href="{{ @$value['url'] == 'javascript:void(0)' ? '#' : @$value['url'] }}">
                                        <i class="las la-angle-right me-2"></i>
                                        {{ @$value['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>

                <!-- Newsletter Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Stay Updated</h4>
                        <p class="newsletter-description mb-4">
                            Subscribe to our newsletter for the latest updates and offers.
                        </p>
                        <form class="newsletter-form">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your email address" required>
                                <button class="btn btn-subscribe" type="submit">
                                    <i class="las la-paper-plane fs-2"></i>
                                </button>
                            </div>
                        </form>
                        <div class="social-links mt-4">
                            <h5 class="social-title">Connect With Us:</h5>
                            <ul class="social-list">
                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#"><i class="lab la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom-section">
            <div class="row align-items-center">
                <!-- Copyright Column -->
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="copyright-text">
                        <p class="mb-0">
                            &copy; {{ date('Y') }} {!! setting('copyright_title', app()->getLocale()) ?? 'Your Company Name. All Rights Reserved.' !!}
                        </p>
                    </div>
                </div>

                <!-- Payment Methods Column -->
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="payment-methods text-md-end">
                        <img src="{{ setting('payment_method_banner') && @is_file_exists(setting('payment_method_banner')['original_image']) ? get_media(setting('payment_method_banner')['original_image']) : getFileLink('80x80',[]) }}"
                             alt="Payment Methods" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<style>
    /* Modern Color Scheme Footer Styles */
    .modern-color-footer {
        background-color: #1a1a2e; /* Deep navy blue */
        color: #e6e6e6;
        padding: 60px 0 0;
        font-family: 'Poppins', sans-serif;
    }

    .footer-top-section {
        padding-bottom: 40px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .footer-widget {
        margin-bottom: 30px;
    }

    .footer-logo img {
        max-height: 50px;
        width: auto;
        filter: brightness(0) invert(1);
    }

    .footer-description {
        color: #a1a1a1;
        font-size: 14px;
        line-height: 1.6;
    }

    .widget-title {
        color: #ffffff;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .widget-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background: linear-gradient(to right, #4cc9f0, #4895ef); /* Teal to blue gradient */
    }

    .contact-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-list li {
        margin-bottom: 12px;
        color: #fff;
    }

    .contact-list li i {
        color: #4cc9f0; /* Teal accent */
        font-size: 18px;
        min-width: 25px;
    }



    .contact-list li a {
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .contact-list li a:hover {
        color: #4cc9f0; /* Teal accent */
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 10px;
    }

    .footer-links li a {
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-links li a:hover {
        color: #4cc9f0; /* Teal accent */
        transform: translateX(5px);
    }

    .footer-links li i {
        font-size: 14px;
        color: #e4ff00; /* Blue accent */
    }
    .newsletter-description{
        color:#fff;
    }

    .newsletter-form .input-group {
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .newsletter-form .form-control {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #ffffff;
        height: 50px;
        padding: 0 20px;
    }

    .newsletter-form .form-control:focus {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(76, 201, 240, 0.5);
        box-shadow: 0 0 0 0.25rem rgba(76, 201, 240, 0.25);
    }

    .newsletter-form .form-control::placeholder {
        color: #8a8a8a;
    }

    .btn-subscribe {
        background: linear-gradient(135deg, #4895ef 0%, #4cc9f0 100%);
        border: none;
        min-width: 50px;
        color: white;
        transition: all 0.3s ease;
    }

    .btn-subscribe:hover {
        background: linear-gradient(135deg, #3a7bc8 0%, #3ab7d8 100%);
        transform: translateY(-1px);
    }

    .social-links .social-title {
        font-size: 16px;
        margin-bottom: 15px;
        color: #ffffff;
    }

    .social-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 15px;
    }

    .social-list li a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        color: #ffffff;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .social-list li a:hover {
        background: linear-gradient(135deg, #4895ef 0%, #4cc9f0 100%);
        transform: translateY(-3px);
        border-color: transparent;
    }

    .footer-bottom-section {
        padding: 20px 0;
    }

    .copyright-text p{
        color: #fff;
        font-size: 14px;
    }

    .copyright-text a {
        color: #4cc9f0;
        text-decoration: none;
    }

    .payment-methods img {
        max-height: 30px;
        filter: grayscale(0) brightness(1);
        opacity: 1;
    }


    @media (max-width: 991px) {
        .modern-color-footer {
            padding: 40px 0 0;
        }

        .footer-widget {
            margin-bottom: 40px;
        }
    }

    @media (max-width: 767px) {
        .footer-bottom-section .col-md-6 {
            text-align: center !important;
            margin-bottom: 15px;
        }
    }
</style>