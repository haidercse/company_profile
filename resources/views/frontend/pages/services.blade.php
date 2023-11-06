@extends('frontend.layouts.master')
@section('title')
    Services - Eteqconsultants
@endsection
@section('frontend_panel')
    
	<div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Service</h3>
                <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
            </div><!-- end title -->

            <div class="owl-services owl-carousel owl-theme">
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="{{asset('uploads/images.jpg')}}" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Software Solution</h3>
						<p style="height: 200px;">EteQ Consultants  ensures state-of-art technology for developing customized software solutions for changing customer demands with flawless execution.</p>
					</div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="{{asset('uploads/download.jpg')}}" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Cloud Services</h3>
						<p style="height: 200px;">EteQ Consultants  offers AWS managed services along with AWS migration and optimization. </p>
					</div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="{{asset('uploads/project_management.jpg')}}" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Project Management Services</h3>
						<p style="height: 200px;">EteQ Consultants provides project management services for IT and construction industries.</p>
					</div>
                </div>
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="{{asset('uploads/data_analysis.jpg')}}" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Data Analysis</h3>
						<p style="height: 200px;">EteQ Consultants  conveys interesting and modified information science arrangements by utilizing different Data Science devices and advances It encourages venture organizations to settle on better choices on time by helping them in large information investigation and representation.</p>
					</div>
                </div>
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="{{asset('uploads/AI.jpg')}}" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>AI/ML</h3>
						<p style="height: 200px;">EteQ Consultants  offers an advanced enterprise AI platform that democratizes data science and automates the end-to-end process for building, deploying, and maintaining artificial intelligence and machine learning at scale.</p>
					</div>
                </div>
                <!-- end service -->
{{-- 
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="{{asset('uploads/service_04.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="{{asset('uploads/service_04.jpg')}}" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Digital Design for Mac</h3>
						<p>Praesent in neque congue sapien lobortis faucibus id eget erat. <br>Pellentesque maximus rutrum felis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
                </div>
                <!-- end service --> --}}
            </div><!-- end row -->

            <hr class="hr1">

            <div class="text-center">
                <a data-scroll href="{{route('features')}}" class="btn btn-light btn-radius btn-brd">View Our Portfolio</a>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

@endsection