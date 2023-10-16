<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Metamind</title>

    <link rel="icon" href="{{ asset('images/logo.png') }}">

    <!-- CSS FILES -->
    <link href="{{ asset('lp_template/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lp_template/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('lp_template/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    
    @stack('css')
</head>

<body id="section_1">
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    {{-- <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="{{ asset('images/logo.png') }}" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: 120-240-9600" class="site-footer-link">

                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">

                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>

                    </p>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
                            Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer> --}}

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('lp_template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('lp_template/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lp_template/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('lp_template/js/click-scroll.js') }}"></script>
    <script src="{{ asset('lp_template/js/counter.js') }}"></script>
    <script src="{{ asset('lp_template/js/custom.js') }}"></script>

    @stack('js')

</body>

</html>
