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
                            without compromising quality." We cover all Commercial/ residential, Industrial, Infrastructure
                            & River front development projects
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
                            project completion. Whether it's affordable housing or premium developments, we deliver homes
                            that are safe, sustainable, and built to last.</p>

                        <p>In the commercial sector, we construct office complexes, business parks, retail centers, and
                            mixed-use developments with a focus on structural integrity and space efficiency. The
                            flexibility of Mivan technology allows us to accommodate complex layouts and architectural
                            designs while maintaining rapid construction speed. Our commercial spaces are engineered for
                            longevity, with minimal maintenance and maximum utility.</p>

                        <p>Each project is executed with strict adherence to quality standards, safety protocols, and
                            eco-friendly practices. Our experienced team ensures timely delivery without compromising on
                            construction excellence. By integrating advanced engineering solutions, we help clients reduce
                            costs, optimize space, and achieve long-term value.</p>

                        <p>Construction Mivan Technology LLP is proud to support India’s vision for smart, sustainable urban
                            growth. With every residential and commercial project, we aim to build more than just
                            structures—we create lifestyles, workspaces, and communities designed for the future.</p>

                        {{-- <p>
                            Guided by our purpose of Building a Better Way, our approach begins with the end in mind.
                            To deliver results that exceed our customers' expectations, we use every tool in our toolbox,
                            whether it's a large, complex project or a small job. The role we play in the building process
                            helps simplify its complexity, from conceptualization to ongoing operation. Our company has
                            extensive experience in a variety of market sectors. </p>
                        <p>Our clients have capitalized on our knowledge
                            that continues to transcend to meet the evolving work of construction. Innovation and
                            adaptability
                            are important to us, and we take pride in being able to meet our clients' needs. We can
                            therefore
                            build a project that meets your expectations using a variety of delivery methods.
                        </p> --}}

                    </div>
                    <div class="col-lg-6 single-service-image1" data-aos="fade-left">
                        <!-- <img src="images/services/commercial.jpg"  alt=""> -->
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
                            project completion. Whether it's affordable housing or premium developments, we deliver homes
                            that are safe, sustainable, and built to last.</p>

                        <p>In the commercial sector, we construct office complexes, business parks, retail centers, and
                            mixed-use developments with a focus on structural integrity and space efficiency. The
                            flexibility of Mivan technology allows us to accommodate complex layouts and architectural
                            designs while maintaining rapid construction speed. Our commercial spaces are engineered for
                            longevity, with minimal maintenance and maximum utility.</p>

                        <p>Each project is executed with strict adherence to quality standards, safety protocols, and
                            eco-friendly practices. Our experienced team ensures timely delivery without compromising on
                            construction excellence. By integrating advanced engineering solutions, we help clients reduce
                            costs, optimize space, and achieve long-term value.</p>

                        <p>Construction Mivan Technology LLP is proud to support India’s vision for smart, sustainable urban
                            growth. With every residential and commercial project, we aim to build more than just
                            structures—we create lifestyles, workspaces, and communities designed for the future.</p>

                        <p>Technology LLP is a trusted name in the execution of high-quality industrial construction
                            projects, delivering robust, efficient, and future-ready infrastructure for manufacturing,
                            logistics, and warehousing sectors. With the use of advanced Mivan shuttering technology, we
                            bring speed, strength, and precision to industrial development like never before.</p>

                        <p>Our expertise lies in building industrial facilities such as factories, processing plants,
                            assembly units, storage facilities, and industrial parks with a focus on rapid execution and
                            long-term performance. Mivan technology allows us to construct monolithic concrete structures
                            that are not only durable but also resistant to heavy loads, vibrations, and environmental
                            stress—key requirements in any industrial environment.</p>

                        <p>We understand the critical importance of time, safety, and operational efficiency in industrial
                            projects. Our team of skilled engineers and project managers works in close coordination with
                            clients to ensure all structures meet exact industry specifications and are completed within
                            tight deadlines. By minimizing joints and using aluminum formwork, we reduce construction time
                            and enhance the structural strength, resulting in lower maintenance costs and greater
                            operational reliability.</p>

                        <p>From site preparation to final handover, every phase is carefully planned and executed with an
                            emphasis on quality, safety, and compliance with local and international standards. We also
                            incorporate sustainable practices by optimizing material usage and reducing construction waste.
                        </p>

                        <p>At Construction Mivan Technology LLP, we aim to support industrial growth by providing
                            infrastructure that enhances productivity, ensures safety, and supports future expansion. With
                            each project, we help clients build a stronger foundation for their business success.</p>

                        {{-- <p>
                            {{ $settings->app_name }} prioritizes cost-effective, efficient, and aesthetically pleasing
                            industrial
                            building projects. We develop solutions tailored to our clientele. Our approach to every project
                            is to view it through the lens of the client's vision and objectives, managing every aspect of
                            the
                            construction process in order to create value. We are experts in customizing to the requirements
                            of
                            each project and in communicating with each team member clearly throughout the process.</p>
                        <p>
                            In every project, we take into account the unique factors that shape a project and have a direct
                            impact on our client's business. Using our expertise, we offer the highest level of service
                            excellence and understand the complexity of the construction process. As a result of our
                            detailed
                            planning, coordination, and execution of a project, we ensure the final result exceeds the
                            client's
                            expectations and value.
                        </p> --}}
                    </div>
                    <div class="col-lg-6 single-service-image2" data-aos="fade-left">
                        <!-- <img src="images/services/commercial.jpg"  alt=""> -->
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
                            project completion. Whether it's affordable housing or premium developments, we deliver homes
                            that are safe, sustainable, and built to last.</p>

                        <p>In the commercial sector, we construct office complexes, business parks, retail centers, and
                            mixed-use developments with a focus on structural integrity and space efficiency. The
                            flexibility of Mivan technology allows us to accommodate complex layouts and architectural
                            designs while maintaining rapid construction speed. Our commercial spaces are engineered for
                            longevity, with minimal maintenance and maximum utility.</p>

                        <p>Each project is executed with strict adherence to quality standards, safety protocols, and
                            eco-friendly practices. Our experienced team ensures timely delivery without compromising on
                            construction excellence. By integrating advanced engineering solutions, we help clients reduce
                            costs, optimize space, and achieve long-term value.</p>

                        <p>Construction Mivan Technology LLP is proud to support India’s vision for smart, sustainable urban
                            growth. With every residential and commercial project, we aim to build more than just
                            structures—we create lifestyles, workspaces, and communities designed for the future.</p>

                        <p>Technology LLP is a trusted name in the execution of high-quality industrial construction
                            projects, delivering robust, efficient, and future-ready infrastructure for manufacturing,
                            logistics, and warehousing sectors. With the use of advanced Mivan shuttering technology, we
                            bring speed, strength, and precision to industrial development like never before.</p>

                        <p>Our expertise lies in building industrial facilities such as factories, processing plants,
                            assembly units, storage facilities, and industrial parks with a focus on rapid execution and
                            long-term performance. Mivan technology allows us to construct monolithic concrete structures
                            that are not only durable but also resistant to heavy loads, vibrations, and environmental
                            stress—key requirements in any industrial environment.</p>

                        <p>We understand the critical importance of time, safety, and operational efficiency in industrial
                            projects. Our team of skilled engineers and project managers works in close coordination with
                            clients to ensure all structures meet exact industry specifications and are completed within
                            tight deadlines. By minimizing joints and using aluminum formwork, we reduce construction time
                            and enhance the structural strength, resulting in lower maintenance costs and greater
                            operational reliability.</p>

                        <p>From site preparation to final handover, every phase is carefully planned and executed with an
                            emphasis on quality, safety, and compliance with local and international standards. We also
                            incorporate sustainable practices by optimizing material usage and reducing construction waste.
                        </p>

                        <p>At Construction Mivan Technology LLP, we aim to support industrial growth by providing
                            infrastructure that enhances productivity, ensures safety, and supports future expansion. With
                            each project, we help clients build a stronger foundation for their business success.</p>

                        <p>Construction Mivan Technology LLP is committed to contributing to the nation’s progress through
                            the development of world-class infrastructure projects. By leveraging cutting-edge Mivan
                            construction technology, we deliver faster, stronger, and more reliable infrastructure solutions
                            that meet the growing demands of modern urban and rural development.</p>

                        <p>Our expertise spans across a wide range of infrastructure segments, including roads and highways,
                            bridges, flyovers, urban transport systems, drainage networks, water treatment plants, and
                            public utility buildings. Mivan technology, with its monolithic concrete structure and aluminum
                            formwork system, allows us to deliver projects with superior strength, speed, and precision.
                            This ensures reduced construction time, lower labor dependency, and enhanced durability—making
                            it an ideal choice for large-scale infrastructure works.</p>

                        <p>We work closely with government agencies, private developers, and civic authorities to execute
                            infrastructure projects that are safe, sustainable, and built to last. Our focus on quality,
                            safety, and compliance ensures every project meets the highest engineering and environmental
                            standards.</p>

                        <p>At Construction Mivan Technology LLP, we believe that infrastructure is not just about concrete
                            and steel—it is about creating a foundation for economic growth, connectivity, and community
                            well-being. Our mission is to build infrastructure that empowers people, supports industries,
                            and transforms cities into smart, livable spaces. With a dedicated team of engineers, project
                            managers, and skilled technicians, we ensure timely execution and client satisfaction at every
                            stage of the project. Our commitment to innovation and sustainability makes us a reliable
                            partner for the future of infrastructure development in India.</p>

                        {{-- <p>
                            As an integral part of large, complex industrial and resource facilities located in remote
                            areas,
                            we recognize the critical importance of non-process infrastructure (NPI) to our customers. Thus,
                            we
                            are uniquely positioned to overcome the challenges involved in successfully delivering these
                            projects.</p>
                        <p>
                            Combining innovation with technical expertise and a 'can-do attitude enables us to help our
                            customers
                            maintain their competitive advantage by delivering NPI projects with a focus on reducing costs,
                            meeting
                            tight deadlines, minimising risk, and improving environmental outcomes. Our vast experience
                            includes the
                            design and construction of substations, field auxiliary buildings, warehouses, workshops,
                            administration
                            buildings, chemical storage sheds, and operations centres.
                        </p> --}}

                    </div>
                    <div class="col-lg-6 single-service-image3" data-aos="fade-left">
                        <!-- <img src="images/services/commercial.jpg"  alt=""> -->
                    </div>
                </div>

                <div class="row single-service-gap">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 single-service-info" data-aos="fade-right">
                        <h1>River front</h1>
                        {{-- <p>
                            Godavari river has been an integral part of the life of Nashik since the time the city was
                            founded
                            along the river banks. People who can afford, migrate to a well-developed area to avail
                            themselves the
                            luxurious facilities like clean roads, landscaped gardens, open space for a playground for their
                            children,
                            jogging tracks, spacious parking, security in the society, etc. all these facilities are not
                            present in the
                            core of the city at this moment. And Riverfront Development is the perfect solution for this
                            issue.</p>
                        <p>
                            Godavari riverfront development can be an environmental, social upliftment & urban rejuvenation
                            which will
                            renew Nashik. The project aims to reclaim the unused asset of the river bank and restore the
                            city. It will
                            give a completely new look to the riverfront available. Cleanliness will create attraction for
                            the citizens.
                            It will increase the pride of Nashik as well as the Godavari River.
                        </p> --}}
                        <p>Construction Mivan Technology LLP, we specialize in delivering high-quality commercial and
                            residential projects using advanced Mivan shuttering technology. Our focus is on creating
                            robust, aesthetically appealing, and future-ready spaces that meet the growing demands of urban
                            infrastructure and modern living.</p>

                        <p>For residential projects, we offer fast-paced construction of apartments, villas, and high-rise
                            towers with superior finish and durability. Mivan technology allows us to deliver seamless
                            monolithic concrete structures, which ensures uniform strength, crack-free surfaces, and faster
                            project completion. Whether it's affordable housing or premium developments, we deliver homes
                            that are safe, sustainable, and built to last.</p>

                        <p>In the commercial sector, we construct office complexes, business parks, retail centers, and
                            mixed-use developments with a focus on structural integrity and space efficiency. The
                            flexibility of Mivan technology allows us to accommodate complex layouts and architectural
                            designs while maintaining rapid construction speed. Our commercial spaces are engineered for
                            longevity, with minimal maintenance and maximum utility.</p>

                        <p>Each project is executed with strict adherence to quality standards, safety protocols, and
                            eco-friendly practices. Our experienced team ensures timely delivery without compromising on
                            construction excellence. By integrating advanced engineering solutions, we help clients reduce
                            costs, optimize space, and achieve long-term value.</p>

                        <p>Construction Mivan Technology LLP is proud to support India’s vision for smart, sustainable urban
                            growth. With every residential and commercial project, we aim to build more than just
                            structures—we create lifestyles, workspaces, and communities designed for the future.</p>

                        <p>Technology LLP is a trusted name in the execution of high-quality industrial construction
                            projects, delivering robust, efficient, and future-ready infrastructure for manufacturing,
                            logistics, and warehousing sectors. With the use of advanced Mivan shuttering technology, we
                            bring speed, strength, and precision to industrial development like never before.</p>

                        <p>Our expertise lies in building industrial facilities such as factories, processing plants,
                            assembly units, storage facilities, and industrial parks with a focus on rapid execution and
                            long-term performance. Mivan technology allows us to construct monolithic concrete structures
                            that are not only durable but also resistant to heavy loads, vibrations, and environmental
                            stress—key requirements in any industrial environment.</p>

                        <p>We understand the critical importance of time, safety, and operational efficiency in industrial
                            projects. Our team of skilled engineers and project managers works in close coordination with
                            clients to ensure all structures meet exact industry specifications and are completed within
                            tight deadlines. By minimizing joints and using aluminum formwork, we reduce construction time
                            and enhance the structural strength, resulting in lower maintenance costs and greater
                            operational reliability.</p>

                        <p>From site preparation to final handover, every phase is carefully planned and executed with an
                            emphasis on quality, safety, and compliance with local and international standards. We also
                            incorporate sustainable practices by optimizing material usage and reducing construction waste.
                        </p>

                        <p>At Construction Mivan Technology LLP, we aim to support industrial growth by providing
                            infrastructure that enhances productivity, ensures safety, and supports future expansion. With
                            each project, we help clients build a stronger foundation for their business success.</p>

                        <p>Construction Mivan Technology LLP is committed to contributing to the nation’s progress through
                            the development of world-class infrastructure projects. By leveraging cutting-edge Mivan
                            construction technology, we deliver faster, stronger, and more reliable infrastructure solutions
                            that meet the growing demands of modern urban and rural development.</p>

                        <p>Our expertise spans across a wide range of infrastructure segments, including roads and highways,
                            bridges, flyovers, urban transport systems, drainage networks, water treatment plants, and
                            public utility buildings. Mivan technology, with its monolithic concrete structure and aluminum
                            formwork system, allows us to deliver projects with superior strength, speed, and precision.
                            This ensures reduced construction time, lower labor dependency, and enhanced durability—making
                            it an ideal choice for large-scale infrastructure works.</p>

                        <p>We work closely with government agencies, private developers, and civic authorities to execute
                            infrastructure projects that are safe, sustainable, and built to last. Our focus on quality,
                            safety, and compliance ensures every project meets the highest engineering and environmental
                            standards.</p>

                        <p>At Construction Mivan Technology LLP, we believe that infrastructure is not just about concrete
                            and steel—it is about creating a foundation for economic growth, connectivity, and community
                            well-being. Our mission is to build infrastructure that empowers people, supports industries,
                            and transforms cities into smart, livable spaces. With a dedicated team of engineers, project
                            managers, and skilled technicians, we ensure timely execution and client satisfaction at every
                            stage of the project. Our commitment to innovation and sustainability makes us a reliable
                            partner for the future of infrastructure development in India.</p>

                        <p>At Construction Mivan Technology LLP, we take pride in being a part of transformative riverfront
                            development projects that enhance urban aesthetics, environmental sustainability, and public
                            engagement. Utilizing modern Mivan construction technology, we offer innovative and efficient
                            solutions for building resilient and visually appealing riverfront infrastructures.</p>

                        <p>Riverfront development is more than just beautification—it is about reviving natural assets,
                            preventing erosion, managing flood risks, and creating vibrant public spaces. With our
                            expertise, we construct retaining walls, promenades, walkways, ghats, parks, seating areas, and
                            utility infrastructure that blend functionality with architectural elegance. Mivan technology
                            allows us to build strong, monolithic structures with high precision and speed, ensuring timely
                            project completion even in challenging site conditions.</p>

                        <p>Our approach combines engineering excellence with environmental sensitivity. Every riverfront
                            project is carefully planned to protect natural habitats, maintain ecological balance, and
                            improve water flow management. We incorporate sustainable materials, modern drainage systems,
                            and erosion control features to ensure long-lasting, low-maintenance solutions.</p>

                        <p>In collaboration with urban planners, landscape architects, and civic bodies, we design
                            riverfronts that support tourism, recreation, and local culture. These spaces become vital
                            community hubs, fostering economic activity and improving quality of life for residents.</p>

                        <p>Construction Mivan Technology LLP is committed to delivering riverfront projects that are
                            technically sound, environmentally responsible, and socially enriching. Our goal is to transform
                            neglected riverbanks into thriving, inclusive, and sustainable urban spaces that future
                            generations can enjoy. Whether it’s a small-town ghat restoration or a large-scale urban
                            riverfront transformation, our team ensures top-quality construction, aesthetic value, and
                            long-term impact—making us a trusted partner in India's evolving infrastructure landscape.</p>

                    </div>
                    <div class="col-lg-6 single-service-image4" data-aos="fade-left">
                        <!-- <img src="images/services/commercial.jpg"  alt=""> -->
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
