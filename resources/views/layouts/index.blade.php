<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/cubeportfolio/css/cubeportfolio.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>

<body>
    @yield('content')

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.unfold.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.slick-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.validation.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.focus-state.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.cubeportfolio.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.svg-injector.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function () {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });

            // initialization of svg injector module
            $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
        });

        $(document).on('ready', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate');

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of cubeportfolio
            $.HSCore.components.HSCubeportfolio.init('.cbp');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
</body>

</html>