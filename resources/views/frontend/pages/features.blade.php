@extends('frontend.layouts.master')
@section('title')
    Portfolio - Eteqgroup
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

                        <p> EteQ Group presents DoctorBot, an AI-powered virtual medical specialist that mimics the
                            diagnostic capabilities of a human doctor. DoctorBot's primary focus is on disease diagnosis,
                            relying on a thorough assessment of patients' symptoms, medical history, and signs, rather than
                            prescribing treatments.</p>
                        <p> Our virtual doctor begins by taking the patient's statement for initial suspicion and proceeds
                            to ask essential questions for in-depth analysis. EteQ Group is committed to enhancing
                            healthcare through cutting-edge technology, and DoctorBot exemplifies our dedication to accurate
                            and efficient medical diagnostics.
                            We believe in leveraging AI to support healthcare professionals and patients alike, ensuring
                            more precise and timely disease identification. With EteQ Group's DoctorBot, you have a reliable
                            partner in the quest for accurate diagnosis and medical analysis.
                        </p>

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

                        <p>EteQ Group introduces the Digital Organizer, an innovative solution designed to streamline the
                            organization of vast amounts of disorganized data. This advanced tool efficiently categorizes
                            various types of documents simply by processing them.</p>
                        <p> Our project addresses the challenges posed by the overwhelming volumes of unstructured data,
                            providing a comprehensive and automated system for document classification. EteQ Group is
                            committed to harnessing technology to simplify complex data management tasks.
                            With the Digital Organizer, we empower businesses to make sense of their information, enhance
                            efficiency, and improve data accessibility. EteQ Group's expertise in data management and
                            organization ensures that you have a reliable partner to tackle the intricacies of data
                            classification.
                        </p>



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

                        <p> EteQ Group proudly presents "Picker," an intelligent decision support system tailored for
                            optimizing movie type and schedule selection to boost ticket sales. Picker is a multi-criteria
                            decision support system that combines advanced algorithms and data-driven insights to assist
                            moviegoers in making informed choices.</p>
                        <p> Our expertise in data analysis and decision support technology is channeled through Picker to
                            enhance the cinema-going experience. EteQ Group is committed to delivering innovative solutions
                            that improve decision-making and revenue optimization in the entertainment industry.
                            Picker's cutting-edge capabilities are designed to cater to the diverse preferences and needs of
                            movie enthusiasts, ensuring a seamless and personalized experience. With EteQ Group's Picker,
                            you have a trusted partner in maximizing ticket sales and enhancing customer satisfaction.
                        </p>

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

                        <p>EteQ Group introduces the ePS (Electronic Personal Secretary), a cutting-edge solution that
                            offers personalized secretarial and administrative support with efficiency and optimization at
                            its core. The ePS excels in managing time, daily tasks, scheduling meetings, handling
                            correspondence, and taking notes.</p>
                        <p>Our Digital Personal Secretary leverages advanced data analysis techniques to prioritize tasks,
                            ensuring the most critical items are addressed promptly. It also has the capability to
                            automatically notify users about the status of important matters for seamless communication and
                            task management. EteQ Group is dedicated to revolutionizing personal and professional
                            organization, providing innovative solutions for enhanced productivity and effective time
                            management. With the ePS, you have a reliable partner in optimizing your daily operations and
                            priorities.
                        </p>



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

                        <p> EteQ Group proudly introduces the Digital Dermatologist, a groundbreaking system harnessing deep
                            learning techniques to diagnose skin diseases with remarkable accuracy. Our system has been
                            meticulously developed using extensive data and consultation with dermatologists, ensuring a
                            prognosis accuracy rate of up to 99.87%.</p>
                        <p>The Digital Dermatologist simplifies the diagnostic process, requiring nothing more than an image
                            captured by a camera to identify and classify skin diseases. EteQ Group is dedicated to
                            advancing healthcare through innovative technology, providing reliable and efficient solutions
                            for medical professionals and patients.
                            With our Digital Dermatologist, you have a trusted partner in achieving precise and timely skin
                            disease diagnoses, revolutionizing the field of dermatology and improving patient care.
                        </p>

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

                        <p>EteQ Group presents the Virtual CareTaker, an innovative deep learning-based surveillance
                            application designed for the continuous monitoring of children and older individuals. This
                            intelligent system employs advanced technology to recognize and analyze movements, promptly
                            alerting the designated owner in the event of any irregularity.</p>
                        <p>Our commitment to leveraging cutting-edge technology for the well-being of vulnerable populations
                            drives the development of Virtual CareTaker. EteQ Group is dedicated to ensuring the safety and
                            security of those in need through reliable and efficient monitoring solutions.
                            With the Virtual CareTaker, you have a trusted partner in providing constant care and peace of
                            mind for families and caregivers. EteQ Group's expertise in deep learning and surveillance
                            technology ensures a dependable and proactive approach to monitoring the welfare of your loved
                            ones.
                        </p>



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

                        <p> EteQ Group proudly presents Gal Guard, an intelligent mobile application created to empower
                            girls and women in challenging situations. This innovative app allows users to call the police
                            or request assistance by simply shaking their smartphone, triggering a seamless process of
                            collecting essential information and dispatching help to their exact location.</p>
                        <p> Our commitment to using technology for safety and well-being drives the development of Gal
                            Guard. EteQ Group is dedicated to providing a reliable and efficient solution for personal
                            safety, giving users peace of mind and a quick means to summon help in times of need.
                            With Gal Guard, you have a trusted partner in ensuring the safety of girls and women, promoting
                            security and peace of mind. EteQ Group's expertise in mobile app development and safety
                            technology underscores our commitment to creating a safer world for all.
                        </p>

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

                        <p>EteQ Group introduces the "Promoter," an advanced artificial sales promoter dedicated to
                            showcasing products through exhibitions, introductions, and generating public interest. This
                            Digital Promoter plays a pivotal role in establishing a positive brand presence and crafting
                            innovative marketing strategies.</p>
                        <p>With a focus on boosting brand visibility and engagement, EteQ Group's Promoter harnesses
                            cutting-edge technology to captivate audiences and drive marketing success. We are committed to
                            delivering tailored solutions that elevate marketing campaigns and foster brand growth.
                            The Promoter is your trusted partner for creating a lasting impact in the market, ensuring a
                            strong and innovative approach to product promotion. EteQ Group is here to help you achieve your
                            marketing goals and elevate your brand's presence.
                        </p>



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

                        <p> EteQ Group proudly introduces "The Recruiter," an intelligent recruitment system that
                            meticulously evaluates candidates' strengths and capabilities, utilizing predefined recruitment
                            appraisal parameters to identify the most suitable candidates for your organization.</p>
                        <p>Our commitment to leveraging advanced technology for effective talent acquisition underscores the
                            development of The Recruiter. EteQ Group is dedicated to streamlining the recruitment process,
                            ensuring a seamless and data-driven approach to identifying top talent.
                            With The Recruiter, you have a trusted partner in optimizing your recruitment efforts and
                            finding the perfect fit for your team. EteQ Group's expertise in recruitment technology ensures
                            a reliable and efficient solution for your talent acquisition needs.
                        </p>

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
                        <img src="{{ asset('uploads/employee_evaluation.jpg') }}" alt=""
                            class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>WHAT WE DO</h4> --}}
                        <h2>The Employee Evaluation Assistant</h2>

                        <p>EteQ Group proudly presents "The Employee Evaluation Assistant," a specialized system that
                            thoroughly assesses an employee's performance through the analysis of various evaluation
                            metrics. This solution takes into account relevant employee data to evaluate their commitment
                            and contribution to the organization or association.</p>
                        <p> Our commitment to leveraging technology for enhanced employee evaluation drives the development
                            of The Employee Evaluation Assistant. EteQ Group is dedicated to providing reliable and
                            efficient tools to help organizations make informed decisions regarding their workforce.
                            With The Employee Evaluation Assistant, you have a trusted partner in optimizing your employee
                            assessment processes and promoting a culture of excellence within your organization. EteQ
                            Group's expertise in HR technology ensures a comprehensive and data-driven approach to
                            performance evaluation.
                        </p>



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

                        <p> EteQ Group offers a robust Accounting Software solution that includes a comprehensive Chart of
                            Accounts and a Double Entry system. This software streamlines financial operations with features
                            for receiving, making payments, conducting contra transactions, and managing journal entries.
                        </p>
                        <p>Our commitment to providing efficient and user-friendly financial tools drives the development of
                            this Accounting Software. EteQ Group aims to empower businesses with accurate financial
                            management and reporting capabilities.
                            With our Accounting Software, you have a trusted partner in simplifying your financial processes
                            and ensuring compliance with accounting standards. EteQ Group's expertise in financial
                            technology guarantees a reliable and comprehensive solution for your accounting needs.
                        </p>

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
