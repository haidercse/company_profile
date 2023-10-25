@extends('frontend.layouts.master')
@section('title')
    Services
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
						<h3>Software Consulting</h3>
						<p>Unlock the full potential of your business with our expert software consulting services. At EteQ Consultants, we bring extensive experience and technical expertise to the table, helping organizations navigate the complex world of software solutions. Our team of seasoned consultants works closely with clients to understand their unique challenges and goals, offering strategic guidance and tailored recommendations. Whether you need assistance with software selection, system integration, process optimization, or digital transformation initiatives, we have the knowledge and skills to drive your success. Trust our software consulting services to streamline operations, enhance efficiency, and propel your business forward in today’s digital landscape.</p>
					</div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="{{asset('uploads/download.jpg')}}" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Real Time and Data</h3>
						<p>Harness the power of real-time data with our cutting-edge solutions. We provide real-time data analysis and visualization tools that empower businesses to make informed decisions on the fly. Our expertise in data management and processing ensures accurate and up-to-date information at your fingertips, enabling agile and proactive strategies. Stay ahead of the curve with our real-time and data-driven solutions. </p>
					</div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="{{asset('uploads/reportAnalysis.jpg')}}" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Report And Analysis</h3>
						<p>Our reporting analysis services provide comprehensive insights and actionable recommendations. We analyze your data, identify trends, and present clear, concise reports that drive informed decision-making. With our expertise, you can unlock valuable information, optimize performance, and stay ahead of the competition. Trust us to deliver accurate and timely reporting analysis that empowers your business to thrive.</p>
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
                <a data-scroll href="{{route('portfolio')}}" class="btn btn-light btn-radius btn-brd">View Our Portfolio</a>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

@endsection