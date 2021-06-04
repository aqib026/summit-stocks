<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
                <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
        <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/vendor/animate/animate.compat.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/vendor/magnific-popup/magnific-popup.min.css') }}">
        <!-- Theme CSS -->
         <link rel="stylesheet" href="{{ asset('theme/css/custom.css') }}">
         <link rel="stylesheet" href="{{ asset('theme/css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/theme-shop.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css"
      href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-face.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/style.css') }}" />
        <link rel="icon" href="{{ asset('theme/img/cropped-cropped-logo@2x-32x32.png') }}" sizes="32x32" />
        <link rel="icon" href="{{ asset('theme/img/cropped-cropped-logo@2x-192x192.png') }}" sizes="192x192" />
          <!-- Skin CSS -->
        <link id="skinCSS" rel="stylesheet" href="{{ asset('theme/css/skins/default.css') }}">

        <!-- Theme Custom CSS -->
       

        <!-- Head Libs -->
        <script src="{{ asset('theme/vendor/modernizr/modernizr.min.js') }}"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" data-plugin-page-transition>
        <div class="body">
        <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 173, 'stickySetTop': '-173px', 'stickyChangeLogo': false}">
                <div class="header-body border-0">


                    <!-- header header header header header -->
                    <!-- <div class="header-top header-top-default border-bottom-0 bg-color-primary">
						<div class="container container-lg-custom">
							<iframe id='st_f145943643b84038989d4c33cb78f373' frameBorder='0' scrolling='no' width='100%' height='100%' src='https://api.stockdio.com/visualization/financial/charts/v1/Ticker?app-key=97FB1781D95247F490A05175F2AC2546&stockExchange=USA&symbols=AAPL;MSFT&palette=Financial-Light&layoutType=8&onload=st_f145943643b84038989d4c33cb78f373'></iframe>
						</div>
					</div> -->

                    <!-- header header header header header -->
                    <div class="header-container container container-lg-custom" style="min-height: 122px;">
                        <div class="header-row py-3">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <h1 class="header-logo">
                                        <a href="index.html">
                                            <img alt="Porto" width="237" height="55" src="theme/img/cropped-logo@2x.png">
                                           <!--  <span class="hide-text">Porto - Demo Blog 1</span> -->
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <div class="header-column justify-content-end w-75">
                                <div class="header-row">
                                    <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank">
                                        <img alt="Porto" class="img-fluid pl-3" src="theme/img/blog/blog-ad-2.jpg" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-bar header-nav-bar-top-border bg-light">
                        <div class="header-container container container-lg-custom">
                            <div class="header-row">
                                <div class="header-column">
                                    <div class="header-row justify-content-end justify-content-lg-start">
                                        <div class="header-nav p-0">
                                            <div class="header-nav header-nav-links header-nav-spaced header-nav-first-item-no-padding justify-content-start">
                                                <div class="header-nav-main header-nav-main-square header-nav-main-font-lg-upper header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                                    <nav class="collapse">
                                                        <ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
                                                            <li class="dropdown ml-0">
                                                                <a class="dropdown-item dropdown-toggle" href="index.html">
                                                                    Latest Stock Picks
                                                                </a>   
                                                            </li>  
                                                             <li class="dropdown ml-0">
                                                                <a class="dropdown-item dropdown-toggle" href="index.html">
                                                                    Research/Reports
                                                                </a>   
                                                            </li>   
                                                            <li class="dropdown ml-0">
                                                                <a class="dropdown-item dropdown-toggle" href="index.html">
                                                                    Contact Us
                                                                </a>   
                                                            </li>   
                                                            <li class="dropdown ml-0">
                                                                <a class="dropdown-item dropdown-toggle" href="index.html">
                                                                    About
                                                                </a>   
                                                            </li> 

<div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
<inertia-link v-if="$page.props.auth.user" href="/dashboard" class="text-sm text-gray-700 underline">
Dashboard
</inertia-link>

<template v-else>
<inertia-link :href="route('login')" class="text-sm text-gray-700 underline">
Log in
</inertia-link>

<inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
Register
</inertia-link>
</template>
</div> 


</ul>
                                                    </nav>
                                                </div>
                                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                                    <i class="fas fa-bars"></i>
                                                </button>
                                            </div>
                                            <div class="header-nav-features">
                                                <div class="header-nav-features-search-reveal-container">
                                                    <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal d-inline-flex">
                                                        <a href="#" class="header-nav-features-search-show-icon d-inline-flex text-decoration-none"><i class="fas fa-search header-nav-top-icon"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-features header-nav-features-no-border p-static">
                    <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal header-nav-features-search-reveal-big-search header-nav-features-search-reveal-big-search-full">
                        <div class="container">
                            <div class="row h-100 d-flex">
                                <div class="col h-100 d-flex">
                                    <form role="search" class="d-flex h-100 w-100" action="page-search-results.html" method="get">
                                        <div class="big-search-header input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Type and hit enter...">
                                            <a href="#" class="header-nav-features-search-hide-icon"><i class="fas fa-times header-nav-top-icon"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
              @inertia
        </div>
      

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
       <!-- Vendor -->
      <!--   <script src="{{ mix('js/app.js') }}"></script> -->
        <script src="{{ asset('theme/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.min.js')  }}"></script>
        <script src="{{ asset('theme/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/lazysizes/lazysizes.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/vivus/vivus.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/jquery.instagramfeed/jquery.instagramFeed.min.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('theme/js/theme.js') }}"></script> 
        <!-- Theme Custom -->
        <script src="{{ asset('theme/js/custom.js') }}"></script>
        <!-- Theme Initialization Files -->
        <script src="{{ asset('theme/js/theme.init.js') }}"></script>
        <!-- Examples -->
        <script src="{{ asset('theme/js/examples/examples.instagramFeed.js') }}"></script>
    </body>
</html>