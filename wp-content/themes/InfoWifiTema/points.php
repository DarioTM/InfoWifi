<?php
/*

    Template Name: Points

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
                            <a href="tel:+1234567890">(+1) 234-567-89001122</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>





    <!-- Footer -->
<?php
get_footer();
?>