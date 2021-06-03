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
