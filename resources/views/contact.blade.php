@extends('layouts.app')
@section('title', 'Contact Page')
@section('content')
    <style>
        .contact-form-section {
            background: rgb(255, 205, 104);
            padding: 10px;
            border-radius: 15px;
            margin-top: 0%;
            margin-bottom: 0%;
        }
    </style>
    <div id="banner-area" class="banner-area" style="background-image:url(images/design.png);background-color:#3f1d71 ;">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
                                </ol>
                            </nav>
                            <h1 class="banner-title">Connect with us for more information</h1>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section class="contact-info-section">
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-6 info-section">
                    <div>
                        <!-- <span class="ts-service-icon">
                                  <i class="fas fa-map-marker-alt mr-0"></i>
                                </span> -->
                        <div class="ts-service-box-content">
                            <h4>Address</h4>
                            <p>{{ $settings->address }}</p>
                        </div>
                    </div>

                    <div>
                        <!-- <span class="ts-service-icon">
                                  <i class="fa fa-envelope mr-0"></i>
                                </span> -->
                        <div class="ts-service-box-content">
                            <h4>Email Us</h4>
                            <p>{{ $settings->email }}</p>
                        </div>
                    </div>

                    <div>
                        <!-- <span class="ts-service-icon">
                                  <i class="fa fa-phone-square mr-0"></i>
                                </span> -->
                        <div class="ts-service-box-content">
                            <h4>Call Us</h4>
                            <p>{{ $settings->contact }}</p>
                        </div>
                    </div>
                    {{-- <div>
                        <table>
                            <tr>
                                <td>PAN Number</td>
                                <td>:</td>
                                <td> ADVFS7368B</td>
                            </tr>
                            <tr>
                                <td>PF CODE</td>
                                <td>:</td>
                                <td>THTHA2442618000</td>
                            </tr>
                            <tr>
                                <td>PTRC</td>
                                <td>:</td>
                                <td>27251897470P</td>
                            </tr>
                            <tr>
                                <td>PTEC</td>
                                <td>:</td>
                                <td>99784143335P</td>
                            </tr>
                            <tr>
                                <td>TAN</td>
                                <td>:</td>
                                <td>PNES75499E</td>
                            </tr>
                            <tr>
                                <td>GSTIN</td>
                                <td>:</td>
                                <td>27ADVFS7368B1ZG</td>
                            </tr>
                            <tr>
                                <td>ESIC REG NO</td>
                                <td>:</td>
                                <td>4000516940001000</td>
                            </tr>
                        </table>
                    </div> --}}
                </div>
                <div class="col-md-6 contact-form-section">
                    <h3 class="column-title">Fill out our form below, an SRA Constrcution Representative
                        will be in touch for further details!</h3>
                    <form id="request" class="main_form" method="POST"
                        action="{{ route('front.save.contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <input class="form-control" placeholder="Name" type="text" name="name">
                            </div>
                            <div class="col-md-12 mt-4">
                                <input class="form-control" placeholder="Email * " type="email" name="email" required>
                            </div>
                            <div class="col-md-12 mt-4">
                                <input class="form-control" placeholder="Phone Number" type="number" name="phone">
                            </div>
                            <div class="col-md-12 mt-4">
                                <input class="form-control" placeholder="Subject" type="text" name="subject">
                            </div>
                            <div class="col-md-12 mt-4">
                                <textarea class="form-control" placeholder="Message * " name="message" required></textarea>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="btn btn-warning">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
