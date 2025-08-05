<div class="dd-about-section bg-white padding" id="metaprice">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h6 class="subtitle round d-flex align-items-center gap-2">Meta Pricing <i class="las la-money-check-alt fs-2"></i></h6>
                    <h3 class="title mb--20">Meta Template Pricing (As Per Category)</h3>
                    <p class="description">Category-wise charges are billed separately by Meta as per the selected template type.</p>
                </div>
            </div>
        </div>
        <div class="card-grid">
        <!-- Card 1 - Utility -->
        <div class="pricing-card">
            <div class="card-header utility-header">
                <h3 class="card-category">Utility</h3>
                <div class="card-price">0.16 Paise</div>
            </div>
            <div class="card-body">
                <p class="card-description">Use this category for basic templates such as payment updates, order confirmations, delivery notifications, feedback requests, and more.</p>
            <span style="font-size:12px;font-weight:500;">Charges are based on Meta's pricing (July 2025).</span>
            </div>
            <div class="card-badge utility-badge">Essential</div>
        </div>

        <!-- Card 2 - Authentication -->
        <div class="pricing-card">
            <div class="card-header auth-header">
                <h3 class="card-category">Authentication</h3>
                <div class="card-price">0.13 Paise</div>
            </div>
            <div class="card-body">
                <p class="card-description">Use this category for templates such as login alerts, OTP verification, account creation, password resets, and other authentication-related messages.</p>
<span style="font-size:12px;font-weight:500;">Charges are based on Meta's pricing (July 2025).</span>
            </div>
            <div class="card-badge auth-badge">Secure</div>
        </div>

        <!-- Card 3 - Marketing -->
        <div class="pricing-card">
            <div class="card-header marketing-header">
                <h3 class="card-category">Marketing</h3>
                <div class="card-price">0.89 Paise</div>
            </div>
            <div class="card-body">
                <p class="card-description">Use this category for templates such as promotional offers, product updates, festive greetings, customer re-engagement messages, and more.</p>
<span style="font-size:12px;font-weight:500;">Charges are based on Meta's pricing (July 2025).</span>
            </div>
            <div class="card-badge marketing-badge">Premium</div>
        </div>
    </div>
    </div>
</div>

<style>
:root {
    --utility-color: #4285F4;
    --auth-color: #34A853;
    --marketing-color: #EA4335;
    --card-shadow: 0 10px 20px rgba(0,0,0,0.08);
}

.card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin: 2rem 0;
}

.pricing-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    position: relative;
    border: none;
}

.pricing-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

.card-header {
    padding: 25px;
    color: white;
    position: relative;
    overflow: hidden;
}

.card-header::after {
    content: '';
    position: absolute;
    bottom: -50px;
    right: -50px;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: rgb(255 255 255 / 20%);
}

.utility-header {
    background: linear-gradient(135deg, #002dff 0%, #3367D6 100%);
}

.auth-header {
    background: linear-gradient(135deg, #02ac23 0%, #2D9140 100%);
}

.marketing-header {
    background: linear-gradient(135deg, #ffa100 0%, #D33426 100%);
}

.card-category {
    margin: 0;
    font-size: 2rem;
    font-weight: 600;
    position: relative;
    z-index: 1;
    color:#fff;
}

.card-price {
    font-size: 2rem;
    font-weight: 700;
    margin-top: 10px;
    position: relative;
    z-index: 1;
}

.card-body {
    padding: 25px;
    color: #555;
    background: #FFFFFF;
}

.card-description {
    margin: 0;
    line-height: 1.7;
    color: #666;
    font-size: 1.5rem;
}

.card-badge {
    position: absolute;
    top: 20px;
    right: 0;
    padding: 6px 20px;
    font-size: 1.5rem;
    font-weight: 600;
    border-radius: 20px 0 0 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    z-index: 2;
}

.utility-badge {
    background: #ff0476;
    color: white;
}

.auth-badge {
    background: #ff6500;
    color: white;
}

.marketing-badge {
    background: #01b700;
    color: white;
}

@media (max-width: 768px) {
    .card-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .card-header {
        padding: 20px;
    }

    .card-category {
        font-size: 1.3rem;
    }

    .card-price {
        font-size: 1.8rem;
    }
}

/* Modern decorative elements */
.pricing-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--utility-color), var(--auth-color), var(--marketing-color));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.pricing-card:hover::before {
    opacity: 1;
}

.padding{
    padding:100px 0px;
}

</style>