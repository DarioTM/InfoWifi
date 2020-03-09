<?php
/*

    Template Name: Contact

*/
?>
<?php
get_header();
?>

    <div class="preLoader"></div>

    
    <header class="header">
        <div class="header-top" data-animate="fadeInDown" data-delay=".5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="header-info text-center text-md-left">
                            <span>Get up to 1 Gbps Download Speed on $98.50/m <a href="#">Get It Now</a></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header-top-right d-flex align-items-center justify-content-center justify-content-md-end">
                            <form class="parsley-validate d-flex position-relative" action="#">
                                <input type="text" placeholder="I am looking for" required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <div class="client-area position-relative">
                                <span id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account <i class="fa fa-caret-down"></i></span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo get_home_url();?>/infowifi/login">Sign In</a>
                                </div>
                            </div>
                            
                            <?php echo do_shortcode('[gtranslate]'); ?>
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
                        
                    <?php
                    get_template_part('nav');
                    ?>

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
    <!-- End of Main header -->

    <!-- Page Title -->
    <section class="page-title-wrap" data-bg-img="img/hills.jpg" data-rjs="2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title" data-animate="fadeInUp" data-delay="1.2">
                        <h2>Contact</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index-2.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->

    <!-- Contacts -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Map -->
                    <div class="map" data-animate="fadeInUp" data-delay=".1" data-trigger="map" data-map-options='{"latitude": "37.386052", "longitude": "-122.083851", "zoom": "15", "api_key": "AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"}'></div>
                </div>
                <div class="col-lg-4">
                    <!-- Map description -->
                    <div class="map-description light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".4">
                        <p>" At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis ntium voluptatum cupiditate non provident, lique sunt in culpa qui officia eserunt mollitia animi, id est laborum noakhalir lok fuga "</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-contacts-widget-wrapper light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".1">
                        <!-- Contact Info -->
                        <div class="page-contacts-widget">
                            <h3 class="h4">Contact Us</h3>
                            <div class="contact-widget-content">
                                <p>Sed ut perspiciatis unde omnis natus vitae dicta sunt explicabo.</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+1234567890">(+1) 234-567-890</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:serviney.demo@fakemail.com">serviney.demo@fakemail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>784/A Zirtoli Bazar, Begumgonj, Noakhali-3800, BD</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact-form parsley-validate-wrap mt-60" data-animate="fadeInUp" data-delay=".4">
                        <h3 class="bordered-title">Get In Touch</h3>
                        <div class="form-response"></div>
                        <form method="post" action="http://themelooks.net/demo/serviney/html/preview/sendmail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="name" class="theme-input-style" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="email" name="email" class="theme-input-style" placeholder="E-mail address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="phone" class="theme-input-style" placeholder="Telephone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="subject" class="theme-input-style" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-field">
                                <textarea name="message" class="theme-input-style" placeholder="Write your message" required></textarea>
                            </div>
                            <button type="submit" class="btn">Send Message</button>
                        </form>
                    </div>
                    <!-- End of Contact Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contacts -->

    <!-- Footer -->
<?php
get_footer();
?>