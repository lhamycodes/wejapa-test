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

    </div>
</main>
@endsection