<?php 

add_action('after_setup_theme','wplearntheme');

if(!function_exists('wplearntheme')){
    function wplearntheme(){

        load_theme_textdomain('learnwp',get_template_directory().'/languages');

        add_theme_support('post-thumbnails');
         
        add_action('wp_enqueue_scripts', 'mywpscritp');
        
       if(!function_exists('mywpscritp')){
        function mywpscritp(){ 
            wp_enqueue_style("bootstrap_css", get_template_directory_uri() .('/css/bootstrap.min.css'), array(), wp_get_theme()->get('Version'),'all');  
            
            wp_enqueue_style("nice_css", get_template_directory_uri() .('/css/nice-select.css'), array(),  wp_get_theme()->get('Version'),'all');
          
            wp_enqueue_style("awesome_css", get_template_directory_uri() .('/css/font-awesome.min.css'),  array(),  wp_get_theme()->get('Version'),'all');


            wp_enqueue_style("icofont_css", get_template_directory_uri() .('/css/icofont.css'),  array(), wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("slicknav_css", get_template_directory_uri() .('/css/slicknav.min.css'), array(), wp_get_theme()->get('Version'),'all');
  
            wp_enqueue_style("carousel_css", get_template_directory_uri() .('/css/owl-carousel.css'), array(),wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("carousel_css", get_template_directory_uri() .('/css/datepicker.css'), array(),  wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("carousel_css", get_template_directory_uri() .('/css/datepicker.css'), array(), wp_get_theme()->get('Version'),'all');


            wp_enqueue_style("animate_css", get_template_directory_uri() .('/css/animate.css'), array(),  wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("magnific",  get_template_directory_uri() .('/css/magnific-popup.css'), array(), wp_get_theme()->get('Version'),'all');
 
           // wp_enqueue_style("normalizes",  get_template_directory_uri() .('/css/normalize.css'), array(), wp_get_theme()->get('Version'),'all');
            
            wp_enqueue_style("style_mama", get_template_directory_uri() .('/css/style.css'), array(),
            wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("responsive", get_template_directory_uri() .('/css/responsive.css'), array(), wp_get_theme()->get('Version'),'all');
          
            wp_enqueue_style("unique_id",get_stylesheet_uri());

            // Script-JS
         
           wp_enqueue_script(  "main",  get_template_directory_uri()."js/jquery.min.js", array(), wp_get_theme()->get('Version'), true );

           wp_enqueue_script( "main", get_template_directory_uri()."js/jquery-migrate-3.0.0.js", array(), wp_get_theme()->get('Version'), true );

           wp_enqueue_script( "main", get_template_directory_uri()."js/jquery-ui.min.js", array(), wp_get_theme()->get('Version'), true );

           wp_enqueue_script( "main", get_template_directory_uri()."js/easing.js", array(), wp_get_theme()->get('Version'), true);

           wp_enqueue_script( "main", get_template_directory_uri()."js/colors.js", array(), wp_get_theme()->get('Version'), true );

           wp_enqueue_script("main", get_template_directory_uri()."js/popper.min.js", array(), wp_get_theme()->get('Version'), true ); 

           wp_enqueue_script(  "main",  get_template_directory_uri()."js/bootstrap-datepicker.js", array(), wp_get_theme()->get('Version'), true );

           wp_enqueue_script( "main", get_template_directory_uri()."js/jquery.nav.js",  array(), wp_get_theme()->get('Version'), true  ); 

           wp_enqueue_script("main",get_template_directory_uri()."js/slicknav.min.js",array(),wp_get_theme()->get('Version'),true);

           wp_enqueue_script("main",get_template_directory_uri()."js/jquery.scrollUp.min.js",array(),wp_get_theme()->get('Version'),true);

           wp_enqueue_script("main",get_template_directory_uri()."js/niceselect.js",array(),wp_get_theme()->get('Version'),true); 

           wp_enqueue_script("main",get_template_directory_uri()."js/tilt.jquery.min.js",array(),wp_get_theme()->get('Version'),true);

           wp_enqueue_script("main",get_template_directory_uri()."js/owl-carousel.js",array(),wp_get_theme()->get('Version'),true);

           wp_enqueue_script("main",get_template_directory_uri()."js/jquery.counterup.min.js",array(),wp_get_theme()->get('Version'),true);

           wp_enqueue_script("main",get_template_directory_uri()."js/steller.js",array(),wp_get_theme()->get('Version'),true);

           wp_enqueue_script("main",get_template_directory_uri()."js/wow.min.js",array(),wp_get_theme()->get('Version'),true);

           wp_enqueue_script("main",get_template_directory_uri()."js/jquery.magnific-popup.min.js",array(),wp_get_theme()->get('Version'),true);

           wp_enqueue_script("main",get_template_directory_uri()."js/bootstrap.min.js",array(),wp_get_theme()->get('Version'),true ); 

           wp_enqueue_script("main",get_template_directory_uri()."js/main.js",array(),wp_get_theme()->get('Version'),true);
         
         }
       }       
       
    }
}
