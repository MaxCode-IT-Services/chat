<!-- Start Banner Area  -->
<div class="cns-banner-area banner-style-1">
    @include('website.themes.'.active_theme().'.header')
    <div class="container">
        <div class="row row--15 mt_dec--30 align-items-center">
            <div class="col-lg-6 mt--30">
                <h4 class="subtitle meta-badge">
                    @php
                        $small_title = $small_titles->first();
                    @endphp

                    @if ($small_title)
                        <span class="meta-icon">
                            <img src="{{ getFileLink('original_image', $small_title->image) }}" alt="meta" />
                        </span>
                        <span class="meta-text">
                            {{ @$small_title->language->title ?? '' }}
                        </span>
                    @endif
                </h4>

                <div class="banner-content">
                    <h1 class="title">
                        {!! setting('hero_title',app()->getLocale()) !!}
                    </h1>
                    <p class="description">
                        {!! setting('hero_description',app()->getLocale()) !!}
                    </p>
                    <div class="banner-btn">
                        @if(setting('hero_main_action_btn_enable') == '1')
                            <a class="btn-default round has-right-icon btn-large" href="{{setting('hero_main_action_btn_url',app()->getLocale())}}">{{setting('hero_main_action_btn_label',app()->getLocale())}} <i class="las la-angle-right"></i></a>
                        @endif
                        @if(setting('hero_secondary_action_btn_enable') == '1')
                            <a class=" btn btn-warning hero-btn" href="{{setting('hero_secondary_action_btn_url',app()->getLocale())}}">{{setting('hero_secondary_action_btn_label',app()->getLocale())}} <i class="las la-phone-volume"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt--30">
                <div class="banner-thumbnail">
                    <div class="inner">
                        <img src="{{  getFileLink('original_image',setting('header1_hero_image1')) }}" alt="Hero images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.meta-badge {
    display: inline-flex;
    align-items: center;
    background: #e5e5e5;
    color: #1c1e21;
    font-weight: 500;
    font-size: 14px;
    padding: 5px 12px;
    border-radius: 999px;
    max-width: fit-content;
    margin-bottom: 15px;
}

.meta-badge .meta-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    border-radius: 50%;
    width: 22px;
    height: 22px;
    margin-right: 8px;
}
.hero-btn{
    font-size:17px;padding:0px 36px;border-radius:50px; font-weight:500; line-height:60px
}

.meta-badge .meta-icon img {
    width: 14px;
    height: 14px;
    object-fit: contain;
}

.meta-badge .meta-text {
    line-height: 1;
}

/* Updated mobile styles */
@media (max-width: 767px) {
    .meta-badge {
        display:flex; /* Keep as inline-flex */
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        /* Remove width: 100% */
        /* Remove max-width: 100% */
    }
    .btn-default{
    padding:0px 18px!important;
}
    .hero-btn{
   padding:0px 18px;
}

    /* Optional: Center the parent container if needed */
    .banner-content {
        text-align: center;
    }
}
</style>
<!-- End Banner Area  -->