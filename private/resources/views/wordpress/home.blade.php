
{{get_header()}}

    <div class="preLoader"></div>

    
    <header class="header">
        <div class="header-top" data-animate="fadeInDown" data-delay=".5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="header-info text-center text-md-left">
                            @if (Auth::check())
                            <span>Welcome again {{ Auth::user()->name }}, to enter the work area<a href="{{url('admin')}}">click here.</a></span>
                            @else
                            <span>Are you one of the InfoWifi workers?<a href="{{url('admin')}}">Sign In</a></span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header-top-right d-flex align-items-center justify-content-center justify-content-md-end">
                            <form class="parsley-validate d-flex position-relative" action="#">
                                <input type="text" placeholder="I am looking for" required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <!--<div class="client-area position-relative">-->
                            <!--    <span id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account <i class="fa fa-caret-down"></i></span>-->
                            <!--    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">-->
                            <!--        <a class="dropdown-item" href="{{url('admin')}}">Sign In</a>-->
                            <!--        <a class="dropdown-item" href="#">Sign Up</a>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            @php echo do_shortcode('[gtranslate]'); @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header" data-animate="fadeInUp" data-delay=".9">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-9">
                        
                        <div class="logo">
                            <a href=" @php echo get_page_link(get_page_by_title('Home')->ID) @endphp">
                                <img src=" @php echo get_template_directory_uri(); @endphp/img/logo.png" data-rjs="2" alt="VPNet">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-5 col-sm-2 col-3">
                        
                    {{
                    get_template_part('nav')
                    }}

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-none d-sm-block">
                        
                        <div class="header-call text-right">
                            <span>Call Now</span>
                            <a href="tel:+1234567890">(+1) 234-567-8900</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <section>
        <div class="main-slider swiper-container h600" style="">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide position-relative">
                    <img src="@php echo get_template_directory_uri();@endphp/img/slide1.jpg" data-rjs="2" alt="">
                    <div class="slide-content container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="slide-content-inner">
                                    <h4 data-animate="fadeInUp" data-delay=".05">Best Internet Service Provider In USA</h4>
                                    <h2 data-animate="fadeInUp" data-delay=".3">Don’t Suffer The Buffer Speeds Up to 1 Gbps with Unlimited Data</h2>
                                    <a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="swiper-slide position-relative">
                    <img src="@php echo get_template_directory_uri();@endphp/img/slide2.jpg" data-rjs="2" alt="">
                    <div class="slide-content container">
                        <div class="row align-items-center">
                            <div class=" col-xl-6 col-lg-8">
                                <div class="slide-content-inner">
                                    <h4 data-animate="fadeInUp" data-delay=".05">There is Now Way to Become a Internet User</h4>
                                    <h2 data-animate="fadeInUp" data-delay=".3">Now a Days Internet Is a Useful Thing, Not Passion</h2>
                                    <a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <!-- End of Single slide --></div>
            
            <div class="swiper-pagination main-slider-pagination"></div>
        </div>
    </section>
    
    
    
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row align-items-center pb-80">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="@php echo get_template_directory_uri();@endphp/img/number-one.png" alt="" data-rjs="2">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                        <h2 class="mb-3">We are number one internet service provider company in Europe.</h2>
                        <p>As cloud hosting expands as an application hosting model, connectivity becomes more and more central to IT solutions. Having a good internet service is key to guarantee the connection between your headquarters and your applications, and the connection of your applications to the network. A basic aspect for business performance and productivity. We are experts in the design of network and connectivity solutions that guarantee security, availability and speed.</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/setup.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Free Installations &amp; Setup</h4>
                            <p>Choose your needs and we take care of everything.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/download.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Up to 1 Gpbs Download Speed</h4>
                            <p>The speed of DSL technology, without wires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/support.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>24/7 Customer Support</h4>
                            <p>Customer service at any time. We always watch over your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="theme-bg-overlay bg-img-md-none pt-120 pb-90" data-bg-img="@php echo get_template_directory_uri();@endphp/img/rocket.jpg" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Services We Provide</h2>
                        <p>We offer high quality services and personalized 24h tracking. Our goal is to achieve the greatest tailoring of our customers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="@php echo get_template_directory_uri();@endphp/img/icons/earth.svg" alt="" class="svg">
                        <h4>High Speed Internet</h4>
                        <p>LTE connection speed of up to 50 Mbps: the latest Wifi DSL speed.</p>
                        <a href="internet.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".4">
                        <img src="@php echo get_template_directory_uri();@endphp/img/icons/phone.svg" alt="" class="svg">
                        <h4>Phone Service</h4>
                        <p>The 4G arrives where the cable cannot reach, allowing mobile connections</p>
                        <a href="mobile.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".7">
                        <img src="@php echo get_template_directory_uri();@endphp/img/icons/tv.svg" alt="" class="svg">
                        <h4>Cable TV</h4>
                        <p>Get the most out of your smart tv with a unique Wi-Fi connection.</p>
                        <a href="cable-tv.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay="1">
                        <img src="@php echo get_template_directory_uri();@endphp/img/icons/server.svg" alt="" class="svg">
                        <h4>Servers</h4>
                        <p>Get Internet access with VPN networks and with any web hosting.</p>
                        <a href="dedicated-server.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Internet at the best price</h2>
                        <p>Here we present several types of generalized packages, any modification can be consulted with our technical team.</p>
                    </div>
                </div>
            </div>
            
            
            <div class="row pb-90">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".1">
                        <h4>Personal Pack</h4>
                        <span>for personal user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>20 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>01 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>20.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".4">
                        <span class="pupular-pack">Most popular package</span>
                        <h4>Family Pack</h4>
                        <span>for family user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>30 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>02 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>30.00 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".7">
                        <h4>Business Pack</h4>
                        <span>for business user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>35 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>03 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>39.99 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay="1">
                        <h4>Corporate Pack</h4>
                        <span>for corporate user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>50 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>Unlimited</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>85.00 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
            </div>
            

            
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>All Plans Included</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".05">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/ftp.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Own FTP Server</h4>
                            <p>Web hosting package with a European server</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".2">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/upgrade.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Upgrade or Downgrade</h4>
                            <p>In the list of user accounts, click the account you want to upgrade or downgrade.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".35">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/data.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>No Hard Data Limit</h4>
                            <p>There is no limit to the amount of data you can use each month. Your plan only includes an established download speed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".5">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/lock.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Lock in Low Rates</h4>
                            <p>A fixed or variable rate allows you to keep the rate constant throughout the rental; It is generally a good choice if interest is low.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".65">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/cloud.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Video Streaming</h4>
                            <p>Live video streaming is incredibly popular, millions of users stream and consume countless hours of recording and viewing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".8">
                        <div class="single-feature-img">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/access.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Access to All Website</h4>
                            <p>SSL security certificates, secure and accessible websites.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        <!-- End of Packages Includes --></div>
    </section>
    

    
    <section class="theme-bg-overlay bg-img-xs-none pt-120 pb-120" data-bg-img="@php echo get_template_directory_uri();@endphp/img/earth.jpg" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>What Our Client’s Say</h2>
                        <p>We are characterized by an excellent deal with our customers and our results support us.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    
                    <div class="review-slider-wraper position-relative">
                        <div class="swiper-container review-slider">
                            <div class="swiper-wrapper">
                                
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>Excellent work group, they performed the entire installation of my server adapting to my needs. Very satisfied</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="@php echo get_template_directory_uri();@endphp/img/authors/female.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>Maria Martínez</strong> Santa Fe, Granada</span>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>High quality products. <br>Excellent technical service</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="@php echo get_template_directory_uri();@endphp/img/authors/male.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>Sergio Miranda</strong> Córdoba, Andalucía</span>
                                        </div>
                                    </div>
                                </div>
                                

                                
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>I would highlight the great resolution of problems, and good customer service. It is a company of great quality and with a lot of future.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="@php echo get_template_directory_uri();@endphp/img/authors/female.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>Ana Hernández</strong>  Madrid, Spain</span>
                                        </div>
                                    </div>
                                </div>
                            
                                
                            <!-- End of Single Review --></div>
                        </div>
                        
                        
                        <div class="swiper-button-next next-review">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-review">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                    
                <!-- End of Review Slider --></div>
            </div>
        </div>
    </section>
    

    
    <section class="pt-120 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq pb-50" data-animate="fadeInUp" data-delay=".1">
                        <div class="section-title">
                            <h2>Frequently Asked Questions</h2>
                            <p>If you have any questions, do not forget to consult with us.</p>
                        </div>
                        <div class="accordion" id="accordionFaq">
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is the money back guarantee?</h3>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span> If you are not completely satisfied with the service that InfoWifi offers you, you can request the cancellation of the service during the first month, and we will refund your money in full. Put InfoWifi to the test. It will not cost you anything.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Do you offer Internet connection service?</h3>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span>In InfoWifi we offer hosting, that is, we put your website on the Internet permanently: 24 hours a day, 365 days a year. But not the access service, that is, we do not provide connection from your home or office to the Internet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I transfer generic domains to InfoWifi?</h3>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span>The domain must be unlocked. If you have a control panel, unlock it or contact your current registrar to remove the lock. You can check if the domain is blocked and what is the e-mail of the administrative contact by making a Whois of the domain
                                                            For security reasons, generic domains (.com, .net, .org, .info, .biz ...) have an authorization code, called Auth Code, that we need to know to request the transfer. This is a code that your current registrar must provide.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="popup-video mb-50" data-animate="fadeInUp" data-delay=".4">
                        <img src="@php echo get_template_directory_uri();@endphp/img/video-thumb.jpg" data-rjs="2" alt="">
                        <a href="https://www.youtube.com/watch?v=6ZfuNTqbHE8" class="youtube-popup play-btn ripple">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="light-bg pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Latest News</h2>
                        <p>This is the latest relevant news with our company.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="latest-news-wraper position-relative">
                        <div class="swiper-container news-slider">
                            <div class="swiper-wrapper">
                                <div class="single-news swiper-slide">
                                    <a class="tip" href="#">News</a>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/posts/post1.jpg" data-rjs="2" alt="">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="@php echo get_template_directory_uri();@endphp/img/authors/author1.jpg" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul>
                                    <h3 class="h5"><a href="blog-details.html">Everything you need to know to cut the cord and ditch cable to order now</a></h3>
                                    <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="single-news swiper-slide">
                                    <a class="tip" href="#">News</a>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/posts/post2.jpg" data-rjs="2" alt="">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="@php echo get_template_directory_uri();@endphp/img/authors/male.png" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul>
                                    <h3 class="h5"><a href="blog-details.html">Why the FCC's latest net neutrality defense is hollow on the flow</a></h3>
                                    <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="single-news swiper-slide">
                                    <a class="tip" href="#">News</a>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/posts/post3.jpg" data-rjs="2" alt="">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="@php echo get_template_directory_uri();@endphp/img/authors/female.png" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul>
                                    <h3 class="h5"><a href="blog-details.html">Powered Enterprise IT: Cloud implementation built for the future</a></h3>
                                    <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="single-news swiper-slide">
                                    <a class="tip" href="#">News</a>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/posts/post1.jpg" data-rjs="2" alt="">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="@php echo get_template_directory_uri();@endphp/img/authors/author1.jpg" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul>
                                    <h3 class="h5"><a href="blog-details.html">Three privacy tools that block your Internet provider from tracking your computer</a></h3>
                                    <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next next-news">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-news">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Popular Products</h2>
                        <p>The most recommended products according to our customers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-carousel-wraper position-relative">
                        <div class="swiper-container product-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/products/product1.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">Wireless security camera for personal/home use</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price">$10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <span class="discount">25% off</span>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/products/product2.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">TpLink-MR3420, 3G/4G Wireless N Router</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price"><del>$12.50</del> $10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/products/product3.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">Unlocked 4g lte Modem Aircard Sierra 320U 4G LTE</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price">$10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/products/product4.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">Micro-soft Office 365 Business Premium</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price">$10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <span class="discount">25% off</span>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/products/product5.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">TP-LINK TL-WR642G - wireless router - 802.11</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price"><del>$12.50</del> $10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <span class="discount">25% off</span>
                                    <img src="@php echo get_template_directory_uri();@endphp/img/products/product6.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">LaCie Porsche Design 32GB USB 3.0 Flash Drive</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price"><del>$12.50</del> $10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next next-product">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-product">
                            <img src="@php echo get_template_directory_uri();@endphp/img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <div class="section-title pb-0" data-animate="fadeInUp" data-delay=".1">
                        <h2>Sign Up to Newsletter</h2>
                        <p class="mb-0">Join us and receive numerous offers, raffles and endless opportunities. What are you waiting for?</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    
                    <div class="subscription-form" data-animate="fadeInUp" data-delay=".4">
                        <form class="parsley-validate" action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                            <input type="email" name="EMAIL" class="theme-input-style" placeholder="Enter your e-mail address" required>
                            <button class="btn" type="submit">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="light-bg pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="brands list-unstyled d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-0">
                        <li data-animate="fadeInUp" data-delay=".05"><img src="@php echo get_template_directory_uri();@endphp/img/brands/brand1.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".2"><img src="@php echo get_template_directory_uri();@endphp/img/brands/brand2.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".35"><img src="@php echo get_template_directory_uri();@endphp/img/brands/brand3.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".5"><img src="@php echo get_template_directory_uri();@endphp/img/brands/brand4.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".65"><img src="@php echo get_template_directory_uri();@endphp/img/brands/brand5.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".8"><img src="@php echo get_template_directory_uri();@endphp/img/brands/brand6.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    

    

    

    

{{
get_footer()
}}


