<!-- Start Split Tab Area -->
<div class="split-tab-area dreamd-section-gap" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb_sm--30 text-center sal-animate" data-sal="slide-up" data-sal-duration="400"
                    data-sal-delay="150">
                    <h6 class="subtitle round">Features</h6>
                    <h3 class="title mb--0">{!! setting('feature_section_title', app()->getLocale()) !!}</h3>
                </div>

                <nav class="spa-tab">
                    <div class="tab-btn-grp nav nav-tabs mb-3 text-center justify-content-center" id="nav-tab"
                        role="tablist" style="overflow-x: auto; white-space: nowrap; flex-wrap: nowrap; -webkit-overflow-scrolling: touch;">
                        <div class="d-inline-flex">
                            <button class="nav-link active" id="nav-whatsapp-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-whatsapp" type="button" role="tab" aria-controls="nav-whatsapp"
                                aria-selected="true">
                                <i class="lab la-whatsapp"></i> {{ __('whatsapp') }} <span
                                    class="ms-1 d-none d-lg-inline">Marketing</span>
                            </button>
                            <button class="nav-link" id="nav-telegram-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-telegram" type="button" role="tab" aria-controls="nav-telegram"
                                aria-selected="false">
                                <i class="lab la-telegram"></i> {{ __('telegram') }} <span
                                    class="ms-1 d-none d-lg-inline">Marketing</span>
                            </button>
                            <button class="nav-link" id="nav-facebook-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-facebook" type="button" role="tab" aria-controls="nav-facebook"
                                aria-selected="false">
                                <i class="las la-facebook"></i> SMS <span
                                    class="ms-1 d-none d-lg-inline">Marketing</span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Content Part -->
        <div class="wrapper">
            <div class="tab-content p-0 bg-transparent border-0" id="nav-tabContent">
                <!-- WhatsApp Tab -->
                <div class="tab-pane fade show active" id="nav-whatsapp" role="tabpanel" aria-labelledby="nav-whatsapp-tab">
                    @if (!is_null($whatsapp_features))
                        @foreach (@$whatsapp_features as $index => $whatsapp_feature)
                            <div class="row mt_dec--30 align-items-center dreamd-section-gapTop row--40">
                                @if ($index % 2 == 0)
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30 order-2 order-lg-1">
                                        <div class="thumbnail image-left-content">
                                            <img src="{{ getFileLink('original_image', $whatsapp_feature->image) }}"
                                                alt="split Images">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30 order-1 order-lg-2">
                                        <div class="split-inner">
                                            <h4 class="title sal-animate" data-sal="slide-up" data-sal-duration="400"
                                                data-sal-delay="200"
                                                style="font-family: Inter, Bangla1062, sans-serif;">
                                                {{ @$whatsapp_feature->language->title, app()->getLocale() }}</h4>
                                            <ul class="split-list sal-animate" data-sal="slide-up"
                                                data-sal-duration="400" data-sal-delay="350">
                                                @if (!is_null($whatsapp_feature->language))
                                                    @foreach (@$whatsapp_feature->language->description as $description)
                                                        <li>
                                                            <i class="las la-check-circle"></i>
                                                            {!! $description !!}
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30">
                                        <div class="split-inner">
                                            <h4 class="title sal-animate" data-sal="slide-up"
                                                data-sal-duration="400" data-sal-delay="200"
                                                style="font-family: Inter, Bangla1062, sans-serif;">
                                                {{ @$whatsapp_feature->language->title, app()->getLocale() }}</h4>
                                            <ul class="split-list sal-animate" data-sal="slide-up"
                                                data-sal-duration="400" data-sal-delay="350">
                                                @if (!is_null($whatsapp_feature->language))
                                                    @foreach (@$whatsapp_feature->language->description as $description)
                                                        <li><i class="las la-check-circle"></i>
                                                            {!! $description !!}
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30">
                                        <div class="thumbnail image-left-content">
                                            <img src="{{ getFileLink('original_image', $whatsapp_feature->image) }}"
                                                alt="split Images">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- Telegram Tab -->
                <div class="tab-pane fade" id="nav-telegram" role="tabpanel" aria-labelledby="nav-telegram-tab">
                    @if (!is_null($telegram_features))
                        @foreach ($telegram_features as $index => $telegram_feature)
                            <div class="row mt_dec--30 align-items-center dreamd-section-gapTop row--40">
                                @if ($index % 2 == 0)
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30 order-2 order-lg-1">
                                        <div class="thumbnail image-left-content">
                                            <img src="{{ getFileLink('original_image', $telegram_feature->image) }}"
                                                alt="split Images">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30 order-1 order-lg-2">
                                        <div class="split-inner">
                                            <h4 class="title sal-animate" data-sal="slide-up" data-sal-duration="400"
                                                data-sal-delay="200"
                                                style="font-family: Inter, Bangla1062, sans-serif;">
                                                {{ @$telegram_feature->language->title, app()->getLocale() }}
                                            </h4>
                                            <ul class="split-list sal-animate" data-sal="slide-up"
                                                data-sal-duration="400" data-sal-delay="350">
                                                @if (!is_null($telegram_feature->language))
                                                    @foreach (@$telegram_feature->language->description as $description)
                                                        <li>
                                                            <i class="las la-check-circle"></i>
                                                            {!! $description !!}
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30">
                                        <div class="split-inner">
                                            <h4 class="title sal-animate" data-sal="slide-up" data-sal-duration="400"
                                                data-sal-delay="200"
                                                style="font-family: Inter, Bangla1062, sans-serif;">
                                                {{ @$telegram_feature->language->title, app()->getLocale() }}</h4>
                                            <ul class="split-list sal-animate" data-sal="slide-up"
                                                data-sal-duration="400" data-sal-delay="350">
                                                @if (!is_null($telegram_feature->language))
                                                    @foreach (@$telegram_feature->language->description as $description)
                                                        <li><i class="las la-check-circle"></i> {!! $description !!}
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30">
                                        <div class="thumbnail image-left-content">
                                            <img src="{{ getFileLink('original_image', $telegram_feature->image) }}"
                                                alt="split Images">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- facebook Tab -->
                <div class="tab-pane fade" id="nav-facebook" role="tabpanel" aria-labelledby="nav-facebook-tab">
                    @if (!is_null($facebook_features))
                        @foreach ($facebook_features as $index => $facebook_feature)
                            <div class="row mt_dec--30 align-items-center dreamd-section-gapTop row--40">
                                @if ($index % 2 == 0)
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30 order-2 order-lg-1">
                                        <div class="thumbnail image-left-content">
                                            <img src="{{ getFileLink('original_image', $facebook_feature->image) }}"
                                                alt="split Images">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30 order-1 order-lg-2">
                                        <div class="split-inner">
                                            <h4 class="title sal-animate" data-sal="slide-up" data-sal-duration="400"
                                                data-sal-delay="200"
                                                style="font-family: Inter, Bangla1062, sans-serif;">
                                                {{ @$facebook_feature->language->title, app()->getLocale() }}
                                            </h4>
                                            <ul class="split-list sal-animate" data-sal="slide-up"
                                                data-sal-duration="400" data-sal-delay="350">
                                                @if (!is_null($facebook_feature->language))
                                                    @foreach (@$facebook_feature->language->description as $description)
                                                        <li>
                                                            <i class="las la-check-circle"></i>
                                                            {!! $description !!}
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30">
                                        <div class="split-inner">
                                            <h4 class="title sal-animate" data-sal="slide-up" data-sal-duration="400"
                                                data-sal-delay="200"
                                                style="font-family: Inter, Bangla1062, sans-serif;">
                                                {{ @$facebook_feature->language->title, app()->getLocale() }}</h4>
                                            <ul class="split-list sal-animate" data-sal="slide-up"
                                                data-sal-duration="400" data-sal-delay="350">
                                                @if (!is_null($facebook_feature->language))
                                                    @foreach (@$facebook_feature->language->description as $description)
                                                        <li><i class="las la-check-circle"></i> {!! $description !!}
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-12 mt--30">
                                        <div class="thumbnail image-left-content">
                                            <img src="{{ getFileLink('original_image', $facebook_feature->image) }}"
                                                alt="split Images">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Split Tab Area -->

