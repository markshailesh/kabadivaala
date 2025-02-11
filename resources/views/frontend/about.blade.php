@extends('frontend.layouts.app')
@section('content')

    <!-- Breadcroumb Area -->
	<div class="breadcroumb-area bread-bg">
		<div class="overlay-2"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title text-center">
						<h1>About</h1>
						<h6><a href="index.php">Home</a> / About</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

    
    <!-- About Section  -->

    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
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
                                                            <h5>Ontime Scheduled</h5>
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
                                                            <h5>24/7 Services</h5>
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
                                                            <h5>Affordable Cost</h5>
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
                        <img src="{{ asset('frontend/assets/img/about/about.jpg')}}" alt="">
                        <div class="about-counter">
                            <div class="counter-icon">
                                <img src="{{ asset('frontend/assets/img/icon/customer-service.png')}}" alt="">
                            </div>
                            <div class="counter-number">
                                <span class="counting" data-counterup-nums="10">500</span>
                            </div>
                            <h6>Happy Customers</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Service Area-->

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
                        <br> Get Perfect Scrap Solution for Any Enquiry.
                    </h3>
                    <div class="cta-btn-2 mt-20  text-center">
                        <a href="{{route('sell_scrap')}}" class="main-btn white">Sell Scrap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Testimonial Area-->
    <div class="testimonial-area-2 bg-white section-padding">
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
                            <p class="testimonial_text">Kabadivaala has truly revolutionized the way we dispose of scrap! Their doorstep pickup service is incredibly convenient, and the entire process is seamless. The staff is professional, punctual, and ensures proper digital weighing, so there's complete transparency. I appreciate their initiative to promote recycling and sustainability.</p>
                            <div class="testimonial_author">
                                <div class="testimonial_author-img">
                                    <img src="{{ asset('frontend/assets/img/user.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_author-details">
                                    <h4 class="testimonial_author-name">Naveen Gupta</h4>
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
                            <p class="testimonial_text">I had an amazing experience with Kabadivaala! Their doorstep pickup service is incredibly convenient, and scheduling a pickup was super easy through their website. The team arrived on time, used digital weighing scales for accuracy, and provided instant payment.</p>
                            <div class="testimonial_author">
                                <div class="testimonial_author-img">
                                    <img src="{{ asset('frontend/assets/img/user.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_author-details">
                                    <h4 class="testimonial_author-name">Ashutosh Mishra</h4>
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
                            <p class="testimonial_text">Absolutely fantastic service! Kabadivaala has made recycling so easy and hassle-free. I was able to schedule a pickup from my home with just a few clicks on their website. The team arrived on time and was very professional. They weighed the scrap right in front of me using a digital scale, ensuring everything was fair and transparent. I was paid instantly via mobile wallet, which was super convenient.</p>
                            <div class="testimonial_author">
                                <div class="testimonial_author-img">
                                    <img src="{{ asset('frontend/assets/img/user.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial_author-details">
                                    <h4 class="testimonial_author-name">Neelesh Krishna</h4>
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

    <!--Team Start-->
 	<!-- <div class="team-section section-padding pb-60">
        <div class="container">
            <div class="section-title text-center">
                <h6>Professional Worker</h6>
                <h2>Meet Our Experts</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">                    
                    <div class="team-single">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/1.jpg')}}" alt="">
                            <ul class="list-unstyled team-social">
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-facebook"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Joseph Gill</h4>
                            <p class="team-title">Recycling Worker</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">                    
                    <div class="team-single">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/2.jpg')}}" alt="">
                            <ul class="list-unstyled team-social">
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-facebook"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Sarah Albert</h4>
                            <p class="team-title">Recycling Worker</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">                    
                    <div class="team-single">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/3.jpg')}}" alt="">
                            <ul class="list-unstyled team-social">
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-facebook"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Alex Carry</h4>
                            <p class="team-title">Recycling Worker</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">                    
                    <div class="team-single">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/4.jpg')}}" alt="">
                            <ul class="list-unstyled team-social">
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-facebook"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Watson Craig</h4>
                            <p class="team-title">Recycling Worker</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    @endsection