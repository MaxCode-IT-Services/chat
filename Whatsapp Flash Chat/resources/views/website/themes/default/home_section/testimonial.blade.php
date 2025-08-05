<!-- Start Testimonial Area -->
<div class="dd-about-section dd-pricing-area padding" id="testimonials">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h6 class="subtitle round d-flex align-items-center gap-2">Testimonial <i class="las la-star-half-alt fs-2"></i></h6>
                    <h3 class="title mb--20">{!! setting('testimonial_section_title',app()->getLocale()) !!}</h3>
                    <p class="description">{!! setting('testimonial_section_subtitle',app()->getLocale()) !!}</p>
                </div>
            </div>
        </div>

        <div class="testimonial-slider-container">
            <div class="testimonial-slider">
                @foreach($testimonials as $testimonial)
                <div class="testimonial-slide">
                    <div class="testimonial-card-one">
                        <div class="inner">
                            <ul class="review-icon">
                                @switch($testimonial->rating)
                                    @case('5')
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star-half-alt"></i></li>
                                        @break
                                    @case('4')
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        @break
                                    @case('3')
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        @break
                                    @case('2')
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        @break
                                    @case('1')
                                        <li><i class="las la-star"></i></li>
                                        @break
                                    @default
                                @endswitch
                            </ul>
                            <h6 class="title">{{ @$testimonial->language->title}}</h6>
                            <p class="desc">{!! @$testimonial->language->description!!}</p>
                            <div class="meta-section">
                                <div class="image">
                                    <img src="{{ getFileLink('80x80',  $testimonial->image) }}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">{{ @$testimonial->language->name}}</h6>
                                    <p class="desc">{{ @$testimonial->language->designation}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Slider Dots -->
            <div class="slider-dots"></div>

            <!-- Navigation Arrows -->
            <button class="slider-arrow slider-prev">&lt;</button>
            <button class="slider-arrow slider-next">&gt;</button>
        </div>
    </div>
</div>
<!-- End Testimonial Area -->

<style>
    .testimonial-slider-container {
        position: relative;
        padding: 0 50px;
        margin-top: 30px;
        overflow: hidden;
    }

    .testimonial-slider {
        display: flex;
        transition: transform 0.5s ease;
    }

    .testimonial-slide {
        flex: 0 0 100%;
        padding: 0 15px;
        box-sizing: border-box;
    }

    .slider-dots {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    .slider-dots span {
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #ccc;
        margin: 0 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .slider-dots span.active {
        background-color: #333;
    }

    .slider-controls-hidden .slider-dots {
        display: none !important;
    }

    .slider-controls-hidden .slider-arrow {
        display: none !important;
    }

    .slider-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 50%;
        font-size: 18px;
        cursor: pointer;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .slider-prev {
        left: 10px;
    }

    .slider-next {
        right: 10px;
    }

    ..testimonial-card-one .review-icon li i{
        background:#edc300;
    }

    /* Responsive Slides */
    @media (min-width: 1200px) {
        .testimonial-slide {
            flex: 0 0 25%; /* 4 slides */
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .testimonial-slide {
            flex: 0 0 33.333%; /* 3 slides */
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .testimonial-slide {
            flex: 0 0 50%; /* 2 slides */
        }
    }

    @media (max-width: 767px) {
        .testimonial-slider-container {
            padding: 0 30px;
        }

        .testimonial-slide {
            flex: 0 0 100%; /* 1 slide */
        }

        .slider-arrow {
            width: 30px;
            height: 30px;
            font-size: 14px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sliderContainer = document.querySelector('.testimonial-slider-container');
        const slider = document.querySelector('.testimonial-slider');
        const dotsContainer = document.querySelector('.slider-dots');
        const prevBtn = document.querySelector('.slider-prev');
        const nextBtn = document.querySelector('.slider-next');
        const slides = document.querySelectorAll('.testimonial-slide');
        let currentIndex = 0;
        let slidesPerView = getSlidesPerView();
        let totalSlides = slides.length;

        // Initialize slider
        function initSlider() {
            slidesPerView = getSlidesPerView();

            // Check if we need to hide controls
            if (totalSlides <= slidesPerView) {
                sliderContainer.classList.add('slider-controls-hidden');
            } else {
                sliderContainer.classList.remove('slider-controls-hidden');
            }

            updateSlider();
            createDots();
        }

        // Get number of slides to show based on screen size
        function getSlidesPerView() {
            if (window.innerWidth >= 1200) return 4; // Laptop - 4 slides
            if (window.innerWidth >= 992) return 3;  // Desktop - 3 slides
            if (window.innerWidth >= 768) return 2;  // Tablet - 2 slides
            return 1;                               // Mobile - 1 slide
        }

        // Create dots based on visible slides
        function createDots() {
            if (totalSlides <= slidesPerView) {
                dotsContainer.style.display = 'none';
                return;
            }

            dotsContainer.style.display = 'flex';
            dotsContainer.innerHTML = '';
            const dotCount = Math.ceil(slides.length / slidesPerView);

            // Only show dots if there's more than one page
            if (dotCount <= 1) {
                dotsContainer.style.display = 'none';
                return;
            }

            for (let i = 0; i < dotCount; i++) {
                const dot = document.createElement('span');
                if (i === currentIndex) dot.classList.add('active');
                dot.addEventListener('click', () => goToSlide(i));
                dotsContainer.appendChild(dot);
            }
        }

        // Update slider position
        function updateSlider() {
            const slideWidth = 100 / slidesPerView;
            const translateX = -currentIndex * slideWidth;
            slider.style.transform = `translateX(${translateX}%)`;

            // Update dots
            const dots = document.querySelectorAll('.slider-dots span');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        // Go to specific slide
        function goToSlide(index) {
            const maxIndex = Math.ceil(slides.length / slidesPerView) - 1;
            currentIndex = Math.max(0, Math.min(index, maxIndex));
            updateSlider();
        }

        // Next slide
        function nextSlide() {
            const maxIndex = Math.ceil(slides.length / slidesPerView) - 1;
            currentIndex = (currentIndex + 1) % (maxIndex + 1);
            updateSlider();
        }

        // Previous slide
        function prevSlide() {
            const maxIndex = Math.ceil(slides.length / slidesPerView) - 1;
            currentIndex = (currentIndex - 1 + maxIndex + 1) % (maxIndex + 1);
            updateSlider();
        }

        // Only add event listeners if we have multiple slides
        if (totalSlides > slidesPerView) {
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);
        }

        // Handle window resize
        window.addEventListener('resize', function() {
            const newSlidesPerView = getSlidesPerView();
            if (newSlidesPerView !== slidesPerView) {
                currentIndex = 0;
                initSlider();
            }
        });

        // Initialize slider on load
        initSlider();

        // Auto slide (optional) - only if we have multiple slides
        let slideInterval;
        if (totalSlides > slidesPerView) {
            slideInterval = setInterval(nextSlide, 5000);

            // Pause auto slide on hover
            slider.addEventListener('mouseenter', () => clearInterval(slideInterval));
            slider.addEventListener('mouseleave', () => {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 5000);
            });

            // Touch events for mobile swipe
            let touchStartX = 0;
            let touchEndX = 0;

            slider.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                clearInterval(slideInterval);
            }, {passive: true});

            slider.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
                slideInterval = setInterval(nextSlide, 5000);
            }, {passive: true});

            function handleSwipe() {
                if (touchEndX < touchStartX - 50) {
                    nextSlide();
                }

                if (touchEndX > touchStartX + 50) {
                    prevSlide();
                }
            }
        }
    });
</script>