<style>
    /* Custom styles for scrollable tabs on mobile */
    @media (max-width: 991.98px) {
        .tab-btn-grp {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 10px; /* Add some space for scrollbar */
        }

        .tab-btn-grp > .d-inline-flex {
            display: inline-flex;
            flex-wrap: nowrap;
        }

        .tab-btn-grp .nav-link {
            display: inline-block;
            float: none;
            white-space: nowrap;
            margin-right: 5px;
        }

        /* Hide scrollbar but keep functionality */
        .tab-btn-grp::-webkit-scrollbar {
            display: none;
        }

        /* Active tab styling */
        .nav-tabs .nav-link.active {
            border-bottom: 2px solid #007bff;
            color: #007bff;
        }
    }

    .dreamd-section-gapTop{
        padding-top:36px !important;
    }

    /* Desktop styles */
    .nav-tabs .nav-link {
        padding: 12px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .nav-tabs .nav-link:hover:not(.active) {
        color: #0056b3;
    }

    .nav-tabs .nav-link.active {
        border-bottom: 3px solid #007bff;
        color: #007bff;
        background-color: transparent;
    }

    .thumbnail img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .split-inner {
        padding: 20px;
    }

    .split-list li {
        margin-bottom: 10px;
        padding-left: 5px;
    }

    .split-list i {
        color: #28a745;
        margin-right: 8px;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional: Add this script to handle tab switching more smoothly -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all tab buttons
    const tabButtons = document.querySelectorAll('[data-bs-toggle="tab"]');

    // Add click event listeners
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.setAttribute('aria-selected', 'false');
            });

            // Add active class to clicked button
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
        });
    });
});
</script>