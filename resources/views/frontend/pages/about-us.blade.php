@extends('frontend.layouts.master')
@section('title')
    About - EteqGroup
@endsection
@section('frontend_panel')
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>Eteq Group</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> 
                            Are you prepared to propel your business to new heights in the digital world? Look no further than EteQ Group. We stand as your trusted partner for comprehensive IT management services, cutting-edge software development solutions, and expert project management.
                        </p>
<p>Unleash the full potential of your organization with our transformative IT management services. From spearheading digital transformation to optimizing operations and fostering innovation, we are dedicated to ensuring your triumph in the ever-evolving technological landscape. With our expertise and guidance, your business will excel in the digital age.
Experience the power of our cutting-edge software development solutions. We deliver tailor-made software solutions that empower businesses to thrive in today's digital world. Harnessing innovation, expertise, and creativity, we drive meaningful impact and deliver exceptional outcomes that drive your business forward.</p>
<p>When it comes to project management, we are the partner of choice. Our unwavering commitment to excellence sets us apart. We consistently deliver successful projects on time, within budget, and surpass expectations. With our exceptional project management expertise, your organization can achieve strategic objectives, maximize business value, and attain unmatched success.
Join the ranks of thriving businesses that have felt the EteQ Group difference. Embrace the opportunities of the digital age, amplify your growth, and stay ahead of the competition. Contact us today to embark on a journey toward digital transformation, innovation, and unrivaled success. Together, we will empower your business to excel in the dynamic digital landscape. 

                             </p>

                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
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
                        <h2>Mission of Eteq Group</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p>Our mission is to boost the business growth of our clients with ingenious blueprint, 
                            development and to convey market-defining high-quality solutions that craft value while providing competitive advantage to customers around the globe. </p>



                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/home_img-05.png') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>WHAT WE DO</h4> --}}
                        <h2>Values of Eteq Group</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <h4>Values of Eteq Group</h4>
                        <p>Intellect and Experience: Exceptionally gifted experts who are skilled in assorted business and
                            innovation regions make up the EteQ Group LLC.</p>

                        <p> Client Service: We measure our success by our customer’s success. To ensure customer
                            satisfaction, we make all our assets accessible to our customers focusing on creating long term
                            associations with them.</p>

                        <p>Integrity: Integrity and responsibility are keys to our business practice and personality. We
                            invest heavily in these values and are devoted to addressing our capacities genuinely and are
                            always accountable for our decisions.</p>

                        <p>Sustainable Development: We analyze our decisions’ social, natural, and financial impacts before
                            executing any projects.</p>

                        <p> Transparency: We share our discoveries and the subtleties of our work processes with our
                            customers. Our company culture is centered around responsibility and accountability to our
                            customers and ourselves</p>


                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
