

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
                                    <li><a href="<?php echo get_page_link(get_page_by_title('About')->ID)?>">About us</a></li>
                                    <!--He añadido la ruta que va hacia laravel en el nav ESTO HAY QUE QUITARLO Y PONER UNA RUTA DE WORDPRESS Alex-->
                                    <li  class="active" ><a href="<?php echo get_page_link(get_page_by_title('Points')->ID)?>">Access Points</a></li> 
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
                        <h2>Access Point</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="{{ url('/points') }}">Access Point</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->
    
    
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row align-items-center pb-4">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="<?php echo get_template_directory_uri();?>/img/access.png" alt="" data-rjs="2" style="width:60%!important">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="number-one-content" data-animate="fadeInUp" data-delay=".3">
                        <h2 class="mb-3">Secure connection from anywhere in your company.</h2>
                        <p>If your company has a warehouse and you need to be continuously connected to your central system, you will need to install certain Access Points or WiFi Antennas. Since these antennas will allow you to consult or update the information in real time and in your own central system.But if, in addition, your company has outdoor facilities, remember that it is also important at these points to have a good network with which to continue working and make your operators productive.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">

            <div class="row d-flex justify-content-between ">
       
                    <div class=" col-lg-6 single-package text-center" data-animate="fadeInUp" data-delay=".1">
                        
                        <div><h4>Most used access points</h4></div>
                        
                    
                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                        </div>
             

                     </div>
                     
                    <div class=" col-lg-5 single-package text-center" data-animate="fadeInUp" data-delay=".1">
                        
                        <div><h4>Most used models</h4></div>
                        
                    
                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                           <canvas id="donutChart" style="min-height: 300px; width: 612px;height: 300px;min-width: 300px;"></canvas>                     
                        </div>
             
                    </div>
            </div>
            

    </section>
    
<div class="mb-5" style="width:100%">
    <div class="row align-items-center pb-4">
        <div id="map" class="col-lg-12 d-none d-lg-block"></div>
    </div>
</div>
    

 
{{ get_footer()}}


