<!-- Start Call to Action Area -->
<div class="dd-cta-area dreamd-section-gap-big dd-pricing-area">
    <div class="container">
        <div class="cta-style-one">
            <div class="row row--15 mt_dec--30 align-items-center">
                <div class="col-lg-6 mt--30">
                    <div class="content">
                        <h2 class="title">{!! setting('ai_title',app()->getLocale()) !!}</h2>
                        <p class="description">{!! setting('ai_description', app()->getLocale()) !!}</p>
                        <div class="button-container">
                            <a class="btn-default round has-right-icon btn-large color-green" href="{{ setting('ai_main_action_btn_url') }}">{{ setting('ai_main_action_btn_label', $lang) }} <i class="las la-phone-volume"></i></a>
                            <a class="btn btn-warning hero-btn round has-right-icon btn-large" href="https://payments.cashfree.com/forms/maxcodeitservices">Pay Now <i class="las la-money-bill-wave"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt--30 offset-lg-1">
                    <div class="image">
                        <img src="{{ static_asset('website/images/cta/cta-img-01.png')}}" alt="Call To Action Image">
                        <img class="qr-code" src="https://img.maxcodehub.com/qr_code.png" alt="QR iMAGE">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.dd-cta .title{
    margin-bottom:10px;
}

.button-container {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.btn-default, .hero-btn {
    font-size: 17px;
    padding: 0px 36px;
    border-radius: 50px;
    font-weight: 500;
    line-height: 60px;
    white-space: nowrap;
    margin: 5px 0;
}

/* Mobile styles */
@media (max-width: 767px) {
    .button-container {
        gap: 10px;
    }

    .btn-default, .hero-btn {
        padding: 0px 18px !important;
        line-height: 50px;
        font-size: 15px;
        flex: 1 1 calc(50% - 10px);
        min-width: 0;
        text-align: center;
    }
}

@media (max-width: 991.98px) {
    .qr-code{
        width:180px;
    }
}
</style>