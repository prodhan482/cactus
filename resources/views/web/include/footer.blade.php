<footer id="footer" class="mt-5">
    <div class="container">
        <div class="row d-flex flex-wrap justify-content-between py-5">

            {{-- Logo + Tagline --}}
            <div class="col-md-3 col-sm-6">
                <div class="footer-menu footer-menu-001">
                    <div class="footer-intro mb-4">
                        @if(!empty($footerLogo->logo))
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('storage/' . $footerLogo->logo) }}" height="70" alt="logo">
                            </a>
                        @else
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" height="70" alt="logo">
                            </a>
                        @endif
                        </a>
                    </div>
                    <p>{{ $footerLogo->tagline ?? 'CactusT – Where Style Meets Craftsmanship. We bring you premium clothing made with precision, passion, and your style in mind.' }}
                    </p>

                    {{-- Social links (optional) --}}
                    <div class="social-links">
                        <ul class="list-unstyled d-flex flex-wrap gap-3">
                            @foreach(['facebook', 'twitter', 'youtube', 'pinterest', 'instagram'] as $social)
                                <li>
                                    <a href="#" class="text-secondary">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <use xlink:href="#{{ $social }}"></use>
                                        </svg>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Quick Links --}}
            <div class="col-md-3 col-sm-6">
                <div class="footer-menu footer-menu-002">
                    <h5 class="widget-title text-uppercase mb-4">Quick Links</h5>
                    <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
                        @foreach($footerQuickLinks as $link)
                            <li class="menu-item">
                                <a href="{{ $link->url ?? '#' }}" class="item-anchor">{{ $link->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Help & Info --}}
            <div class="col-md-3 col-sm-6">
                <div class="footer-menu footer-menu-003">
                    <h5 class="widget-title text-uppercase mb-4">Help & Info</h5>
                    <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
                        @foreach($footerHelpLinks as $link)
                            <li class="menu-item">
                                <a href="{{ $link->url ?? '#' }}" class="item-anchor">{{ $link->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Contact --}}
            <div class="col-md-3 col-sm-6">
                <div class="footer-menu footer-menu-004 border-animation-left">
                    <h5 class="widget-title text-uppercase mb-4">Contact Us</h5>
                    <p>Do you have any questions or suggestions?
                        <a href="mailto:{{ $footerContact->email ?? 'info@cactus.com' }}" class="item-anchor">
                            {{ $footerContact->email ?? 'info@cactus.com' }}
                        </a>
                    </p>
                    <p>Do you need support? Give us a call.
                        <a href="tel:{{ $footerContact->phone ?? '+43 720 11 52 78' }}" class="item-anchor">
                            {{ $footerContact->phone ?? '+43 720 11 52 78' }}
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="border-top py-4">
        <div class="container">
            <div class="row"> </div>
            <div class="col-md-8 text-end">
                <p> © <span id="current-year"></span> <a href="/">Cactus</a>. All rights reserved. Design by <a
                        href="https://proteqdev.com" target="_blank">ProteqDev</a> </p>
            </div>
        </div>
    </div>
    </div>
</footer>

<script>
    // Set current year dynamically
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>