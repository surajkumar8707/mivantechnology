@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Home Page')
@section('content')
    <div class="banner-carousel banner-carousel-2 mb-0">
        <div class="banner-carousel-item"
            style="background-image:url({{ public_asset('assets/front/images/IMG-20250201-WA0016.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text">
                        <!-- <h2 class="box-slide-title">17 Years Of Excellence In</h2> -->
                        <h1 class="box-slide-sub-title">A COMPANY YOU CAN<br>
                            TRUST TO BE WITH<br>
                            YOU AT EVERY STEP
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item"
            style="background-image:url({{ public_asset('assets/front/images/IMG-20250201-WA0019.jpg') }})">
            <div class="slider-content text-left">
                <div class="container">
                </div>
            </div>
        </div>
    </div>

    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-12 text-center text-md-center">
                        <div class="call-to-action-text">
                            <h3 class="action-title">For Services Related Queries! Call Us Now: +91-7977467819</h3>
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
                            <a href="services.html">
                                <h2>Commercial/Residential
                                    <img src="https://sraconstruction.in/images/arrow.png" width="25" alt="">
                                </h2>
                            </a>


                        </div>
                    </div>

                    <div class="service-box service-2">
                        <div class="service-overlay text-center">
                            <a href="services.html">
                                <h2>Industrial
                                    <img src="https://sraconstruction.in/images/arrow.png" width="25" alt="">
                                </h2>
                            </a>


                        </div>
                    </div>

                    <div class="service-box service-3">
                        <div class="service-overlay text-center">
                            <a href="services.html">
                                <h2>Infrastructure
                                    <img src="https://sraconstruction.in/images/arrow.png" width="25" alt="">
                                </h2>
                            </a>


                        </div>
                    </div>

                    <div class="service-box service-4">
                        <div class="service-overlay text-center">
                            <a href="services.html">
                                <h2>River Front Development
                                    <img src="https://sraconstruction.in/images/arrow.png" width="25" alt="">
                                </h2>
                            </a>


                        </div>
                    </div>

                </div><!-- Col end -->

                <div class="col-lg-5 about-section">
                    <h3 class="column-title">A COMPANY YOU CAN<br> TRUST TO BE WITH YOU<br> AT EVERY STEP</h3>

                    <p>The SRA Construction company is a top general contractor. However, what makes us different
                        from our competitors is our commitment to safety, operational excellence, and an exceptional
                        client experience. We work collaboratively with you to reach your objectives. By hiring the
                        industry's best, we build the highest-performing teams; we are adept at working with design
                        teams; we are experts at understanding the needs of the end-user, and we deliver projects
                        ahead of schedule without compromising quality." We cover all Commercial/ residential,
                        Industrial, Infrastructure & River front development projects.
                    </p>
                    <div class="plan-action">
                        <a href="services.html" class="btn btn-primary float-right">EXPLORE MORE...</a>
                    </div>
                </div><!-- Col end -->

            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->

    <section id="main-container" class="main-container about-section2-img">
        <div class="container-fluid">
            <div class="row about-section-bg">
                <div class="col-lg-7 mt-lg-0 about-section-img">

                    <img src="https://sraconstruction.in/images/aboutimage.png" alt="">

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
                        <a href="about.html" class="btn btn-primary float-left">EXPLORE MORE...</a>
                    </div>
                </div><!-- Col end -->

            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->

    <section class="content testimonial-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="column-title text-center color-white">OUR CLIENT'S RESPONSES</h3>

                    <div id="testimonial-slide" class="testimonial-slide">

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    “It is certified that the works under M/S SRA Construction which include Steel
                                    structure work of bridge in the premises, civil and allied works of fire-lifts,
                                    infra-works at ground floor, civil and allied works of Bungalow-58 from plinth
                                    to LMR including RCC, plaster and waterproofing have been satisfactorily
                                    completed; that all charges or bills for labour or services performed or
                                    materials furnished, and other charges against the subcontractors, have been
                                    paid in full and in accordance with the terms of the contract as per our
                                    information.
                                    During the execution period from 2014 to 2022 (till date, 15th January,2022),
                                    the approach and behaviors of the staffs and owners have been excellent.
                                    Our best wishes to SRA Construction for future endeavors.”
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
                                    “This letter serves as our endorsement for M/s SRA Constructions. Since the
                                    commencement of awarded works in August 2021, the progress, quality control and
                                    overall project management have been impressive and it has achieved milestones
                                    as planned. The cordination amongst staffs, higher management and with ourselves
                                    may be rated very good. M/S SRA Constructions has so far managed all the
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
    </section><!-- Content end -->



    <section id="project-area" class="project-area solid-bg">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">

                    <h3 class="section-sub-title">PROJECTS GALLERY</h3>
                </div>
                <div class="col-lg-5">
                    <div class="general-btn text-center">
                        <a class="btn btn-primary" href="gallery.html">VIEW ALL...</a>
                    </div>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-12">
                    <!-- project filter end -->
                    <div class="row shuffle-wrapper">
                        <div class="col-1 shuffle-sizer"></div>

                        <div class="col-lg-4 col-sm-6 shuffle-item"
                            data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="images/gallery/buildingconstruction.jpg"
                                    aria-label="project-img">
                                    <img class="img-fluid"
                                        src="https://sraconstruction.in/images/gallery/buildingconstruction.jpg"
                                        alt="project-img">

                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a class="gallery-popup" href="images/gallery/buildingconstruction.jpg"
                                                aria-label="project-img">BUILDING
                                                CONSTRUCTION</a>
                                        </h3>
                                        <!-- <p class="project-cat">Commercial, Interiors</p> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 1 end -->

                        <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="images/gallery/foundationconstruction.jpg"
                                    aria-label="project-img">
                                    <img class="img-fluid"
                                        src="https://sraconstruction.in/images/gallery/foundationconstruction.jpg"
                                        alt="project-img">

                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a class="gallery-popup" href="images/gallery/foundationconstruction.jpg"
                                                aria-label="project-img">FOUNDATION
                                                CONSTRUCTION</a>
                                        </h3>
                                        <!-- <p class="project-cat">Healthcare</p> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 2 end -->

                        <div class="col-lg-4 col-sm-6 shuffle-item"
                            data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="images/gallery/liftconstruction.jpg"
                                    aria-label="project-img">
                                    <img class="img-fluid"
                                        src="https://sraconstruction.in/images/gallery/liftconstruction.jpg"
                                        alt="project-img">

                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a class="gallery-popup" href="images/gallery/liftconstruction.jpg"
                                                aria-label="project-img">LIFT
                                                CONSTRUCTION</a>
                                        </h3>
                                        <!-- <p class="project-cat">Government</p> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 3 end -->


                    </div><!-- shuffle end -->
                </div>



            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Project area end -->


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
                            <a class="btn btn-primary" href="contact.html">CONNECT WITH US</a>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Content row end -->
            </div><!--/ Container end -->
        </div>
    </section>
    <!--/ subscribe end -->
@endsection
