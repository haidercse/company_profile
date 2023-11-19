@extends('frontend.layouts.master')
@section('title')
    Testomonials - Eteqgroup
@endsection

@section('frontend_panel')
<div id="test-box" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimonials</h3>
            <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about ETEQ GROUP  website template!</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">"Working with ETEQ GROUP has been a game-changer for our business. Their expertise in software consulting has helped us streamline our operations, improve efficiency, and drive growth. Their team truly understands our unique challenges and provides tailored solutions that deliver exceptional results."</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('uploads/testi_01.png')}}" alt="" class="img-responsive alignleft">
                            <h4>John Smith <small>- CEO</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">"The reporting analysis provided by ETEQ GROUP has been invaluable to our decision-making process. Their comprehensive insights and clear recommendations have helped us optimize our strategies and achieve measurable success. We highly recommend their services for anyone looking to leverage data for business growth."</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('uploads/testi_02.png')}}" alt="" class="img-responsive alignleft">
                            <h4>Sarah Johnson <small>- Director of Marketing</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">"ETEQ GROUP has been our trusted partner for real-time and data solutions. Their cutting-edge tools and expertise have enabled us to harness the power of real-time data, make data-driven decisions, and stay ahead in a competitive market. Their team's professionalism and dedication are truly commendable." </p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('uploads/testi_03.png')}}" alt="" class="img-responsive alignleft">
                            <h4>David Thompson <small>- CFO of DEF Company</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">"ETEQ GROUP has consistently exceeded our expectations from software development to project management. Their commitment to excellence, attention to detail, and ability to deliver projects on time and within budget have made them invaluable to our organization. We highly recommend their services to anyone seeking exceptional results."</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('uploads/testi_01.png')}}" alt="" class="img-responsive alignleft">
                            <h4> Emily Roberts <small>- COO of GHI Company</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">"Working with ETEQ GROUP has been a game-changer for our business. Their expertise in software consulting has helped us streamline our operations, improve efficiency, and drive growth. Their team truly understands our unique challenges and provides tailored solutions that deliver exceptional results.".</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{asset('uploads/testi_02.png')}}" alt="" class="img-responsive alignleft">
                            <h4>Ayuk <small>- CEO</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- end container -->
</div><!-- end section -->
@endsection