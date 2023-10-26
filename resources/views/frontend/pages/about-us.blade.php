@extends('frontend.layouts.master')
@section('title')
    About - Eteqconsultants
@endsection
@section('frontend_panel')
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>Eteq Consultants</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> EteQ Consultants is an IT management consulting and implementation company specializing in AI
                            and cloud services. Our mission is to help businesses leverage the power of AI and the cloud to
                            drive innovation, optimize operations, and achieve their goals. We work with clients across a
                            range of industries to develop customized solutions that meet their unique needs and challenges.
                            Our team of experts brings deep expertise in AI and cloud technologies, as well as extensive
                            experience in IT strategy, project management, and implementation. We are dedicated to
                            delivering results-driven solutions that enable our clients to stay ahead of the curve in the
                            fast-changing world of technology. </p>

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
                        <h4>WHAT WE DO</h4>
                        <h2>Our Program</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> Our program management services cover a wide range of areas, including project planning, risk
                            management, stakeholder engagement, quality assurance, and performance management. We provide
                            end-to-end program management support, from the initial planning stages through to program
                            delivery and post-program evaluation</p>

                        <p> Our program management services provide our clients with a comprehensive approach to managing
                            complex projects and programs. We work with you to deliver your goals with precision and
                            excellence, bringing together the right resources, processes, and technology to ensure success.
                        </p>


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
                        <h2>Values of Eteq Consultants</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <h4>Values of Eteq Consultants</h4>
                        <p>Intellect and Experience: Exceptionally gifted experts who are skilled in assorted business and
                            innovation regions make up the EteQ Consultants LLC.</p>

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
