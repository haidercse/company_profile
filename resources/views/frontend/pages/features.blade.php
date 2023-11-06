@extends('frontend.layouts.master')
@section('title')
    Portfolio - Eteqconsultants
@endsection
@section('frontend_panel')
    <div id="about" class="section wb">
        <div class="container">
            {{-- 1 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>DoctorBot</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> DoctorBot works exactly like a medicine

                            specialist. It only focuses on diagnosis

                            human disease by observing the patients’

                            symptoms, signs, and medical history

                            rather than prescribing. This virtual doctor

                            takes only the patient's statement for

                            primary suspicion and asks necessary

                            questions for deep analysis.. </p>

                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/bot.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">
            {{-- 2 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/organizer.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>WHAT WE DO</h4> --}}
                        <h2>Digital Organizer</h2>
        
                        <p>The digital organizer classifies different types of documents by only going through them. This project was developed to organize a huge number of disorganized data. </p>



                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">
            
            {{-- 3 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>Picker</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> Picker is an intelligent decision support system for movie type & schedule selection. This is a multi-criteria decision support system is built for optimizing ticket sales. </p>

                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/picker.png') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">
            {{-- 4 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/ePS.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>WHAT WE DO</h4> --}}
                        <h2>ePS (personal secretary)</h2>
        
                        <p>The ePS provides personalized secretarial and administrative support in an efficient and optimal way. It assists with time and daily management, scheduling of meetings, correspondence, and notetaking.  The Digital personal secretary prioritizes a task over the rest by analyzing different types of data. It can automatically notify users about the status of its owner’s critical items. </p>



                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">
            {{-- 5 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>Digital Dermatologist</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> Digital Dermatologist incorporates deep learning techniques to diagnose skin diseases. The system was established with a huge amount of data from consulting with many dermatologists ensuring up to 99.87% disease prognosis accuracy. Everything the system needs to diagnosis a skin disease is an image capture by a camera. </p>

                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/digital.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">
            {{-- 6 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/virtual.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>WHAT WE DO</h4> --}}
                        <h2>Virtual CareTaker</h2>
        
                        <p>It is a deep learning-based surveillance application that consistently screens children and older people and immediately calls the designated owner if any irregularity is found by perceiving their movements. </p>



                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">
            {{-- 7 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>Gal Guard</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> Gal Guard is an intelligent mobile application that

                            helps a girl call the police or invoke help, if she finds
                            
                            herself in a dangerous situation. The user just needs
                            
                            to shake her smartphone to place a call; this will
                            
                            collect the necessary information and send help to
                            
                            her location. </p>

                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/gal.png') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">


            {{-- 8 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/promoter.png') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>WHAT WE DO</h4> --}}
                        <h2>Promoter</h2>
        
                        <p>The Promoter is an artificial sales promoter devoted to making highlighting products through exhibitions, making introductions, and creating overall population intrigue. The Digital Promoter makes a positive brand presence and formulates imaginative marketing strategies. </p>



                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            {{-- 9 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>The Recruiter</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> The intelligent Recruitment System analyzes candidates' strengths and capabilities and suggests the appropriate candidate based on predefined recruitment appraisal parameters. </p>

                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/recruiment.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            {{-- 10 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/employee_evaluation.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>WHAT WE DO</h4> --}}
                        <h2>The Employee Evaluation Assistant</h2>
        
                        <p>This is a specialist framework that audits

                            an employee’s activities by analyzing
                            
                            diverse assessment matrices. It considers
                            
                            pertinent employee information of to
                            
                            check the commitment of an employee to
                            
                            the organization/association. </p>



                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            {{-- 11 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>Accounting Software</h2>
                        {{-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                        enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> --}}

                        <p> It contains Chart of Account, Double entry system with Receive, payment, Contra and Journal entry system. </p>

                        {{-- <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/account.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
