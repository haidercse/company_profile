@extends('frontend.layouts.master')
@section('title')
    Portfolio - Eteqconsultants
@endsection

@section('frontend_panel')
<div id="portfolio" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Portfolio</h3>
            <p class="lead">We build professional website templates, web design projects, material designs and UI kits. <br>Some of our awesome completed projects in below.</p>
        </div><!-- end title -->
    </div><!-- end container -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="portfolio-filter text-center">
                    <ul>
                        <li><a class="btn btn-dark btn-radius btn-brd active" href="#" data-filter="*"><span class="oi hidden-xs" data-glyph="grid-three-up"></span> All</a></li>
                        <li><a class="btn btn-dark btn-radius btn-brd" data-toggle="tooltip" data-placement="top" title="5" href="#" data-filter=".cat1">Design</a></li>
                        <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="12" data-filter=".cat2">Mockup</a></li>
                        <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="21" data-filter=".cat3">Logos</a></li>
                        <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="11" data-filter=".cat4">HTML</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <hr class="invis">

        <div id="da-thumbs" class="da-thumbs portfolio">
            <div class="post-media pitem item-w1 item-h1 cat1">
                <a href="{{asset('uploads/portfolio_01.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_01.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Seahorse by Trevor <small>Web Design</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat2">
                <a href="{{asset('uploads/portfolio_02.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_02.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Tradested Mockop <small>Graphic Design</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat1">
                <a href="{{asset('uploads/portfolio_03.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_03.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Photography Material <small>Photography</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat4">
                <a href="{{asset('uploads/portfolio_04.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_04.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Responsive Menu <small>UI Design</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat3">
                <a href="{{asset('uploads/portfolio_05.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_05.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>SnowMaker App <small>Application</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat2">
                <a href="uploads/portfolio_06.jpg" data-rel="prettyPhoto[gal]">
                    <img src="uploads/portfolio_06.jpg" alt="" class="img-responsive">
                    <div>
                        <h3>3D Mockups <small>Graphic Design</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat1">
                <a href="{{asset('uploads/portfolio_07.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_07.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Best of Design <small>Web Design</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat4">
                <a href="{{asset('uploads/portfolio_08.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_08.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Admin Dashboard <small>Admin Template</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
            <div class="post-media pitem item-w1 item-h1 cat3">
                <a href="{{asset('uploads/portfolio_09.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_09.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Radio Mockup <small>Graphic Design</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>

            <div class="post-media pitem item-w1 item-h1 cat2">
                <a href="{{asset('uploads/portfolio_10.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('uploads/portfolio_10.jpg')}}" alt="" class="img-responsive">
                    <div>
                        <h3>Danny Jeffers <small>Web Design</small></h3>
                        <i class="flaticon-unlink"></i>
                    </div>
                </a>
            </div>
        </div><!-- end portfolio -->
    </div><!-- end container -->
</div><!-- end section -->
@endsection