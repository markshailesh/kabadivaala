@extends('frontend.layouts.app')
@section('content')
    <!-- Hero Area -->

    <div class="homepage-slides">
        <div class="single-slide-item">
            <div class="image-layer" style="background-image: url({{ asset('frontend/assets/img/slider/slide-1.jpg') }});">
                <div class="overlay"></div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8 wow fadeInUp animated" data-wow-delay=".2s">
                        <div class="hero-area-content">
                            <div class="section-title">
                                <h6>welcome to Kabadivaala</h6>
                                <h1>Your Trusted Scrap Collection Partner!</h1>
                            </div>
                            <p>Kabadivaala is a reliable and eco-friendly scrap collection service that makes waste
                                management easy and rewarding. We collect and recycle paper, plastic, metal, and e-waste,
                                ensuring a cleaner environment and a sustainable future.</p>
                            <a href="{{route('about')}}" class="main-btn primary mt-30">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide-item hero-area-bg-2">
            <div class="image-layer" style="background-image: url({{ asset('frontend/assets/img/slider/slide-2.jpg') }});">
                <div class="overlay"></div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-9 wow fadeInUp animated" data-wow-delay=".2s">
                        <div class="hero-area-content">
                            <div class="section-title">
                                <h6>welcome to Kabadivaala</h6>
                                <h1>Sell Your Scrap at Your Doorstep</h1>
                            </div>
                            <p>Easily sell your scrap from the comfort of your home! We offer doorstep pickup for all types
                                of recyclables, providing a hassle-free, eco-friendly way to dispose of your waste and earn
                                some cash. Simply schedule a pickup, and we’ll handle the rest!</p>
                            <a href="{{route('about')}}" class="main-btn primary mt-30">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="about-content-wrap">
                        <div class="section-title mb-0">
                            <h6>About Us</h6>
                            <h2>We are scrap and kabad buyer in Varanasi</h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="about-content-left">
                                        <p>KabadiVaala is a online platform by which people can sell their scraps by filling
                                            simple schedule pickup form hassle free. We are Varanasi Base Company and Our
                                            Services are avialable in Varanasi.</p>
                                        <p>You can do booking a pick up call through our website at your convenient date and
                                            time slot. Our Scrap Picker Guy will come on assigned date at your doorstep free
                                            of cost and buy all scrap available at a pre-defined rate list available on our
                                            website.</p>
                                        <p>All weighment will be done through digital weighing scale. Payments will be made
                                            to you through mobile wallet or cash. You have also the option to donate the
                                            scrap. So, you can sell all your scrap, hassle free.</p>
                                        <div class="row mt-30">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="las la-business-time"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>Ontime <br>Scheduled</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="las la-stopwatch"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>24/7 <br>Services</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="las la-money-check-alt"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>Affordable <br>Cost</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay=".4s">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/about/about.jpg') }}" alt="">
                        <div class="about-counter">
                            <div class="counter-icon">
                                <img src="{{ asset('frontend/assets/img/icon/customer-service.png') }}" alt="">
                            </div>
                            <div class="counter-number">
                                <span class="counting" data-counterup-nums="154">4754</span>
                            </div>
                            <h6>Happy Customers</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Service Area-->
    <div class="service-area sky-bg section-padding pb-50">
        <div class="container">
            <div class="section-title">
                <h6>What we’re doing</h6>
                <h2>Services We Offer</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms"
                    style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <!--Services Single-->
                    <div class="services-two_single">
                        <div class="services-two_img-box">
                            <div class="services-two_img">
                                <img src="{{ asset('frontend/assets/img/service/service_1.jpg') }}" alt="">
                            </div>
                            <div class="services-two_icon">
                                <img src="{{ asset('frontend/assets/img/icon/paper.png') }}" alt="">
                            </div>
                        </div>
                        <div class="services-two_content">
                            <h3 class="services-two_title"><a href="paper_recycle.php">Capboard/Paper Recycling</a>
                            </h3>
                            <p class="services-two_text">Lorem ipsum dolor sit donec amet tristique ante vel sem
                                dictum is rhoncus elit sed.</p>
                            <div class="services-two_bottom">
                                <a href="paper_recycle.php" class="services-one_btn">Read More</a>
                                <a href="paper_recycle.php" class="services-one_arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                    style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <!--Services Two Single-->
                    <div class="services-two_single">
                        <div class="services-two_img-box">
                            <div class="services-two_img">
                                <img src="{{ asset('frontend/assets/img/service/service_2.jpg') }}" alt="">
                            </div>
                            <div class="services-two_icon">
                                <img src="{{ asset('frontend/assets/img/icon/plastic.png') }}" alt="">
                            </div>
                        </div>
                        <div class="services-two_content">
                            <h3 class="services-two_title"><a href="plastic_recycle.php">Plastic Recycling</a>
                            </h3>
                            <p class="services-two_text">Lorem ipsum dolor sit donec amet tristique ante vel sem
                                dictum is rhoncus elit sed.</p>
                            <div class="services-two_bottom">
                                <a href="plastic_recycle.php" class="services-one_btn">Read More</a>
                                <a href="plastic_recycle.php" class="services-one_arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                    style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <!--Services Two Single-->
                    <div class="services-two_single">
                        <div class="services-two_img-box">
                            <div class="services-two_img">
                                <img src="{{ asset('frontend/assets/img/service/service_3.jpg') }}" alt="">
                            </div>
                            <div class="services-two_icon">
                                <img src="{{ asset('frontend/assets/img/icon/glass.png') }}" alt="">
                            </div>
                        </div>
                        <div class="services-two_content">
                            <h3 class="services-two_title"><a href="glass_recycle.php">Glass Recycling</a></h3>
                            <p class="services-two_text">Lorem ipsum dolor sit donec amet tristique ante vel sem
                                dictum is rhoncus elit sed.</p>
                            <div class="services-two_bottom">
                                <a href="glass_recycle.php" class="services-one_btn">Read More</a>
                                <a href="glass_recycle.php" class="services-one_arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="service-note">
                        <p>We Provide Various Category Recycling Services. <a href="services.php">Explore Our
                                Services</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Section  -->
    <div class="process-area-2 section-padding pb-60">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 text-center">
                    <div class="section-title">
                        <h6>Follow Simple Steps</h6>
                        <h2>Our Working Process</h2>
                    </div>
                </div>
            </div>
            <div class="process-wrap">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="single-process-wrap">
                            <div class="process-icon dark-bg">
                                <img src="{{ asset('frontend/assets/img/icon/collection.png') }}" alt="">
                            </div>
                            <div class="process-content">
                                <h3>Book a Pickup</h3>
                                <p>You can Book through our Website or via WhatsApp.</p>
                            </div>
                            <div class="counting-box"><span>01</span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="single-process-wrap">
                            <div class="process-icon dark-bg">
                                <img src="{{ asset('frontend/assets/img/icon/pickup.png') }}" alt="">
                            </div>
                            <div class="process-content">
                                <h3>Pickup from your Doorstep</h3>
                                <p>We have scheduled an appointment for an executive to arrive at your doorstep on the date
                                    and time of your choosing.</p>
                            </div>
                            <div class="counting-box top"><span>02</span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="single-process-wrap">
                            <div class="process-icon dark-bg">
                                <img src="{{ asset('frontend/assets/img/icon/processing.png') }}" alt="">
                            </div>
                            <div class="process-content">
                                <h3>Digital Weighing Scale</h3>
                                <p>
                                    Recycling is the process of making used or unwanted products
                                    into new.
                                </p>
                            </div>
                            <div class="counting-box"><span>03</span></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".8s">
                        <div class="single-process-wrap">
                            <div class="process-icon dark-bg">
                                <img src="{{ asset('frontend/assets/img/icon/recycling.png') }}" alt="">
                            </div>
                            <div class="process-content">
                                <h3>Get Paid</h3>
                                <p>Get paid conveniently with our wallet system that offers multiple payment options to suit
                                    your preferences.</p>
                            </div>
                            <div class="counting-box top"><span>04</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section  -->

    <!-- CTA -->
    <div class="cta-area-2 dark-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="section-title">
                        <h3>Let's Get Your Project Started Today!</h3>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <h3 class="text-white text-center" style="line-height: 1.65;">अगर आप किसी भी प्रकार के पुराने औद्योगिक
                        स्क्रैप, औद्योगिक अपशिष्ट, चिकित्सा मशीनरी और स्क्रैप धातु के लिए सर्वोत्तम मूल्य चाहते हैं, तो आज
                        ही हमसे संपर्क करें।
                        <br> Get Perfect Scrap Solution for Any Inquiry.
                    </h3>
                    <div class="cta-btn-2 mt-20  text-center">
                        <a href="contact.html" class="main-btn white">Sell Scrap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Section  -->
    <div class="project-area gray-bg section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h6>Revolution Ongoing Development</h6>
                        <h2>Recenty Recycling Solutions And Waste Management</h2>
                    </div>
                </div>
            </div>
            <div class="project-wrap owl-carousel">
                <div class="project-single">
                    <div class="project-img">
                        <img src="{{ asset('frontend/assets/img/project/1.jpg') }}" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-cat">
                            <a href="project-details.php">Residential, </a>
                            <a href="project-details.php">Commerical</a>
                        </div>
                        <div class="project-title">
                            <h4>Paper Recycling Services</h4>
                        </div>
                        <div class="project-desc">
                            <p>Paper makes up 23 percent of municipal solid waste generated each year, more than
                                any other material.</p>
                        </div>
                        <div class="project-more">
                            <a class="main-btn border-btn" href="project-details.php">explore more <i
                                    class="las la-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-single">
                    <div class="project-img">
                        <img src="{{ asset('frontend/assets/img/project/2.jpg') }}" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-cat">
                            <a href="project-details.php">Commercial, </a>
                            <a href="project-details.php">Industrial</a>
                        </div>
                        <div class="project-title">
                            <h4>Plastic Recycling Services</h4>
                        </div>
                        <div class="project-desc">
                            <p>More than 35 million tons of plastics were generated in the United States and
                                only 8.7 percent was recycled. </p>
                        </div>
                        <div class="project-more">
                            <a class="main-btn border-btn" href="project-details.php">explore more <i
                                    class="las la-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-single">
                    <div class="project-img">
                        <img src="{{ asset('frontend/assets/img/project/3.jpg') }}" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-cat">
                            <a href="project-details.php">Industrial, </a>
                            <a href="project-details.php">Commercial</a>
                        </div>
                        <div class="project-title">
                            <h4>Metal Recycling Services</h4>
                        </div>
                        <div class="project-desc">
                            <p>Their primary purpose is to ship normal packages in basically the same ways that the
                                postal service does.</p>
                        </div>
                        <div class="project-more">
                            <a class="main-btn border-btn" href="project-details.php">explore more <i
                                    class="las la-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-single">
                    <div class="project-img">
                        <img src="{{ asset('frontend/assets/img/project/4.jpg') }}" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-cat">
                            <a href="project-details.php">Residential, </a>
                            <a href="project-details.php">Industrial</a>
                        </div>
                        <div class="project-title">
                            <h4>Aluminium Recycling Services</h4>
                        </div>
                        <div class="project-desc">
                            <p>In 2018, 3.9 million tons of aluminum municipal waste was generated. The total
                                recycling rate was 34.9 percent. </p>
                        </div>
                        <div class="project-more">
                            <a class="main-btn border-btn" href="project-details.php">explore more <i
                                    class="las la-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Choose Us Area  -->
    <div class="choose_us section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="choose_us_left">
                        <div class="choose_us_img">
                            <img src="{{ asset('frontend/assets/img/choose_us.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="choose_us_right">
                        <div class="section-title text-left">
                            <h6>Our Core Feature</h6>
                            <h2>Why You Should Take Our <br> Eco-friendly Services?</h2>
                        </div>
                        <p class="choose_us_right-text">There might be a lot of talk about reusing and recycling these days
                            but taking discarded materials and turning them into something new is by no means a modern
                            concept. People have been discarding and reusing materials for a very long time ago.</p>
                        <ul class="list-unstyled choose_us_points">
                            <li>
                                <div class="icon">
                                    <i class="las la-check"></i>
                                </div>
                                <div class="text">
                                    <p>Convenient Pickup</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="las la-check"></i>
                                </div>
                                <div class="text">
                                    <p>Reducing Waste</p>
                                </div>
                            </li>
                        </ul>

                        <div class="progress-bar-area">
                            <div class="single-bar-item">
                                <h4>Recycling Service</h4>
                                <div id="bar1" class="barfiller">
                                    <span class="tip">90%</span>
                                    <span class="fill" data-percentage="90"></span>
                                </div>
                            </div>

                            <div class="single-bar-item">
                                <h4>Waste Management</h4>
                                <div id="bar2" class="barfiller">
                                    <span class="tip">70%</span>
                                    <span class="fill" data-percentage="70"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section  -->
    <div class="contact-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="contact-wrap">
                        <div class="section-title">
                            <h6>Ecology Survive With Sustainable service!</h6>
                            <h2 class="text-white">Time Is The Best Way To Think About Recycling</h2>
                        </div>
                        <div class="contact-desc">
                            <p class="text-white">
                                Recycling is not just learning which bin to throw an item into. It’s about appreciating the
                                resources that went into making the item and understanding the value of these materials. You
                                will truly understand recycling if you change your mindset.
                            </p>
                        </div>
                        <div class="contact-list-wrap">
                            <div class="row">
                                <div class="col-12 col-md-4 col-sm-6 col-lg-6">
                                    <ul class="list-unstyled contact-list">
                                        <li><i class="las la-check"></i> Reduce Greenhouse Effect</li>
                                        <li><i class="las la-check"></i>Conserv Natural Resources</li>
                                        <li><i class="las la-check"></i>Reduces Carbon Emissions</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4 col-sm-6 col-lg-6">
                                    <ul class="list-unstyled contact-list">
                                        <li><i class="las la-check"></i>Protects Ecosystems </li>
                                        <li><i class="las la-check"></i>Economic Benefits.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact-btn">
                            <a class="main-btn white" href="contact.php">Contact Us</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1 wow fadeInUp" data-wow-delay=".4s">
                    <div class="quotation-wrap">
                        <div class="quotation-inner">
                            <h5 class="quotation-heading">Request A Quote</h5>
                            <p class="quotation-desc">
                                There are various ways to reduce waste so you can have the peace of mind that you’re making
                                a positive impact.
                            </p>
                            <form action="{{ route('enquiry.store') }}" method="POST" onsubmit="return checkform(this);">
                            @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label>Name
                                        </label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter Name"
                                            required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Phone
                                        </label>
                                        <input class="form-control" type="number" name="phone" placeholder="Enter Phone no."
                                            required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Pickup Address
                                        </label>
                                        <input class="form-control" type="text" name="email" placeholder="Enter Pickup Address"
                                            required="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-20">
                                        <label>Scrap Type
                                        </label>
                                        <div class="quotation-item">
                                            <select class="form-dropdown form-control select_option"
                                                 data-component="dropdown" name="scrap_type">
                                                <option value="0"> Select Scrap Type </option>
                                                <option value="1"> Paper </option>
                                                <option value="2"> Metals </option>
                                                <option value="3"> Plastic </option>
                                                <option value="4"> Electronics </option>
                                                <option value="5"> E- Waste </option>
                                                <option value="6"> Bulk Scrap </option>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6">
                                        <label>Pickup Date
                                        </label>
                                        <input class="form-control" type="date" name="pickup_date" required="">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label>Pickup Time
                                        </label>
                                        <input class="form-control" type="time" name="pickup_time" required="">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="main-btn primary">submit request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Testimonial Area-->
    <div class="testimonial-area-2 section-padding">
        <div class="testimonial-map"
            style="background-image: url({{ asset('frontend/assets/img/testimonial-map.png') }})"></div>
        <div class="container">
            <div class="section-title text-center">
                <h6>our feedback list</h6>
                <h2>What They’re Saying</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial_carousel owl-theme owl-carousel">
                        <!--Testimonial One Single-->
                        <div class="testimonial_single">
                            <p class="testimonial_rating">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </p>
                            <p class="testimonial_text">I like this service. Some improvments, Make it availavle under alt
                                insert generate Make it easier to choose style.</p>
                            <div class="testimonial_author">
                                <div class="testimonial_author-img">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-author-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_author-details">
                                    <h4 class="testimonial_author-name">Pat Cummins</h4>
                                    <p class="testimonial_author-title">Customer</p>
                                </div>
                            </div>
                            <div class="testimonial_quote-icon">
                                <img src="{{ asset('frontend/assets/img/icon/quote-icon.png') }}" alt="">
                            </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial_single">
                            <p class="testimonial_rating">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </p>
                            <p class="testimonial_text">I like this service. Some improvments, Make it availavle under alt
                                insert generate Make it easier to choose style.</p>
                            <div class="testimonial_author">
                                <div class="testimonial_author-img">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-author-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_author-details">
                                    <h4 class="testimonial_author-name">Mark Wood</h4>
                                    <p class="testimonial_author-title">Customer</p>
                                </div>
                            </div>
                            <div class="testimonial_quote-icon">
                                <img src="{{ asset('frontend/assets/img/icon/quote-icon.png') }}" alt="">
                            </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial_single">
                            <p class="testimonial_rating">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                            </p>
                            <p class="testimonial_text">I like this service. Some improvments, Make it availavle under alt
                                insert generate Make it easier to choose style.</p>
                            <div class="testimonial_author">
                                <div class="testimonial_author-img">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-author-3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_author-details">
                                    <h4 class="testimonial_author-name">Molina Natasha</h4>
                                    <p class="testimonial_author-title">Customer</p>
                                </div>
                            </div>
                            <div class="testimonial_quote-icon">
                                <img src="{{ asset('frontend/assets/img/icon/quote-icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section-->
    <div class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="section-title">
                        <h6>Read Blog About Recycling</h6>
                        <h2>Our Latest News & Articles</h2>
                    </div>
                </div>

                <div class="col-lg-6 text-end"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="single-blog-item">
                        <div class="blog-bg">
                            <img src="{{ asset('frontend/assets/img/blog/1.jpg') }}" alt="">
                            <span class="blog-date">25 Feb</span>
                        </div>
                        <div class="blog-content">
                            <p class="blog-meta">
                                <i class="las la-user-circle"></i>Admin
                                <i class="las la-comments"></i>13
                            </p>
                            <h5>
                                <a href="blog-details.php">Sainsbury’s Announces New In-Store Wastage Recycling
                                    Scheme</a>
                            </h5>
                            <p>
                                There are some reason Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Dolorem, facilis perferendis ipsam.
                            </p>
                            <a href="blog-details.php" class="read-more">Read More</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".4s">
                    <div class="single-blog-item">
                        <div class="blog-bg">
                            <img src="{{ asset('frontend/assets/img/blog/2.jpg') }}" alt="">
                            <span class="blog-date">07 Mar</span>
                        </div>
                        <div class="blog-content">
                            <p class="blog-meta">
                                <i class="las la-user-circle"></i>Admin
                                <i class="las la-comments"></i>13
                            </p>
                            <h5>
                                <a href="blog-details.php">Plastic Free July: Who produces the most plastic waste?
                                </a>
                            </h5>
                            <p>
                                There are some reason Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Dolorem, facilis perferendis ipsam.
                            </p>
                            <a href="blog-details.php" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".6s">
                    <div class="single-blog-item">
                        <div class="blog-bg">
                            <img src="{{ asset('frontend/assets/img/blog/3.jpg') }}" alt="">
                            <span class="blog-date">30 Apr</span>
                        </div>
                        <div class="blog-content">
                            <p class="blog-meta">
                                <i class="las la-user-circle"></i>Admin
                                <i class="las la-comments"></i>13
                            </p>
                            <h5>
                                <a href="blog-details.php">Government figures show declining recycling rates in the
                                    UK</a>
                            </h5>
                            <p>
                                There are some reason Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Dolorem, facilis perferendis ipsam.
                            </p>
                            <a href="blog-details.php" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
