<?php

// SCRIPTS TEMA

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('image','audio','video','link','quote','gallery'));


function add_script(){
    
    wp_register_script('jquery-min', get_template_directory_uri().'/js/jquery-3.3.1.min.js',array('jquery'),null,true);
    wp_enqueue_script('jquery-min');

    wp_register_script('bootstrap-min', get_template_directory_uri().'/js/bootstrap.bundle.min.js',array('jquery'),null,true);
    wp_enqueue_script('bootstrap-min');
    
    wp_register_script('waypoints-min', get_template_directory_uri().'/plugins/waypoints/jquery.waypoints.min.js',array('jquery'),null,true);
    wp_enqueue_script('waypoints-min');

    wp_register_script('sticky-min', get_template_directory_uri().'/plugins/waypoints/sticky.min.js',array('jquery'),null,true);
    wp_enqueue_script('sticky-min');

    wp_register_script('swiper-min', get_template_directory_uri().'/plugins/swiper/swiper.min.js',array('jquery'),null,true);
    wp_enqueue_script('swiper-min');

    wp_register_script('magnific-popup', get_template_directory_uri().'/plugins/magnific-popup/jquery.magnific-popup.min.js',array('jquery'),null,true);
    wp_enqueue_script('magnific-popup');
    
    wp_register_script('parsley-min', get_template_directory_uri().'/plugins/parsley/parsley.min.js',array('jquery'),null,true);
    wp_enqueue_script('parsley-min');    
    
    
    wp_register_script('retina-min', get_template_directory_uri().'/plugins/retinajs/retina.min.js',array('jquery'),null,true);
    wp_enqueue_script('retina-min');  
    
    wp_register_script('isotope-min', get_template_directory_uri().'/plugins/isotope/isotope.pkgd.min.js',array('jquery'),null,true);
    wp_enqueue_script('isotope-min'); 
    
    wp_register_script('menu-min', get_template_directory_uri().'/js/menu.min.js',array('jquery'),null,true);
    wp_enqueue_script('menu-min'); 
    
    wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js',array('jquery'),null,true);
    wp_enqueue_script('scripts'); 
    
    wp_register_script('custom', get_template_directory_uri().'/js/custom.js',array('jquery'),null,true);
    wp_enqueue_script('custom'); 
    
    wp_register_script('char', '/public/backend/plugins/chart.js/Chart.min.js',array('jquery'),null,true);
    wp_enqueue_script('char'); 
    
    wp_register_script('barras', get_template_directory_uri().'/js/chart/barras-wp.js',array('jquery'),null,true);
    wp_enqueue_script('barras'); 
    
    wp_register_script('circle', get_template_directory_uri().'/js/chart/circle-wp.js',array('jquery'),null,true);
    wp_enqueue_script('circle'); 
    
    wp_register_script('mapa', get_template_directory_uri().'/js/mapa/mapaPuntos.js',array('jquery'),null,true);
    wp_enqueue_script('mapa'); 
    
}



add_action('wp_enqueue_scripts', 'add_script');

// FIN SCRIPTS TEMA
