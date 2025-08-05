@if(setting('cta_enable') == 1)
    <div class="dd-call-to-action-area dreamd-section-gap pb_lg--0" id="cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="dd-cta">
                        <div class="section-title mb--0 text-center">
                            <h2 class="title">{!! setting('cta_title', app()->getLocale()) !!}</h2>
                            <h4 class="subtitle text-light mb-4">{!! setting('cta_subtitle', app()->getLocale()) !!}</h4>
                            <div class="button-group">
                                <a class="btn-default round has-right-icon btn-large color-green" href="{!! setting('cta_main_action_btn_url', app()->getLocale()) !!}">
                                    {!! setting('cta_main_action_btn_label', app()->getLocale()) !!}
                                    <i class="las la-arrow-circle-right"></i>
                                </a>
                                <a href="{!! setting('whatsapp_chat_url', app()->getLocale()) !!}" class="btn btn-warning hero-btn round has-right-icon btn-large">
                                    WhatsApp Chat
                                    <i class="lab la-whatsapp ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<style>
.dd-cta .title{
    margin-bottom:10px;
}

.button-group {
    display: flex;
    justify-content: center;
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
}

/* Mobile styles */
@media (max-width: 767px) {
    .button-group {
        gap: 10px;
    }

    .btn-default, .hero-btn {
        padding: 0px 18px !important;
        line-height: 50px;
        font-size: 15px;
    }
}
</style>