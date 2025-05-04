@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <style>
        .subscribe {
            background: url(https://sraconstruction.in/images/connectbg.png);
            background-size: cover;
            padding: 0;
        }

        .service-1::before {
            content: "";
            background: url("");
            background-size: cover;
            position: absolute;
            top: 0;
            bottom: 0;
            left: -82px;
            padding: 41px;
        }

        .service-4::after {
            content: "";
            background: url("");
            background-size: cover;
            background-position: right center;
            position: absolute;
            top: 0;
            bottom: 0;
            right: -82px;
            padding: 41px;
        }
    </style>
    <div class="banner-carousel banner-carousel-2 mb-0">
        <div class="banner-carousel-item"
            style="background-image:url(https://sraconstruction.in/images/slider-main/Slider5.jpg)">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text">
                        <div>
                            @if (isset($settings->header_image) and !empty($settings->header_image))
                                <img class="w-50" loading="{{ $settings->app_name }}"
                                    src="{{ public_asset($settings->header_image) }}" alt="{{ $settings->app_name }}">
                            @endif
                        </div>
                        <h1 class="box-slide-sub-title">A COMPANY YOU CAN<br>
                            TRUST TO BE WITH<br>
                            YOU AT EVERY STEP
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item"
            style="background-image:url(https://sraconstruction.in/images/slider-main/Slider4.jpg)">
            <div class="slider-content text-left">
                <div class="container">
                </div>
            </div>
        </div>
        <div class="banner-carousel-item"
            style="background-image:url(https://www.lighthouseriskservices.com/wp-content/uploads/2023/02/pexels-akin-victor-10202865.jpg)">
            <div class="slider-content text-left">
                <div class="container">
                </div>
            </div>
        </div>
        <div class="banner-carousel-item"
            style="background-image:url(https://plus.unsplash.com/premium_photo-1682724602925-f0264b85953f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YnVpbGRpbmclMjBjb25zdHJ1Y3Rpb258ZW58MHx8MHx8fDA%3D)">
            <div class="slider-content text-left">
                <div class="container">
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
            <h2 class="text-center mb-5">TRUSTED BY TOP INDUSTRY ORGANIZATIONS</h2>
            <div class="row">

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="https://sraconstruction.in/images/clients/godrej.png"
                                alt="service-image">
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="mt-3 ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{ public_asset('assets/front/images/lodha.jpg') }}">
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
    </section>
    {{--  --}}

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

                    <p>The {{ $settings->app_name }} company is a top it's not a general contractor special high-rise and
                        special for mivan high-rise building contractors. However, what makes us different
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

                    <p>Construction Mivan Technology LLP is a leading construction company based in Sivan Bihar, delivering
                        high-quality construction solutions since 2025. With a strong foundation in innovation and
                        reliability, we specialize in building structures that reflect excellence, efficiency, and long-term
                        durability.</p>
                    <p>At Construction Mivan Technology LLP, we take pride in crafting buildings with exceptional attention
                        to detail and superior craftsmanship. Our team consists of over 100 qualified and experienced
                        professionals, many of whom have worked together for more than twenty-five years, bringing unmatched
                        synergy, skill, and dedication to every project we undertake.</p>
                    <div class="plan-action mb-2">
                        <a href="{{ route('front.about') }}" class="btn btn-primary float-left mb-2">EXPLORE MORE...</a>
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

    {{-- <section class="content testimonial-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="column-title text-center color-white">CLIENT FEEDBACK</h3>

                    <div id="testimonial-slide" class="testimonial-slide">

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “We are highly satisfied with the quality of work delivered by M/S
                                    {{ $settings->app_name }} Construction.
                                    Their team demonstrated excellent professionalism throughout the execution of our
                                    projects, from the design phase to completion. The steel structure of the bridge and the
                                    construction of our bungalow were completed on time and exceeded our expectations in
                                    terms of craftsmanship and attention to detail. We highly recommend their services for
                                    future projects.”
                                </span>

                                <div class="quote-item-footer">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mr. Rahul Singh (Director)</h3>
                                        <span class="quote-subtext">M/S. Shree Construction Co.</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “We had the pleasure of working with M/S {{ $settings->app_name }} Construction on
                                    several key projects. The
                                    professionalism, attention to detail, and consistent project delivery were impressive.
                                    They ensured that each project was executed in compliance with safety regulations,
                                    quality standards, and timelines. We look forward to collaborating with them on future
                                    developments.”
                                </span>

                                <div class="quote-item-footer">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mr. Ajeet Sharma (Project Manager)</h3>
                                        <span class="quote-subtext">M/S Urban Build Pvt. Ltd.</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “{{ $settings->app_name }} Construction has delivered exceptional service on our
                                    project from start to finish.
                                    Their ability to handle complex tasks and deliver within budget has been remarkable.
                                    We’ve been extremely pleased with their communication, as well as their commitment to
                                    quality work. We highly recommend them for any construction-related needs.”
                                </span>

                                <div class="quote-item-footer">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mr. Vikram Soni (Managing Director)</h3>
                                        <span class="quote-subtext">M/S Techbuild Solutions</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                    </div>
                </div><!-- Col end -->
            </div>
        </div>
    </section> --}}

    <section class="content testimonial-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="column-title text-center color-white">CLIENT FEEDBACK</h3>

                    <div id="testimonial-slide" class="testimonial-slide">

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “We are highly satisfied with the quality of work delivered by M/S
                                    {{ $settings->app_name }} Construction.
                                    Their team demonstrated excellent professionalism throughout the execution of our
                                    projects, from the design phase to completion. The steel structure of the bridge and the
                                    construction of our bungalow were completed on time and exceeded our expectations in
                                    terms of craftsmanship and attention to detail. We highly recommend their services for
                                    future projects.”
                                </span>

                                <div class="quote-item-footer">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Dr.Deepak Gupta</h3>
                                        {{-- <span class="quote-subtext">M/S. Apex Engineering</span> --}}
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “We had the pleasure of working with M/S {{ $settings->app_name }} Construction on
                                    several key projects. The
                                    professionalism, attention to detail, and consistent project delivery were impressive.
                                    They ensured that each project was executed in compliance with safety regulations,
                                    quality standards, and timelines. We look forward to collaborating with them on future
                                    developments.”
                                </span>

                                <div class="quote-item-footer">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mohit Tiwari</h3>
                                        {{-- <span class="quote-subtext">M/S BuildTech Ltd.</span> --}}
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “{{ $settings->app_name }} Construction has delivered exceptional service on our
                                    project from start to finish.
                                    Their ability to handle complex tasks and deliver within budget has been remarkable.
                                    We’ve been extremely pleased with their communication, as well as their commitment to
                                    quality work. We highly recommend them for any construction-related needs.”
                                </span>

                                <div class="quote-item-footer">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Ankit Singh</h3>
                                        {{-- <span class="quote-subtext">M/S Greenfield Construction</span> --}}
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>

                    </div>
                </div><!-- Col end -->
            </div>
        </div>
    </section>


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
                        {{-- <div class="row shuffle-wrapper">
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

                        </div><!-- shuffle end --> --}}
                        <div class="row shuffle-wrapper shuffle"
                            style="position: relative; overflow: hidden; height: 273.6px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1);">
                            <div class="col-1 shuffle-sizer"></div>

                            <div class="col-lg-4 col-sm-6 shuffle-item shuffle-item--visible"
                                data-groups="[&quot;government&quot;,&quot;healthcare&quot;]"
                                style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                                <div class="project-img-container">
                                    <a class="gallery-popup cboxElement"
                                        href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0024.jpg') }}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0024.jpg') }}"
                                            alt="project-img">

                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a class="gallery-popup cboxElement"
                                                    href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0024.jpg') }}"
                                                    aria-label="project-img">Project Building</a>
                                            </h3>
                                            <!-- <p class="project-cat">Commercial, Interiors</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 shuffle-item shuffle-item--visible"
                                data-groups="[&quot;government&quot;,&quot;healthcare&quot;]"
                                style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(380px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                                <div class="project-img-container">
                                    <a class="gallery-popup cboxElement"
                                        href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0012.jpg') }}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0012.jpg') }}"
                                            alt="project-img">

                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a class="gallery-popup cboxElement"
                                                    href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0012.jpg') }}"
                                                    aria-label="project-img">Project Building</a>
                                            </h3>
                                            <!-- <p class="project-cat">Commercial, Interiors</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 shuffle-item shuffle-item--visible"
                                data-groups="[&quot;government&quot;,&quot;healthcare&quot;]"
                                style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(760px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                                <div class="project-img-container">
                                    <a class="gallery-popup cboxElement"
                                        href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0022.jpg') }}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0022.jpg') }}"
                                            alt="project-img">

                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a class="gallery-popup cboxElement"
                                                    href="{{ public_asset('assets/front/images/gallery/IMG-20250201-WA0022.jpg') }}"
                                                    aria-label="project-img">Project Building</a>
                                            </h3>
                                            <!-- <p class="project-cat">Commercial, Interiors</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
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
