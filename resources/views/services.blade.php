@extends('layouts.app')
@section('content')
    <style>
        .service-header {
            padding-top: 5%;
            padding-bottom: 15%;
            background: url(https://sraconstruction.in/images/design.png), #3f1d71;
            color: #ffffff;
        }

        .single-service-image1 {
            background: url(https://media.istockphoto.com/id/488120139/photo/modern-real-estate.jpg?s=612x612&w=0&k=20&c=88jk1VLSoYboMmLUx173sHs_XrZ9pH21as8lC7WINQs=);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .single-service-image2 {
            background: url(https://images.pexels.com/photos/247763/pexels-photo-247763.jpeg?cs=srgb&dl=pexels-pixabay-247763.jpg&fm=jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .single-service-image3 {
            background: url(https://www.letsbuild.com/wp-content/uploads/2023/07/types-of-infrastructure.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .single-service-image4 {
            background: url(https://sceneloc8.com/wp-content/uploads/2024/03/4-64.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>
    <div>
        <section class="service-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right">
                        <h1>OUR SERVICES</h1>
                        <h2>Quality Services
                            From a Team you
                            can Trust</h2>
                    </div>
                    <div class="col-lg-7" data-aos="fade-left">
                        <p>The {{ $settings->app_name }} company is a top general contractor. However, what makes us
                            different from
                            our competitors is our commitment to safety, operational excellence, and an exceptional client
                            experience. We work collaboratively with you to reach your objectives. By hiring the industry's
                            best, we build the highest-performing teams; we are adept at working with design teams; we are
                            experts at understanding the needs of the end-user, and we deliver projects ahead of schedule
                            without compromising quality.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="single-service">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 single-service-info" data-aos="fade-right">
                        <h1>Commercial / Residential</h1>
                        <p>Construction Mivan Technology LLP, we specialize in delivering high-quality commercial and
                            residential projects using advanced Mivan shuttering technology. Our focus is on creating
                            robust, aesthetically appealing, and future-ready spaces that meet the growing demands of urban
                            infrastructure and modern living.</p>

                        <p>For residential projects, we offer fast-paced construction of apartments, villas, and high-rise
                            towers with superior finish and durability. Mivan technology allows us to deliver seamless
                            monolithic concrete structures, which ensures uniform strength, crack-free surfaces, and faster
                            project completion.</p>
                    </div>
                    <div class="col-lg-6 single-service-image1" data-aos="fade-left">
                    </div>
                </div>
                <div class="row single-service-gap">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 single-service-info" data-aos="fade-right">
                        <h1>Industrial</h1>
                        <p>Construction Mivan Technology LLP, we specialize in delivering high-quality commercial and
                            residential projects using advanced Mivan shuttering technology. Our focus is on creating
                            robust, aesthetically appealing, and future-ready spaces that meet the growing demands of urban
                            infrastructure and modern living.</p>

                        <p>For residential projects, we offer fast-paced construction of apartments, villas, and high-rise
                            towers with superior finish and durability. Mivan technology allows us to deliver seamless
                            monolithic concrete structures, which ensures uniform strength, crack-free surfaces, and faster
                            project completion.</p>
                    </div>
                    <div class="col-lg-6 single-service-image2" data-aos="fade-left">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 single-service-info" data-aos="fade-right">
                        <h1>Infrastructure</h1>
                        <p>Construction Mivan Technology LLP, we specialize in delivering high-quality commercial and
                            residential projects using advanced Mivan shuttering technology. Our focus is on creating
                            robust, aesthetically appealing, and future-ready spaces that meet the growing demands of urban
                            infrastructure and modern living.</p>

                        <p>For residential projects, we offer fast-paced construction of apartments, villas, and high-rise
                            towers with superior finish and durability. Mivan technology allows us to deliver seamless
                            monolithic concrete structures, which ensures uniform strength, crack-free surfaces, and faster
                            project completion.</p>

                    </div>
                    <div class="col-lg-6 single-service-image3" data-aos="fade-left">
                    </div>
                </div>

                <div class="row single-service-gap">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 single-service-info" data-aos="fade-right">
                        <h1>River front</h1>
                        <p>Construction Mivan Technology LLP, we specialize in delivering high-quality commercial and
                            residential projects using advanced Mivan shuttering technology. Our focus is on creating
                            robust, aesthetically appealing, and future-ready spaces that meet the growing demands of urban
                            infrastructure and modern living.</p>

                        <p>For residential projects, we offer fast-paced construction of apartments, villas, and high-rise
                            towers with superior finish and durability. Mivan technology allows us to deliver seamless
                            monolithic concrete structures, which ensures uniform strength, crack-free surfaces, and faster
                            project completion.</p>

                    </div>
                    <div class="col-lg-6 single-service-image4" data-aos="fade-left">
                        <!-- <img src="images/services/commercial.jpg"  alt=""> -->
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
