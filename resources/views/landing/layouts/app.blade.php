<!doctype html>
<html lang="en">


<!-- Mirrored from www.indonez.com/html-demo/equity/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 05:54:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- meta tags -->
    @hasSection('title')
        <title>{!! "{$__env->yieldContent('title')}" !!}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}</title>
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FCB42D">
    @yield('seo')
    <!-- preload assets -->
    <link rel="preload" href="{{ asset('assets_landing/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('assets_landing/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('assets_landing/fonts/archivo-v18-latin-regular.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets_landing/fonts/archivo-v18-latin-300.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets_landing/fonts/archivo-v18-latin-700.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets_landing/css/style.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets_landing/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets_landing/js/utilities.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets_landing/js/config-theme.js') }}" as="script">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets_landing/css/style.css') }}">
    <!-- uikit -->
    <script src="{{ asset('assets_landing/js/vendors/uikit.min.js') }}"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">
    @yield('style')
</head>

<body>
    <!-- page loader begin -->
    <div class="page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->
    <!-- header begin -->
    @include('landing.layouts.header')
    <!-- header end -->
    @yield('header')
    <main>
        <!-- slideshow content begin -->
        @yield('content')
        <!-- section content end -->
    </main>
    <!-- footer begin -->
    <footer>
        <div class="uk-section" style="
        color: white;
        background-color: black;">
            <div class="uk-container uk-margin-top">
                <div class="uk-grid">
                    <div class="uk-width-2-3@m">
                        <div class="uk-child-width-1-2@s uk-child-width-2-3@m" data-uk-grid="">
                            <div>
                                <h4 class="uk-text-primary">Layanan</h4>
                                <ul class="uk-list uk-link-text">
                                    @forelse ($services as $service)
                                        <li>
                                            <a href="{{ url("/services/{$service->slug}") }}"><i
                                                    class="fas fa-angle-right"></i> {{ $service->name }}</a>
                                        </li>
                                    @empty
                                        <li>Belum ada data layanan</li>
                                    @endforelse
                                </ul>
                            </div>
                            <div>
                                <h4 class="uk-text-primary">Hubungi kami</h4>
                                @if ($profile)
                                    <ul class="uk-list uk-link-text">
                                        <li>
                                            <div class="uk-flex">
                                                <i class="fas fa-home uk-margin-right uk-text-primary"></i>
                                                <div class="">
                                                    <h5 class="uk-text-primary uk-margin-remove">Alamat</h5>
                                                    <p class="uk-margin-remove uk-text-muted">
                                                        {{ optional($profile)->address ?? 'Contoh Alamat, Jalan Dummy No. 123, Kota, Negara' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-flex">
                                                <i class="fas fa-envelope uk-margin-right uk-text-primary"></i>
                                                <div class="">
                                                    <h5 class="uk-text-primary uk-margin-remove">Email</h5>
                                                    <a href="#"
                                                        class="uk-text-muted">{{ optional($profile)->email ?? 'dummy@example.com' }}</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-flex">
                                                <i style="font-size: 20px"
                                                    class="fab fa-whatsapp uk-margin-right uk-text-primary"></i>
                                                <div class="">
                                                    <h5 class="uk-text-primary uk-margin-remove">Whatsapp</h5>
                                                    <a href="#"
                                                        class="uk-text-muted">{{ optional($profile)->phone ?? '+62 812-3456-7890' }}</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m uk-flex uk-flex-right@m">
                        <!-- social media begin -->
                        <div class="uk-flex uk-flex-column social-media-list">
                            <div>
                                <h4 class="uk-text-primary">Sosial Media</h4>
                                <ul class="uk-list uk-link-text uk-text-muted uk-margin-remove">
                                    @forelse ($socmed as $socmed)
                                        <li class="uk-margin-small">
                                            <h6><a href="{{ $socmed->link }}" target="_blank" class="uk-flex uk-flex-middle uk-text-muted uk-text-small" style="gap: .5rem; text-align: left;">
                                                <i class="fas fa-angle-right"></i>
                                                <img alt="{{ $socmed->platform }} Logo" src="{{ asset("storage/{$socmed->image}") }}" height="16px" width="16px" class="mb-0" />
                                                {{ $socmed->platform }}
                                            </a></h6>
                                        </li>
                                    @empty
                                        <li class="uk-text-muted">Belum ada data</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <!-- social media end -->
                    </div>

                </div>
            </div>
            <hr class="uk-margin-large">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-2-3@m uk-text-small">
                        @isset($profiles)
                            <p class="copyright-text">©Copyright 2024. All Rights Reserved by <a href="/"
                                    class="uk-link-text uk-text-decoration-none uk-text-bolder">{{ $profiles->title }}</a>
                            </p>
                        @else
                            <p class="copyright-text">©Copyright 2024. All Rights Reserved by <a href="/"
                                    class="uk-link-text uk-text-decoration-none uk-text-bolder">Company</a></p>
                        @endisset
                    </div>
                    <div class="uk-width-1-3@m uk-flex uk-flex-right uk-visible@m">
                        <span class="uk-margin-right"><img src="img/in-lazy.gif" data-src="{{ asset('cakra.png') }}"
                                alt="footer-payment" width="250px" data-uk-img=""></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- to top begin -->
    <a href="#" class="to-top uk-visible@m" data-uk-scroll>
        Top<i class="fas fa-chevron-up"></i>
    </a>
    <!-- to top end -->
    <!-- javascript -->
    @yield('script')
    <script src="{{ asset('assets_landing/js/vendors/tradingview-widget.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/vendors/particles.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/config-particles.js') }}"></script>
    <script src="{{ asset('assets_landing/js/utilities.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/config-theme.js') }}"></script>
</body>
<!-- Mirrored from www.indonez.com/html-demo/equity/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 05:55:09 GMT -->

</html>
