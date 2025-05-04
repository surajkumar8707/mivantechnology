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
                        <p>Construction Mivan Technology LLP, we specialize in delivering high-quality commercial and residential projects using advanced Mivan shuttering technology. Our focus is on creating robust, aesthetically appealing, and future-ready spaces that meet the growing demands of urban infrastructure and modern living.</p>
                        <p>For residential projects, we offer fast-paced construction of apartments, villas, and high-rise towers with superior finish and durability. Mivan technology allows us to deliver seamless monolithic concrete structures, which ensures uniform strength, crack-free surfaces, and faster project completion. Whether it's affordable housing or premium developments, we deliver homes that are safe, sustainable, and built to last.</p>
                    </div>
                    <div class="col-lg-6 single-service-image1" data-aos="fade-left">
                    </div>
                </div>
                <div class="row single-service-gap">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 single-service-info" data-aos="fade-right">
                        <h1>Industrial</h1>
                        <p>Technology LLP is a trusted name in the execution of high-quality industrial construction projects, delivering robust, efficient, and future-ready infrastructure for manufacturing, logistics, and warehousing sectors. With the use of advanced Mivan shuttering technology, we bring speed, strength, and precision to industrial development like never before.</p>

                        <p>Our expertise lies in building industrial facilities such as factories, processing plants, assembly units, storage facilities, and industrial parks with a focus on rapid execution and long-term performance. Mivan technology allows us to construct monolithic concrete structures that are not only durable but also resistant to heavy loads, vibrations, and environmental stress—key requirements in any industrial environment.</p>
                    </div>
                    <div class="col-lg-6 single-service-image2" data-aos="fade-left">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 single-service-info" data-aos="fade-right">
                        <h1>Tensioning</h1>
                        <p>Construction Mivan Technology LLP is committed to contributing to the nation’s progress through the development of world-class infrastructure projects. By leveraging cutting-edge Mivan construction technology, we deliver faster, stronger, and more reliable infrastructure solutions that meet the growing demands of modern urban and rural development.</p>

                        <p>Our expertise spans across a wide range of infrastructure segments, including roads and highways, bridges, flyovers, urban transport systems, drainage networks, water treatment plants, and public utility buildings. Mivan technology, with its monolithic concrete structure and aluminum formwork system, allows us to deliver projects with superior strength, speed, and precision. This ensures reduced construction time, lower labor dependency, and enhanced durability—making it an ideal choice for large-scale infrastructure works.</p>

                    </div>
                    <div class="col-lg-6 single-service-image3" data-aos="fade-left">
                    </div>
                </div>

                <div class="row single-service-gap">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 single-service-info" data-aos="fade-right">
                        <h1>River front</h1>
                        <p>At Construction Mivan Technology LLP, we take pride in being a part of transformative riverfront development projects that enhance urban aesthetics, environmental sustainability, and public engagement. Utilizing modern Mivan construction technology, we offer innovative and efficient solutions for building resilient and visually appealing riverfront infrastructures.</p>

                        <p>Riverfront development is more than just beautification—it is about reviving natural assets, preventing erosion, managing flood risks, and creating vibrant public spaces. With our expertise, we construct retaining walls, promenades, walkways, ghats, parks, seating areas, and utility infrastructure that blend functionality with architectural elegance. Mivan technology allows us to build strong, monolithic structures with high precision and speed, ensuring timely project completion even in challenging site conditions.</p>

                    </div>
                    <div class="col-lg-6 single-service-image4" data-aos="fade-left">
                        <!-- <img src="images/services/commercial.jpg"  alt=""> -->
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
