<!-- Start Advantage Slider Area -->
<div class="dreamd-advantage-area dreamd-section-gap-big" id="advantage" style="background-color: rgb(3 150 161 / 12%) !important">
    <div class="container">
        <div class="row row--15">
            <div class="col-lg-12">
                <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100" style="margin-bottom:0px;">
                    <h6 class="subtitle round d-flex align-items-center gap-2">Advantage <i class="lab la-sketch fs-2"></i></h6>
                    <h3 class="title mb--20">{{ setting('advantage_section_title', app()->getLocale()) }}</h3>
                    <p class="description b1 mw-100">{{ setting('advantage_section_subtitle', app()->getLocale()) }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="advantage-slider-container">
                    <div class="advantage-slider-wrapper">
                        <div class="advantage-slider">
                            @foreach($advantages as $advantage)
                            <div class="advantage-slide">
                                <div class="row align-items-center">

                                <!-- Image on right -->
                                    <div class="col-lg-6 order-1 order-lg-2">
                                        <div class="advantage-image">
                                            <img src="{{ getFileLink('original_image', $advantage->image) }}" alt="{{ @$advantage->language->title }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <!-- Content on left -->
                                    <div class="col-lg-6 order-2 order-lg-1">
                                        <div class="advantage-content">
                                            <h3 class="title">{{ @$advantage->language->title }}</h3>
                                            <div class="description">
                                                @if(!empty(@$advantage->language->description))
                                                    @php
                                                        $descriptionItems = is_array(@$advantage->language->description)
                                                            ? @$advantage->language->description
                                                            : explode("\n", str_replace("\r", "", @$advantage->language->description));
                                                        $descriptionItems = array_filter($descriptionItems);
                                                    @endphp

                                                    @if(count($descriptionItems) > 1)
                                                        <ul class="split-list sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="350">
                                                            @foreach($descriptionItems as $item)
                                                                <li>
                                                                    <i class="las la-check-circle"></i>
                                                                    {!! trim($item) !!}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        {!! @$advantage->language->description !!}
                                                    @endif
                                                @endif
                                            </div>
                                            <a class="btn-default round has-right-icon btn-large" href="/register">Get Started for free<i class="las la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    @if(count($advantages) > 1)
                    <div class="slider-navigation">
                        <button class="slider-button prev-button">
                            <i class="las la-angle-left"></i>
                        </button>
                        <button class="slider-button next-button">
                            <i class="las la-angle-right"></i>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Advantage Slider Area -->

<style>
.advantage-slider-container {
    position: relative;
    margin-top: 0px;
    overflow: hidden;
}

.advantage-slider-wrapper {
    width: 100%;
    overflow: hidden;
}

.advantage-slider {
    display: flex;
    width: 100%;
    transition: transform 0.5s ease;
}

.advantage-slide {
    flex: 0 0 100%;
    min-width: 100%;
    padding: 30px 0;
    opacity: 0;
    transition: opacity 0.5s ease;
}

.advantage-slide.active {
    opacity: 1;
}

.advantage-content {
    padding: 30px;
}

.advantage-content .title {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.advantage-content .description {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
}

.advantage-image img {
    border-radius: 8px;
    max-height: 500px;
    width: auto;
    margin: 0 auto;
    display: block;
}

/* List styling */
.split-list {
    list-style: none;
    padding-left: 0;
    margin-top: 15px;
    margin-bottom: 20px;
}

.split-list li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 12px;
    line-height: 1.5;
}

.split-list li i {
    position: absolute;
    left: 0;
    top: 3px;
    color: #25D366;
    font-size: 24px;
    line-height:30px;
}

/* Slider navigation buttons */
.slider-navigation {
    position: relative;
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.slider-button {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #4a6cf7;
    color: white;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 20px;
}

.slider-button:hover {
    background-color: #3a5ce4;
    transform: scale(1.05);
}

.slider-button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
    transform: none;
}

@media (max-width: 991px) {
    .advantage-content {
        padding: 20px 0;
    }

    .advantage-image img {
        max-height: 300px;
    }

    .split-list li {
        padding-left: 25px;
        margin-bottom: 10px;
    }
}

@media (max-width: 767px) {
    .advantage-slide .row > div {
        order: 0 !important;
    }

    .advantage-content {
        padding-top: 0;
    }

    .advantage-image {
        margin-bottom: 20px;
    }

    .slider-navigation {
        margin-top: 20px;
    }

    .slider-button {
        width: 40px;
        height: 40px;
        font-size: 18px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sliderWrapper = document.querySelector('.advantage-slider-wrapper');
    const slider = document.querySelector('.advantage-slider');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    const slides = document.querySelectorAll('.advantage-slide');
    let currentIndex = 0;
    let slideCount = slides.length;
    let autoSlideInterval;

    console.log(`Slider initialized with ${slideCount} slides`);

    // Initialize slider
    function initSlider() {
        if (slideCount === 0) {
            console.warn('No slides found in the slider');
            if (prevButton) prevButton.style.display = 'none';
            if (nextButton) nextButton.style.display = 'none';
            return;
        }

        // Set initial active slide
        goToSlide(0);

        // Setup auto slide if more than one slide
        if (slideCount > 1) {
            startAutoSlide();
        } else {
            if (prevButton) prevButton.style.display = 'none';
            if (nextButton) nextButton.style.display = 'none';
        }
    }

    // Go to specific slide
    function goToSlide(index) {
        if (slideCount === 0) return;

        // Handle wrap-around for infinite loop
        if (index < 0) {
            index = slideCount - 1;
        } else if (index >= slideCount) {
            index = 0;
        }

        // Update current index
        currentIndex = index;

        // Update slider position
        const translateX = -currentIndex * 100;
        slider.style.transform = `translateX(${translateX}%)`;

        // Update active classes on slides
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === currentIndex);
        });

        // Reset auto slide timer
        resetAutoSlide();
    }

    // Next slide
    function nextSlide() {
        goToSlide(currentIndex + 1);
    }

    // Previous slide
    function prevSlide() {
        goToSlide(currentIndex - 1);
    }

    // Auto slide functionality
    function startAutoSlide() {
        if (slideCount > 1) {
            autoSlideInterval = setInterval(nextSlide, 10000); // 10 seconds
        }
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        if (slideCount > 1) {
            startAutoSlide();
        }
    }

    // Event listeners for navigation buttons
    if (prevButton) {
        prevButton.addEventListener('click', prevSlide);
    }

    if (nextButton) {
        nextButton.addEventListener('click', nextSlide);
    }

    // Pause auto slide on hover
    sliderWrapper.addEventListener('mouseenter', () => {
        if (slideCount > 1) {
            clearInterval(autoSlideInterval);
        }
    });

    sliderWrapper.addEventListener('mouseleave', () => {
        if (slideCount > 1) {
            resetAutoSlide();
        }
    });

    // Initialize slider
    initSlider();

    // Handle window resize
    window.addEventListener('resize', function() {
        goToSlide(currentIndex);
    });
});
</script>