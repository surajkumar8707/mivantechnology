@extends('layouts.app')
@section('title', getSettings()->app_name . ':: About Page')
@section('content')

    <div id="banner-area" class="banner-area1" style="background-image:url(images/design.png);background-color:#3f1d71 ;">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Privacy Policy</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="terms-condition" class="terms-condition solid-bg single-service-gap">
        <div class="container">
            <p class="text-center">Welcome to <strong>{{ $settings->app_name }}</strong>, where innovation meets excellence in
                construction.</p>

            <h3>Our Mission</h3>
            <p>Our mission is to transform the construction industry by integrating advanced {{ $settings->app_name }} shuttering technology to
                create strong, reliable, and aesthetically superior buildings in record time.</p>

            <h3>Our Vision</h3>
            <p>To be a leading provider of {{ $settings->app_name }}, setting new benchmarks for speed,
                quality, and customer satisfaction in the industry.</p>

            <h3>Why Choose Us?</h3>
            <ul>
                <li><strong>Advanced Technology:</strong> We use state-of-the-art {{ $settings->app_name }} aluminum formwork for faster,
                    stronger,
                    and more efficient construction.</li>
                <li><strong>Expert Team:</strong> Our team of engineers and technicians brings years of expertise in {{ $settings->app_name }}.</li>
                <li><strong>Sustainable Practices:</strong> We emphasize eco-friendly and sustainable building methods.</li>
                <li><strong>Cost-Effective Solutions:</strong> Our technology reduces labor costs and construction time,
                    making
                    it an economical choice.</li>
                <li><strong>Timely Project Delivery:</strong> Faster construction means quicker project completion without
                    compromising on quality.</li>
            </ul>

            <h3>Get in Touch</h3>
            <p>Want to learn more about our innovative construction solutions? <br>Contact us at <strong>{{ $settings->email }}</strong>
                or call us at <strong>{{ $settings->contact }}</strong>.</p>
        </div>
    </section>

@endsection
