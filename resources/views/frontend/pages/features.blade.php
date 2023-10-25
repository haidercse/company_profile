@extends('frontend.layouts.master')
@section('title')
    Feature
@endsection
@section('frontend_panel')
<div id="features" class="section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>What We Offer</h3>
            {{-- <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p> --}}
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="features-left">
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-wordpress-logo"></i>
                        <div class="fl-inner">
                            <h4>Cloud Services</h4>
                            <p>EteQ Consultants offers AWS managed services along with AWS migration and optimization. </p>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <i class="flaticon-windows"></i>
                        <div class="fl-inner">
                            <h4>Software Solution</h4>
                            <p>EteQ Consultants ensures state-of-art technology for developing customized software solutions. </p>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-price-tag"></i>
                        <div class="fl-inner">
                            <h4>Mobile Application</h4>
                            <p>EteQ Consultants develops innovative and native mobile Apps for Android, iOS, BlackBerry and Windows platforms. </p>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <i class="flaticon-new-file"></i>
                        <div class="fl-inner">
                            <h4>Data Analysis</h4>
                            <p>EteQ Consultants conveys interesting and modified information science arrangements by utilizing different Data Science devices. </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm">
                <img src="{{asset('uploads/ipad.png')}}" class="img-center img-responsive" alt="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="features-right">
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-pantone"></i>
                        <div class="fr-inner">
                            <h4>ML/AI based System Implementation</h4>
                            <p>EteQ Consultants offers an advanced enterprise AI platform that democratizes data science and automates the end-to-end process for building, deploying, and maintaining artificial intelligence and machine learning at scale. </p>
                        </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <i class="flaticon-cloud-computing"></i>
                        <div class="fr-inner">
                            <h4>Project Management Services</h4>
                            <p>We work with you to deliver your goals with precision and excellence, bringing together the right resources, processes and technology to ensure success. </p>
                        </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-line-graph"></i>
                        <div class="fr-inner">
                            <h4>SEO Friendly</h4>
                            <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </li>
                    {{-- <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <i class="flaticon-coding"></i>
                        <div class="fr-inner">
                            <h4>Simple Clean Code</h4>
                            <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </li> --}}
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
@endsection
