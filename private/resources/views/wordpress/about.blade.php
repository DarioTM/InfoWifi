

{{ get_header() }}
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
                            <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">
                                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" data-rjs="2" alt="VPNet">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-5 col-sm-2 col-3">
                        
                        <nav>
                            
                            <div class="header-menu">
                                <ul>
                                    <li ><a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a></li>
                                    <li class="active" ><a href="<?php echo get_page_link(get_page_by_title('About')->ID)?>">About us</a></li>
                                    <!--He añadido la ruta que va hacia laravel en el nav ESTO HAY QUE QUITARLO Y PONER UNA RUTA DE WORDPRESS Alex-->
                                    <li><a href="<?php echo get_page_link(get_page_by_title('Points')->ID)?>">Access Points</a></li> 
                                    <li><a href="<?php echo get_page_link(get_page_by_title('Contact')->ID)?>">Contact</a></li>
                                    
                                </ul>
                            </div>
                            
                        </nav>

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

    <!-- Page Title -->
    <section class="page-title-wrap" data-bg-img="img/hills.jpg" data-rjs="2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title" data-animate="fadeInUp" data-delay="1.2">
                        <h2>About Us</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index-2.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">About us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->
    
    <!-- Abut Us -->
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
            <div class="row">
                <div class="col-md-4">
                    <div class="single-about-us" data-animate="fadeInUp" data-delay=".1">
                        <h3 class="h4">Our Mission</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias similique sunt in culpa qui officia deserunt mollitia quidem rerum facilis est et expedita distinctio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-about-us" data-animate="fadeInUp" data-delay=".4">
                        <h3 class="h4">Our Vission</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias similique sunt in culpa qui officia deserunt mollitia quidem rerum facilis est et expedita distinctio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-about-us" data-animate="fadeInUp" data-delay=".7">
                        <h3 class="h4">Our Ambition</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias similique sunt in culpa qui officia deserunt mollitia quidem rerum facilis est et expedita distinctio.</p>
                    </div>
                </div>
                <div class="col"  data-animate="fadeInUp" data-delay=".1">
                    <p class="pt-3 pb-5 mb-2"><strong>On the other hand, we denounce with righteous indignation and dislike men</strong> who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those <strong>who fail in their duty through weakness</strong> of will, which is the same as saying through shrinking from toil and pain.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                        <div class="single-feature-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/icons/setup.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Free Installations & Setup</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                        <div class="single-feature-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/icons/download.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Up to 1 Gpbs Download Speed</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                        <div class="single-feature-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/icons/support.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>24/7 Customer Support</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Abut Us -->

    <!-- Reviews -->
    <section class="theme-bg-overlay bg-img-xs-none pt-120 pb-120" data-bg-img="img/earth.jpg" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>What Our Client’s Say</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Review Slider -->
                    <div class="review-slider-wraper position-relative">
                        <div class="swiper-container review-slider">
                            <div class="swiper-wrapper">
                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores similique sunt in culpa qui officia deserunt</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="<?php echo get_template_directory_uri();?>/img/authors/female.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>Marie J. Campbell</strong>  Miami, USA</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->

                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores similique sunt in culpa qui officia deserunt</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="<?php echo get_template_directory_uri();?>/img/authors/male.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>John Doe</strong> Wakanda, Africa</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->

                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores similique sunt in culpa qui officia deserunt</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="<?php echo get_template_directory_uri();?>/img/authors/female.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>Marie J. Campbell</strong>  Miami, USA</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->

                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores similique sunt in culpa qui officia deserunt</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="<?php echo get_template_directory_uri();?>/img/authors/male.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>John Doe</strong> Wakanda, Africa</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->
                            </div>
                        </div>
                        
                        <!-- Arrows -->
                        <div class="swiper-button-next next-review">
                            <img src="<?php echo get_template_directory_uri();?>/img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-review">
                            <img src="<?php echo get_template_directory_uri();?>/img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                    <!-- End of Review Slider -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Reviews -->

    <!-- Subscription -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <div class="section-title pb-0" data-animate="fadeInUp" data-delay=".1">
                        <h2>Sign Up to Newsletter</h2>
                        <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <!-- Subscription form -->
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
    <!-- End of Subscription -->

    <!-- Brands -->
    <section class="light-bg pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="brands list-unstyled d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-0">
                        <li data-animate="fadeInUp" data-delay=".05"><img src="<?php echo get_template_directory_uri();?>/img/brands/brand1.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".2"><img src="<?php echo get_template_directory_uri();?>/img/brands/brand2.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".35"><img src="<?php echo get_template_directory_uri();?>/img/brands/brand3.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".5"><img src="<?php echo get_template_directory_uri();?>/img/brands/brand4.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".65"><img src="<?php echo get_template_directory_uri();?>/img/brands/brand5.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".8"><img src="<?php echo get_template_directory_uri();?>/img/brands/brand6.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Brands -->
{{ get_footer() }}