@extends('layouts.index')

@section('title', 'Favour Pages')

@section('content')
<header id="header" class="u-header u-header--bg-transparent u-header--abs-top pt-3">
    <div class="u-header__section">
        <div id="logoAndNav" class="container">
            <nav class="navbar navbar-expand u-header__navbar">
                <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/"
                    aria-label="Pag.es">
                    <span class="u-header__navbar-brand-text font-weight-light">Pag.es</span>
                </a>

                <div class="ml-auto">
                    <a class="btn btn-sm btn-primary transition-3d-hover" href="#" style="border-radius:0 !important;">
                        Login to Pag.es
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

<main id="content" role="main">
    <div class="u-hero-v1">
        <div id="heroNav">
            <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-color: #000000;">
                <div class="container space-3 space-top-md-5 space-top-lg-3">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 position-relative text-center">
                            <h1 class="text-white display-4 font-size-md-down-5 mb-0" data-scs-animation-in="fadeInUp">
                                <span class="font-weight-semi-bold">Up your work</span>
                            </h1>

                            <span class="d-block h4 text-white-50 font-weight-light py-5"
                                data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                Disha empowers makers and creators with tools and templates to showcase their work, save
                                more time and grow their business without writing code.
                            </span>

                            <a class="btn btn-sm btn-primary transition-3d-hover" href="#">
                                Signup to Pag.es
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg-img-hero-center"
            style="background-image: url({{ asset('assets/images/hero.jpg') }}); height: 500px;">
        </div>

        <!-- Learn Section -->
        <div id="learnSection" class="clearfix border-bottom bg-light space-2">
            <div class="container">
                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-9">
                    <h2 class="h1 font-weight-semi-bold mb-5" style="line-height:1.3">
                        Made for creators.<br>Designed for you.
                    </h2>
                    <h4 class="h5 font-weight-light">
                        Our products and templates are streamlined for easy customization. Our focus is on the latest
                        technology trends, modern design and great user experience.
                    </h4>
                </div>

                <div id="SVGicons" class="svg-preloader w-lg-10 mx-md-auto">
                    <div class="row">
                        <div class="col-6 col-sm-3 mb-5 mb-sm-0 text-center">
                            <div class="text-center">
                                <figure class="ie-height-40 w-100 mx-auto mb-3">
                                    <img class="js-svg-injector" src="{{ asset('assets/images/svg/easy.svg') }}"
                                        alt="SVG" data-parent="#SVGicons">
                                </figure>
                                <h3 class="h6 font-weight-normal">Easy to Use</h3>
                                <p class="small px-3">We ensure our tools and templates easy to setup and customize.</p>
                            </div>
                        </div>

                        <div class="col-6 col-sm-3 mb-5 mb-sm-0">
                            <div class="text-center">
                                <figure class="ie-height-40 w-100 mx-auto mb-3">
                                    <img class="js-svg-injector" src="{{ asset('assets/images/svg/design.svg') }}"
                                        alt="SVG" data-parent="#SVGicons">
                                </figure>
                                <h3 class="h6 font-weight-normal">Premium Design</h3>
                                <p class="small px-3">Our products ensure a consistent, beautiful brand experience.</p>
                            </div>
                        </div>

                        <div class="col-6 col-sm-3">
                            <div class="text-center">
                                <figure class="ie-height-40 w-100 mx-auto mb-3">
                                    <img class="js-svg-injector" src="{{ asset('assets/images/svg/clean-code.svg') }}"
                                        alt="SVG" data-parent="#SVGicons">
                                </figure>
                                <h3 class="h6 font-weight-normal">Clean Code</h3>
                                <p class="small px-3">Our apps are delivered with best code quality and performance.</p>
                            </div>
                        </div>

                        <div class="col-6 col-sm-3">
                            <div class="text-center">
                                <figure class="ie-height-40 w-100 mx-auto mb-3">
                                    <img class="js-svg-injector" src="{{ asset('assets/images/svg/support.svg') }}"
                                        alt="SVG" data-parent="#SVGicons">
                                </figure>
                                <h3 class="h6 font-weight-normal">Get Support</h3>
                                <p class="small px-3">Get fast, professional support through our online community of creators.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection