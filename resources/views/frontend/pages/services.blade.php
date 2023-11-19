@extends('frontend.layouts.master')
@section('title')
    Services - Eteqgroup
@endsection
@section('frontend_panel')
    <div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Service</h3>
                <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we
                    prepare search engine optimization, social media support, we provide corporate identity and graphic
                    design services.</p>
            </div><!-- end title -->


            {{-- 1 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>Software Solution</h2>
                        <p> EteQ Group is at the forefront of providing cutting-edge technology to develop tailored software
                            solutions that seamlessly adapt to evolving customer demands. Our commitment to flawless
                            execution ensures that projects are delivered with precision and excellence.</p>
                        <p>We specialize in harnessing state-of-the-art technology to create custom software solutions that
                            cater to the dynamic needs of our clients. Whether it's developing innovative applications,
                            optimizing existing systems, or integrating sophisticated software, EteQ Group guarantees a high
                            level of craftsmanship.
                            Our team of experts works tirelessly to keep up with the ever-changing tech landscape, ensuring
                            that our solutions remain at the forefront of innovation. EteQ Group is your trusted partner for
                            crafting software that not only meets current demands but also stays ahead of the curve,
                            providing solutions for tomorrow's challenges.
                        </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/images.jpg') }}" alt="" class="img-responsive img-rounded">
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
                        <img src="{{ asset('uploads/download.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Cloud Services</h2>
                        <p>EteQ Group is your go-to provider for AWS managed services, offering seamless AWS migration and
                            optimization solutions. Our team of experts is well-versed in harnessing the power of Amazon Web
                            Services to meet the specific needs of your organization.</p>
                        <p> We excel in managing AWS cloud infrastructure, ensuring your systems run smoothly and
                            efficiently. Our migration services facilitate a smooth transition to AWS, minimizing downtime
                            and disruptions. Additionally, our optimization strategies help you maximize the benefits of AWS
                            while controlling costs.
                            At EteQ Group, we understand the importance of leveraging AWS to its fullest potential, and
                            we're dedicated to assisting your business in achieving its goals through these services.
                            Whether you're looking to migrate to AWS or enhance your current AWS infrastructure, EteQ Group
                            is your trusted partner for success.
                        </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            {{-- 3 --}}
            <hr class="hr1">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        {{-- <h4>About Us</h4> --}}
                        <h2>Project Management Services</h2>


                        <p> EteQ Group specializes in providing project management services tailored to the unique
                            requirements of the IT and construction industries. With a team of experienced professionals, we
                            are committed to delivering projects on time, within budget, and to the highest quality
                            standards.</p>
                        <p> In the IT sector, EteQ Group offers end-to-end project management solutions, excelling in
                            complex software development, infrastructure upgrades, and technology integrations. For the
                            construction industry, our services encompass residential developments and large-scale
                            infrastructure projects, ensuring efficient execution and regulatory compliance.
                            Our dedication to client satisfaction is unwavering, emphasizing effective communication,
                            transparency, and adaptability to evolving project needs. Whether in IT or construction,
                            partnering with EteQ Group means a dedicated team guiding your project to success, turning your
                            vision into reality, on time and within budget.
                        </p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/project_management.jpg') }}" alt=""
                            class="img-responsive img-rounded">
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
                        <img src="{{ asset('uploads/data_analysis.jpg') }}" alt=""
                            class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Data Analysis</h2>

                        <p>EteQ Group delivers innovative and customized data science solutions, harnessing various data
                            science tools and technologies. We empower enterprises to make timely, informed decisions by
                            providing expertise in big data analysis and visualization.</p>
                        <p> Our team excels in leveraging the power of data science to tailor solutions that address
                            specific business needs. Whether it's predictive analytics, machine learning, or data-driven
                            insights, EteQ Group is dedicated to helping organizations unlock the potential of their data.
                            We understand the critical role of data analysis and visualization in modern business
                            strategies, and our mission is to enable companies to harness the full potential of their data
                            assets. EteQ Group is your trusted partner in the journey to data-driven decision-making and
                            innovation.
                        </p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>AI/ML</h2>
                        <p> EteQ Group provides a cutting-edge enterprise AI platform that democratizes data science,
                            automating the entire journey of creating, deploying, and managing artificial intelligence and
                            machine learning solutions at scale. Our platform empowers organizations to harness the full
                            potential of AI with ease and efficiency.</p>
                        <p> With EteQ Group's advanced AI platform, businesses can seamlessly integrate AI and machine
                            learning into their operations, enhancing decision-making, and driving innovation. We are
                            committed to simplifying and accelerating the adoption of AI technologies to keep you at the
                            forefront of industry trends.
                            Our mission is to enable enterprises to thrive in the era of artificial intelligence, and we
                            stand as your trusted partner in achieving AI-driven success. EteQ Group is here to support your
                            journey towards AI excellence and automation.
                        </p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('uploads/AI.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">

            <div class="text-center" style="margin-top: 20px">
                <a data-scroll href="{{ route('features') }}" class="btn btn-light btn-radius btn-brd">View Our
                    Portfolio</a>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
