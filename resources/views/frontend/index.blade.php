@extends('frontend.layouts.master')

@section('title')
    Eteq consultants
@endsection
@section('frontend_panel')
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-one">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">
                                    Succcessfull Program <span>Management Solution</span> in Tech Industry</h1>
                                <h2>Driving successfull Solution, Driving Technological , <br>Excellence for your
                                    organization. </h2>
                                <div class="slider-content-btn">
                                    {{-- <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a> --}}
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="{{ route('contact') }}">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title"> Analyze and Find <span>the perfect solutions</span> for
                                    Business</h1>
                                <h2>trust us to deliver the perfect solutions that driver, <br>your business toward success.
                                </h2>
                                <div class="slider-content-btn">
                                    {{-- <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a> --}}
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="{{ route('contact') }}">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-three">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Delivering Successfull Solutions <span>Driving
                                        Technological Excellence</span> For Your Organization</h1>
                                <h2>Driving successfull Solution, Driving Technological , <br>Excellence for your
                                    organization.</h2>
                                <div class="slider-content-btn">
                                    {{-- <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a> --}}
                                    <a class="button btn btn-light btn-radius btn-brd"
                                        href="{{ route('contact') }}">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>EteQ Group</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> Are you prepared to propel your business to new heights in the digital world? Look no further than EteQ Group. We stand as your trusted partner for comprehensive IT management services, cutting-edge software development solutions, and expert project management.
                            Unlock your organization's potential with our transformative IT services, leading digital transformation for success in the evolving tech landscape. Experience our cutting-edge software solutions, driving business forward with tailored innovation and impactful outcomes.
                            Join the ranks of thriving businesses that embrace the EteQ Group difference. Contact us today to embark on a transformative journey toward digital success, and let us be the catalyst for your business's growth in the dynamic digital landscape.
                        </p>
                        

                        <a href="{{ route('about') }}" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/about_01.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/about_02.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>WHAT WE DO</h4> --}}
                        <h2>Mission</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p>Our mission is to help businesses leverage the power of AI and the cloud to drive innovation, optimize operations, and achieve their goals. We work with clients across a range of industries to develop customized solutions that meet their unique needs and challenges. Our team of experts brings deep expertise in AI and cloud technologies, as well as extensive experience in IT strategy, project management, and implementation. We are dedicated to delivering results-driven solutions that enable our clients to stay ahead of the curve in the fast-changing world of technology. </p>

                        <a href="{{ route('about') }}" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section parallax-off custom_background_image" data-stellar-background-ratio="0.9">
        <div class="container">
            <div class="row text-center stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-briefcase"></i></span>
                    <p class="stat_count">1200</p>
                    <h3>Complated Projects</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-happy"></i></span>
                    <p class="stat_count">3210</p>
                    <h3>Happy Clients</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-idea"></i></span>
                    <p class="stat_count">3781</p>
                    <h3>Customer Services</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i
                            class="flaticon-customer-service"></i></span>
                    <p class="stat_count">4300</p>
                    <h3>Answered Questions</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Services</h3>

                <h4 style="font-weight:bold;">Cloud Services</h4 style="font-weight:bold;">

                <p>EteQ Consultants offers AWS managed services along with AWS migration and optimization</p>

                <h4 style="font-weight:bold;">Software Solution</h4 style="font-weight:bold;">

                <p>EteQ Consultants ensures state-of-art technology for developing customized software solutions for
                    changing customer demands with flawless execution </p>

                <h4 style="font-weight:bold;">Mobile Application</h4 style="font-weight:bold;">

                <p>EteQ Consultants develops innovative and native mobile Apps for Android, iOS, BlackBerry and Windows
                    platforms. </p>

                <h4 style="font-weight:bold;">Data Analysis</h4 style="font-weight:bold;">

                <p>EteQ Consultants conveys interesting and modified information science arrangements by utilizing different
                    Data Science devices and advances It encourages venture organizations to settle on better choices on
                    time by helping them in large information investigation and representation. </p>

                <h4 style="font-weight:bold;">ML/AI based System Implementation</h4 style="font-weight:bold;">

                <p>EteQ Consultants offers an advanced enterprise AI platform that democratizes data science and automates
                    the end-to-end process for building, deploying, and maintaining artificial intelligence and machine
                    learning at scale. </p>

                <h4 style="font-weight:bold;">Project Management Services</h4 style="font-weight:bold;">

                <p>Our program management services provide our clients with a comprehensive approach to managing complex
                    projects and programs. We work with you to deliver your goals with precision and excellence, bringing
                    together the right resources, processes, and technology to ensure success.
                </p>
            </div><!-- end title -->
            <a href="{{ route('services') }}" data-scroll class="btn btn-light btn-radius btn-brd">See More</a>
            {{-- <div class="owl-services owl-carousel owl-theme">
            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="{{asset('uploads/service_01.jpg')}}" data-rel="prettyPhoto[gal]"
                        class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="{{asset('uploads/service_01.jpg')}}" alt="" class="img-responsive img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Smart Swatch Editions</h3>
                    <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est,
                        convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                </div>
            </div>
            <!-- end service -->

            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="{{asset('uploads/service_02.jpg')}}" data-rel="prettyPhoto[gal]"
                        class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="{{asset('uploads/service_02.jpg')}}" alt="" class="img-responsive img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Web UI Kit Design</h3>
                    <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo
                        rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                </div>
            </div>
            <!-- end service -->

            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="{{asset('uploads/service_03.jpg')}}" data-rel="prettyPhoto[gal]"
                        class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="{{asset('uploads/service_03.jpg')}}" alt="" class="img-responsive img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Mobile Optimization</h3>
                    <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales
                        aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                </div>
            </div>
            <!-- end service -->

            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="{{asset('uploads/service_04.jpg')}}" data-rel="prettyPhoto[gal]"
                        class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="{{asset('uploads/service_04.jpg')}}" alt="" class="img-responsive img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Digital Design for Mac</h3>
                    <p>Praesent in neque congue sapien lobortis faucibus id eget erat. <br>Pellentesque maximus
                        rutrum felis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
            <!-- end service -->
        </div><!-- end row -->

        <hr class="hr1">

        <div class="text-center">
            <a data-scroll href="#portfolio" class="btn btn-light btn-radius btn-brd">View Our Portfolio</a>
        </div> --}}
        </div><!-- end container -->
    </div><!-- end section -->

    {{-- <div class="parallax section noover parallax_05_image" data-stellar-background-ratio="0.7">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="customwidget text-left">
                        <h1>Beautiful Websites</h1>
                        <p>Full access control of the background parallax effects, <br>change your awesome background
                            elements and edit colors from style.css or colors.css</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-check"></i> Custom Sections</li>
                            <li><i class="fa fa-check"></i> Parallax's</li>
                            <li><i class="fa fa-check"></i> Icons & PSD</li>
                            <li><i class="fa fa-check"></i> Limitless Colors</li>
                        </ul><!-- end list -->
                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd">Learn More</a>
                    </div>
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="text-center image-center hidden-sm hidden-xs">
                        <img src="{{ asset('uploads/device_03.png') }}" alt=""
                            class="img-responsive wow fadeInUp">
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section --> --}}

    {{-- <div id="features" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>What We Offer</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-left">
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-wordpress-logo"></i>
                            <div class="fl-inner">
                                <h4>Cloud Services</h4>
                                <p>EteQ Consultants offers AWS managed services along with AWS migration and optimization.
                                </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-windows"></i>
                            <div class="fl-inner">
                                <h4>Software Solution</h4>
                                <p>EteQ Consultants ensures state-of-art technology for developing customized software
                                    solutions. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="flaticon-price-tag"></i>
                            <div class="fl-inner">
                                <h4>Mobile Application</h4>
                                <p>EteQ Consultants develops innovative and native mobile Apps for Android, iOS, BlackBerry
                                    and Windows platforms. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="flaticon-new-file"></i>
                            <div class="fl-inner">
                                <h4>Data Analysis</h4>
                                <p>EteQ Consultants conveys interesting and modified information science arrangements by
                                    utilizing different Data Science devices. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="{{ asset('uploads/ipad.png') }}" class="img-center img-responsive" alt="">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-right">
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-pantone"></i>
                            <div class="fr-inner">
                                <h4>ML/AI based System Implementation</h4>
                                <p>EteQ Consultants offers an advanced enterprise AI platform that democratizes data science
                                    and automates the end-to-end process for building, deploying, and maintaining artificial
                                    intelligence and machine learning at scale. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-cloud-computing"></i>
                            <div class="fr-inner">
                                <h4>Project Management Services</h4>
                                <p>We work with you to deliver your goals with precision and excellence, bringing together
                                    the right resources, processes and technology to ensure success. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="flaticon-line-graph"></i>
                            <div class="fr-inner">
                                <h4>SEO Friendly</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <i class="flaticon-coding"></i>
                        <div class="fr-inner">
                            <h4>Simple Clean Code</h4>
                            <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </li>
                    </ul>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div> --}}
    <!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off testimonials">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers!
                    <br>Let's see what others say about ETEQ GROUP website template!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">"Working with ETEQ GROUP has been a game-changer for our business. Their
                                    expertise in software consulting has helped us streamline our operations, improve
                                    efficiency, and drive growth. Their team truly understands our unique challenges and
                                    provides tailored solutions that deliver exceptional results."</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_01.png') }}" alt=""
                                    class="img-responsive alignleft">
                                <h4>John Smith <small>- CEO</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">"The reporting analysis provided by ETEQ GROUP has been invaluable to our
                                    decision-making process. Their comprehensive insights and clear recommendations have
                                    helped us optimize our strategies and achieve measurable success. We highly recommend
                                    their services for anyone looking to leverage data for business growth."</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_02.png') }}" alt=""
                                    class="img-responsive alignleft">
                                <h4>Sarah Johnson <small>- Director of Marketing</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">"ETEQ GROUP has been our trusted partner for real-time and data
                                    solutions. Their cutting-edge tools and expertise have enabled us to harness the power
                                    of real-time data, make data-driven decisions, and stay ahead in a competitive market.
                                    Their team's professionalism and dedication are truly commendable." </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_03.png') }}" alt=""
                                    class="img-responsive alignleft">
                                <h4>David Thompson <small>- CFO of DEF Company</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">"ETEQ GROUP has consistently exceeded our expectations from software
                                    development to project management. Their commitment to excellence, attention to detail,
                                    and ability to deliver projects on time and within budget have made them invaluable to
                                    our organization. We highly recommend their services to anyone seeking exceptional
                                    results."</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_01.png') }}" alt=""
                                    class="img-responsive alignleft">
                                <h4> Emily Roberts <small>- COO of GHI Company</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">"Working with ETEQ GROUP has been a game-changer for our business. Their
                                    expertise in software consulting has helped us streamline our operations, improve
                                    efficiency, and drive growth. Their team truly understands our unique challenges and
                                    provides tailored solutions that deliver exceptional results.".</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_02.png') }}" alt=""
                                    class="img-responsive alignleft">
                                <h4>Ayuk <small>- CEO</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->

            {{-- <hr class="hr1">

        <div class="row logos">
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="{{asset('uploads/logo_01.png')}}" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="{{asset('uploads/logo_02.png')}}" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="{{asset('uploads/logo_03.png')}}" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="{{asset('uploads/logo_04.png')}}" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="{{asset('uploads/logo_05.png')}}" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="{{asset('uploads/logo_06.png')}}" alt="" class="img-repsonsive"></a>
            </div>
        </div><!-- end row --> --}}

        </div><!-- end container -->
    </div><!-- end section -->
@endsection
