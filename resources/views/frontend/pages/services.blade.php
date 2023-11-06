@extends('frontend.layouts.master')
@section('title')
    Services - Eteqconsultants
@endsection
@section('frontend_panel')
    <div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Service</h3>
                <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we
                    prepare search engine optimization, social media support, we provide corporate identity and graphic
                    design services.</p>
            </div><!-- end title -->


            {{-- 1 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>Software Solution</h2>
                        <p> EteQ Consultants ensures state-of-art technology for developing customized
                            software solutions for changing customer demands with flawless execution. </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/images.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            {{-- 2 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/download.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Cloud Services</h2>
                        <p>TEteQ Consultants offers AWS managed services along with AWS migration and
                            optimization.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            {{-- 3 --}}
            <hr class="hr1">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>Project Management Services</h2>


                        <p> EteQ Consultants provides project management services for IT and
                            construction industries. </p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/project_management.jpg') }}" alt=""
                            class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            {{-- 4 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/data_analysis.jpg') }}" alt=""
                            class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Data Analysis</h2>

                        <p>EteQ Consultants conveys interesting and modified information science
                            arrangements by utilizing different Data Science devices and advances It encourages venture
                            organizations to settle on better choices on time by helping them in large information
                            investigation and representation.</p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>AI/ML</h2>
                        <p> EteQ Consultants offers an advanced enterprise AI platform that
                            democratizes data science and automates the end-to-end process for building, deploying, and
                            maintaining artificial intelligence and machine learning at scale. </p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/AI.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            <div class="text-center" style="margin-top: 20px">
                <a data-scroll href="{{ route('features') }}" class="btn btn-light btn-radius btn-brd">View Our
                    Portfolio</a>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
