@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <style>
        .subscribe {
            background: url(https://sraconstruction.in/images/connectbg.png);
            background-size: cover;
            padding: 0;
        }
    </style>
    <div class="banner-carousel banner-carousel-2 mb-0">
        <div class="banner-carousel-item"
            style="background-image:url(https://sraconstruction.in/images/slider-main/Slider5.jpg)">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text">
                        <!-- <h2 class="box-slide-title">17 Years Of Excellence In</h2> -->
                        <h1 class="box-slide-sub-title">A COMPANY YOU CAN<br>
                            TRUST TO BE WITH<br>
                            YOU AT EVERY STEP
                        </h1>
                        <!-- <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
                         thinking team looking for talent like.</p> -->
                        <!-- <p>
                         <a href="services.html" class="slider btn btn-primary">Our Service</a>
                       </p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item"
            style="background-image:url(https://sraconstruction.in/images/slider-main/Slider4.jpg)">
            <div class="slider-content text-left">
                <div class="container">
                    <!-- <div class="box-slider-content">
                        <div class="box-slider-text">
                          <h2 class="box-slide-title">When Services Matters</h2>
                          <h3 class="box-slide-sub-title">Your Choice is Simple</h3>
                          <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
                              thinking team looking for talent like.</p>
                          <p><a href="about.html" class="slider btn btn-primary" aria-label="about-us">Know Us</a></p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="banner-carousel banner-carousel-2 mb-0 slick-initialized slick-slider"><button type="button"
            class="carousel-control left slick-arrow" aria-label="carousel-control" style=""><i
                class="fas fa-chevron-left"></i></button>
        <div class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 3040px;">
                <div class="banner-carousel-item slick-slide slick-current slick-active"
                    style="background-image: url(https://sraconstruction.in/images/slider-main/Slider5.jpg); width: 1520px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 600ms;"
                    data-slick-index="0" aria-hidden="false" tabindex="-1">
                    <div class="container">
                        <div class="box-slider-content">
                            <div class="box-slider-text">
                                <!-- <h2 class="box-slide-title">17 Years Of Excellence In</h2> -->
                                <h1 class="box-slide-sub-title">A COMPANY YOU CAN<br>
                                    TRUST TO BE WITH<br>
                                    YOU AT EVERY STEP
                                </h1>
                                <!-- <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
                   thinking team looking for talent like.</p> -->
                                <!-- <p>
                   <a href="services.html" class="slider btn btn-primary">Our Service</a>
                 </p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-carousel-item slick-slide"
                    style="background-image: url(https://sraconstruction.in/images/slider-main/Slider4.jpg); width: 1520px; position: relative; left: -1520px; top: 0px; z-index: 998; opacity: 0; transition: opacity 600ms;"
                    data-slick-index="1" aria-hidden="true" tabindex="0">
                    <div class="slider-content text-left">
                        <div class="container">
                            <!-- <div class="box-slider-content">
                  <div class="box-slider-text">
                    <h2 class="box-slide-title">When Services Matters</h2>
                    <h3 class="box-slide-sub-title">Your Choice is Simple</h3>
                    <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
                        thinking team looking for talent like.</p>
                    <p><a href="about.html" class="slider btn btn-primary" aria-label="about-us">Know Us</a></p>
                  </div>
              </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <button type="button" class="carousel-control right slick-arrow" aria-label="carousel-control" style=""><i
                class="fas fa-chevron-right"></i></button>
    </div> --}}

    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-12 text-center text-md-center">
                        <div class="call-to-action-text">
                            <h3 class="action-title">For Services Related Queries! Call Us Now: +91-{{ $settings->contact }}
                            </h3>
                        </div>
                    </div><!-- Col end -->

                </div><!-- row end -->
            </div><!-- Action style box -->
        </div><!-- Container end -->
    </section><!-- Action end -->

    <section id="ts-features" class="ts-features pb-2">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 mb-5">
                    <h2>TRUSTED BY<br> TOP INDUSTRY<br> ORGANIZATIONS</h2>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="https://sraconstruction.in/images/clients/godrej.png"
                                alt="service-image">
                        </div>

                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="https://sraconstruction.in/images/clients/sitaram.png"
                                alt="service-image">
                        </div>

                    </div><!-- Service2 end -->
                </div><!-- Col 2 end -->

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100"
                                src="https://sraconstruction.in/images/clients/t-bhimjyani.png" alt="service-image">
                        </div>

                    </div><!-- Service3 end -->
                </div><!-- Col 3 end -->

            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 align-content-center mt-lg-0">

                    <div class="service-box service-1">
                        <div class="service-overlay text-center">
                            <a href="{{ route('front.services') }}">
                                <h2>Commercial/Residential
                                    <img src="https://sraconstruction.in/images/arrow.png" width="25" alt="">
                                </h2>
                            </a>


                        </div>
                    </div>

                    <div class="service-box service-2">
                        <div class="service-overlay text-center">
                            <a href="{{ route('front.services') }}">
                                <h2>Industrial
                                    <img src="https://sraconstruction.in/images/arrow.png" width="25" alt="">
                                </h2>
                            </a>


                        </div>
                    </div>

                    <div class="service-box service-3">
                        <div class="service-overlay text-center">
                            <a href="{{ route('front.services') }}">
                                <h2>Infrastructure
                                    <img src="https://sraconstruction.in/images/arrow.png" width="25" alt="">
                                </h2>
                            </a>


                        </div>
                    </div>

                    <div class="service-box service-4">
                        <div class="service-overlay text-center">
                            <a href="{{ route('front.services') }}">
                                <h2>River Front Development
                                    <img src="https://sraconstruction.in/images/arrow.png" width="25" alt="">
                                </h2>
                            </a>


                        </div>
                    </div>

                </div><!-- Col end -->

                <div class="col-lg-5 about-section">
                    <h3 class="column-title">A COMPANY YOU CAN<br> TRUST TO BE WITH YOU<br> AT EVERY STEP</h3>

                    <p>The {{ $settings->app_name }} company is a top general contractor. However, what makes us different
                        from our competitors is our commitment to safety, operational excellence, and an exceptional
                        client experience. We work collaboratively with you to reach your objectives. By hiring the
                        industry's best, we build the highest-performing teams; we are adept at working with design
                        teams; we are experts at understanding the needs of the end-user, and we deliver projects
                        ahead of schedule without compromising quality." We cover all Commercial/ residential,
                        Industrial, Infrastructure & River front development projects.
                    </p>
                    <div class="plan-action">
                        <a href="{{ route('front.services') }}" class="btn btn-primary float-right">EXPLORE MORE...</a>
                    </div>
                </div><!-- Col end -->

            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->

    <section id="main-container" class="main-container about-section2-img">
        <div class="container-fluid">
            <div class="row about-section-bg">
                <div class="col-lg-7 mt-lg-0 about-section-img">

                    <img src="{{ public_asset('assets/front/images/aboutimage.jpg') }}" alt="">

                </div><!-- Col end -->

                <div class="col-lg-5 about-section2">
                    <h3 class="column-title">THE QUALITY & <br>
                        REPUTATION TO GET <br>
                        THE JOB DONE RIGHT<br></h3>

                    <p>We are a construction company located in Vashi, Navi Mumbai, delivering construction
                        solutions since 2019. We provide our customers with quality buildings that are constructed
                        with great craftsmanship. We employ over 100 qualified and experienced employees, many of
                        whom have worked together for more than Twenty five years.
                    </p>
                    <div class="plan-action">
                        <a href="{{ route('front.about') }}" class="btn btn-primary float-left">EXPLORE MORE...</a>
                    </div>
                </div><!-- Col end -->

            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->

    {{-- <section class="content testimonial-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="column-title text-center color-white">OUR CLIENT'S RESPONSES</h3>

                    <div id="testimonial-slide" class="testimonial-slide">

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “It is certified that the works under M/S {{ $settings->app_name }} which include Steel
                                    structure work of bridge in the premises, civil and allied works of fire-lifts,
                                    infra-works at ground floor, civil and allied works of Bungalow-58 from plinth
                                    to LMR including RCC, plaster and waterproofing have been satisfactorily
                                    completed; that all charges or bills for labour or services performed or
                                    materials furnished, and other charges against the subcontractors, have been
                                    paid in full and in accordance with the terms of the contract as per our
                                    information.
                                    During the execution period from 2014 to 2022 (till date, 15th January,2022),
                                    the approach and behaviors of the staffs and owners have been excellent.
                                    Our best wishes to {{ $settings->app_name }} for future endeavors.”
                                </span>

                                <div class="quote-item-footer">
                                    <!-- <img loading="lazy" class="testimonial-thumb" src="https://sraconstruction.in/images/clients/testimonial1.png" alt="testimonial"> -->
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mr. Narottam Kumar (V.P)</h3>
                                        <span class="quote-subtext">M/S. T. Bhimjiyani Reality</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “This letter serves as our endorsement for M/s {{ $settings->app_name }}s. Since the
                                    commencement of awarded works in August 2021, the progress, quality control and
                                    overall project management have been impressive and it has achieved milestones
                                    as planned. The cordination amongst staffs, higher management and with ourselves
                                    may be rated very good. M/S {{ $settings->app_name }}s has so far managed all the
                                    construction activities, site management and other issues prudently.
                                    We wish all the best for it's future endeavors.”
                                </span>

                                <div class="quote-item-footer">
                                    <!-- <img loading="lazy" class="testimonial-thumb" src="https://sraconstruction.in/images/clients/testimonial1.png" alt="testimonial"> -->
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mr. Pawan Kumar ( Sr. Manager )</h3>
                                        <span class="quote-subtext">M/S Reliance, Rabale, Navi Mumbai</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                    </div>
                </div><!-- Col end -->
            </div>
        </div>
    </section><!-- Content end --> --}}

    <section class="content testimonial-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="column-title text-center color-white">OUR CLIENT'S RESPONSES</h3>

                    <div id="testimonial-slide" class="testimonial-slide">

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “It is certified that the works under M/S SRA Construction which include Steel structure
                                    work of bridge in the premises, civil and allied works of fire-lifts, infra-works at
                                    ground floor, civil and allied works of Bungalow-58 from plinth to LMR including RCC,
                                    plaster and waterproofing have been satisfactorily completed; that all charges or bills
                                    for labour or services performed or materials furnished, and other charges against the
                                    subcontractors, have been paid in full and in accordance with the terms of the contract
                                    as per our information.
                                    During the execution period from 2014 to 2022 (till date, 15th January,2022), the
                                    approach and behaviors of the staffs and owners have been excellent.
                                    Our best wishes to SRA Construction for future endeavors.”
                                </span>

                                <div class="quote-item-footer">
                                    <!-- <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial"> -->
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mr. Narottam Kumar (V.P)</h3>
                                        <span class="quote-subtext">M/S. T. Bhimjiyani Reality</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “This letter serves as our endorsement for M/s SRA Constructions. Since the commencement
                                    of awarded works in August 2021, the progress, quality control and overall project
                                    management have been impressive and it has achieved milestones as planned. The
                                    cordination amongst staffs, higher management and with ourselves may be rated very good.
                                    M/S SRA Constructions has so far managed all the construction activities, site
                                    management and other issues prudently.
                                    We wish all the best for it's future endeavors.”
                                </span>

                                <div class="quote-item-footer">
                                    <!-- <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial"> -->
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mr. Pawan Kumar ( Sr. Manager )</h3>
                                        <span class="quote-subtext">M/S Reliance, Rabale, Navi Mumbai</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                        <!-- <div class="item">
                          <div class="quote-item">
                              <span class="quote-text">
                                “They did an excellent job. It looks great! It only took one day,
                                  and the SRA Construction did an excellent job... I highly
                                  recommend them if you want a professional job done right.”
                              </span>

                              <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Weldon Cash</h3>
                                     <span class="quote-subtext">CFO, First Choice</span>
                                </div>
                              </div>
                          </div>Quote item end
                        </div> -->

                        <!-- <div class="item">
                          <div class="quote-item">
                              <span class="quote-text">
                                “They did an excellent job. It looks great! It only took one day,
                                  and the SRA Construction did an excellent job... I highly
                                  recommend them if you want a professional job done right.”
                              </span>

                              <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Minter Puchan</h3>
                                     <span class="quote-subtext">Director, AKT</span>
                                </div>
                              </div>
                          </div>Quote item end
                        </div> -->

                    </div>
                </div><!-- Col end -->
            </div>
        </div>
    </section><!-- Content end -->



    @if (count($galleries) > 0)
        <section id="project-area" class="project-area solid-bg">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-7">

                        <h3 class="section-sub-title">PROJECTS GALLERY</h3>
                    </div>
                    <div class="col-lg-5">
                        <div class="general-btn text-center">
                            <a class="btn btn-primary" href="{{ route('front.gallery') }}">VIEW ALL...</a>
                        </div>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-12">
                        <!-- project filter end -->
                        <div class="row shuffle-wrapper">
                            <div class="col-1 shuffle-sizer"></div>

                            @foreach ($galleries as $gallery)
                                <div class="col-lg-4 col-sm-6 shuffle-item"
                                    data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                                    <div class="project-img-container">
                                        <a class="gallery-popup" href="{{ public_asset($gallery->image) }}"
                                            aria-label="project-img">
                                            <img class="img-fluid" src="{{ public_asset($gallery->image) }}"
                                                alt="project-img">

                                        </a>
                                        <div class="project-item-info">
                                            <div class="project-item-info-content">
                                                <h3 class="project-item-title">
                                                    <a class="gallery-popup" href="{{ public_asset($gallery->image) }}"
                                                        aria-label="project-img">{{ $gallery->title }}</a>
                                                </h3>
                                                <!-- <p class="project-cat">Commercial, Interiors</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div><!-- shuffle end -->
                    </div>



                </div><!-- Content row end -->
            </div>
            <!--/ Container end -->
        </section>
    @endif


    <section class="subscribe no-padding">
        <div class="overlay-yellow">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>
                            HAVE THE HOME THAT YOU<br>
                            AND YOUR FAMILY DESERVE
                        </h2>
                        <p>
                            We value collaboration and your input. The more we discuss upfront in<br>
                            regards to your home's needs, the better the finished project will be

                        </p>
                        <div class="general-btn text-center">
                            <a class="btn btn-primary" href="{{ route('front.contact') }}">CONNECT WITH US</a>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Content row end -->
            </div><!--/ Container end -->
        </div>
    </section>
    <!--/ subscribe end -->
@endsection
