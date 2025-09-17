<style>
    #hero-landing .carousel-control-prev,
    #hero-landing .carousel-control-next {
        z-index: 5;
    }

    #hero-landing .carousel-control-prev-icon,
    #hero-landing .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        background-size: 70%;
    }

    #hero-landing img {
        object-fit: cover;
    }

    #hero-landing .hero-right-card {
        background: #f9f9f9;
    }

    @media (max-width: 768px) {
        #hero-landing .row {
            flex-direction: column;
        }

        #hero-landing .hero-right-card {
            margin-top: 15px;
        }
    }
</style>
{{-- Hero Section --}}
<section id="hero-landing" class="container-fluid py-4">
    <div class="row g-3 align-items-center">

        {{-- Left Side Slider (Banners) --}}
        <div class="col-lg-8 col-md-12">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3 shadow">

                    @php
                        $banners = $grouped->get('banner') ?? collect();
                    @endphp

                    @forelse($banners->take(5) as $index => $banner)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <a href="{{ $banner->link ?? '#' }}">
                                <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-100"
                                    alt="{{ $banner->title ?? 'Banner' }}">
                            </a>

                            @if($banner->title || $banner->subtitle)
                                <div class="carousel-caption d-none d-md-block">
                                    {{-- <h5>{{ $banner->title }}</h5> --}}
                                    {{-- <p>{{ $banner->subtitle }}</p> --}}
                                </div>
                            @endif
                        </div>
                    @empty
                        <div class="carousel-item active">
                            <img src="{{ asset('images/default-banner.jpg') }}" class="d-block w-100" alt="Default Banner">
                        </div>
                    @endforelse
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        {{-- Right Side (Promo / Store Links) --}}
        <div class="col-lg-4 col-md-12">
            @php
                $rightCard = optional($grouped->get('right_card'))->first();
                $storeIcons = $grouped->get('store_icon') ?? collect();
            @endphp

            @if($rightCard)
                <div class="hero-right-card p-3 rounded-3 shadow text-center">
                    <a href="{{ $rightCard->link ?? '#' }}">
                        <img src="{{ asset('storage/' . $rightCard->image) }}" class="img-fluid rounded-3 mb-3"
                            alt="{{ $rightCard->title ?? 'Promo' }}">
                    </a>
                    <h5 class="fw-bold">{{ $rightCard->title ?? '' }}</h5>
                    <p class="text-muted mb-3">{{ $rightCard->subtitle ?? '' }}</p>

            @endif
                <div class="d-flex justify-content-center gap-2">

                    {{-- Optionally show placeholders --}}
                    <a href="#"><img src="{{ asset('assets/images/store/google-play.png') }}" height="40"
                            alt="Play Store"></a>
                    <a href="#"><img src="{{ asset('assets/images/store/app-store.png') }}" height="40"
                            alt="App Store"></a>
                </div>
            </div>
        </div>
    </div>
</section>