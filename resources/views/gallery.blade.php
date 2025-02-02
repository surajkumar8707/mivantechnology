@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Gallery Page')
@section('content')

    <div id="banner-area" class="banner-area1" style="background-image:url(images/design.png);background-color:#3f1d71 ;">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <!-- <nav aria-label="breadcrumb">
                          <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">About Us</a></li>
                          </ol>
                      </nav> -->
                            <h1 class="banner-title">Our Gallery</h1>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->


    <section id="project-area" class="project-area solid-bg single-service-gap">
        <div class="container">

            <!--/ Title row end -->

            <div class="row">

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0020.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0020.jpg') }}" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0018.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0018.jpg') }}" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0023.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0023.jpg') }}" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0022.jpg') }}" class="fancybox" rel="ligthbox">
                        <img src="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0022.jpg') }}" class="zoom img-fluid " alt="">
                    </a>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/5.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/5.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/6.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/6.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/7.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/7.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/8.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/8.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/9.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/9.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/10.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/10.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/11.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/11.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/12.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/12.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/13.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/13.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/14.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/14.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/15.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/15.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/16.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/16.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/17.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/17.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/18.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/18.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/19.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/19.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/20.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/20.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/21.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/21.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/22.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/22.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/23.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/23.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/24.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/24.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/25.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/25.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="https://sraconstruction.in/images/gallery/26.jpeg" class="fancybox" rel="ligthbox">
                        <img src="https://sraconstruction.in/images/gallery/26.jpeg" class="zoom img-fluid " alt="">
                    </a>
                </div> --}}



            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Project area end -->


@endsection
