@extends('frontend.layouts.master')
@section('title')
    Contact - Eteqconsultants
@endsection

@section('frontend_panel')
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get in touch</h3>
                <p class="lead">Get in touch with EteQ Group today! Allow us to provide you with comprehensive information about the unique website solutions we offer.  <br>Simply complete the form below, and join the millions of satisfied website owners who have chosen to partner with us for their digital needs.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="First Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="Last Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone">
                                </div>
                                {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="sr-only">Select Service</label>
                                <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                    <option value="12">Installation Service</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div> --}}
                                {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="sr-only">What is max price?</label>
                                <select name="select_price" id="select_price" class="selectpicker form-control" data-style="btn-white">
                                    <option value="$100 - $2000">$100 - $2000</option>
                                    <option value="$2000 - $4000">$2000 - $4000</option>
                                    <option value="$4000 - $10000">$4000 - $10000</option>
                                </select>
                            </div> --}}
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="icon icon-location2"></i>
                        </div>
                        <h3>Headquarters</h3>
                        <p>
                            3050 Post Oak Boulevard Suite 510, Houston,
                             TX 77056, USA
                        </p>
                    </div>
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <h3>Email Us</h3>
                        <p>info@eteqgroup.com
                        </p>
                    </div>
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="icon icon-headphones"></i>
                        </div>
                        <h3>Call Us</h3>
                        <p> (832) 269-4474
                            <br>832-2694474
                        </p>
                    </div>
                </div>
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->
@endsection
