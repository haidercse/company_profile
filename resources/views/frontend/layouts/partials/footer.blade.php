<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    {{-- <div class="widget-title">
                        <img src="{{asset('images/logos/logo-2.png')}}" alt="" />
                    </div> --}}
                    <p> EteQ Group offers an advanced enterprise AI platform that democratizes data science and automates the end-to-end process for building, deploying, and maintaining artificial intelligence and machine learning at scale. </p>
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Pages</h3>
                    </div>

                    <ul class="footer-links hov">
                        <li><a href="{{ route('home') }}">Home <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="{{ route('services') }}">Services <span class="icon icon-arrow-right2"></span></a>
                        </li>
                        <li><a href="{{ route('features') }}">Features <span class="icon icon-arrow-right2"></span></a>
                        </li>
                        <li><a href="{{ route('about') }}">About <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="{{ route('testomonials') }}">Testomonial <span
                                    class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="{{ route('contact') }}">Contact <span class="icon icon-arrow-right2"></span></a>
                        </li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-distributed widget clearfix">
                    <div class="widget-title">
                        <h3>Business Hour</h3>
                        <p>Mon: 8:00 AM – 7:00 PM</p>
                        <p> Tue: 8:00 AM – 7:00 PM</p>
                        <p> Wed: 8:00 AM – 7:00 PM</p>
                        <p> Thu: 8:00 AM – 7:00 PM</p>
                        <p> Fri: 8:00 AM – 7:00 PM</p>
                        <p>Sat: 8:00 AM – 7:00 PM</p>
                        <p> Sun: Closed </p>
                    </div>


                    {{-- <div class="footer-right">
                        <form method="get" action="#">
                            <input placeholder="Subscribe our newsletter.." name="search">
                            <i class="fa fa-envelope-o"></i>
                        </form>
                    </div> --}}
                </div><!-- end clearfix -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-company-name">All Rights Reserved. &copy; {{ now()->year }} <a
                        href="{{ route('home') }}">EteQ</a>
                    Design By :
                    <a href="#">EteQ design Team</a>
                </p>
            </div>


        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->
