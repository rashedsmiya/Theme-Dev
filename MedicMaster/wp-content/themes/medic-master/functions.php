<?php 

require_once('medic-walker-navmenu.php');
require_once('inc/redux/redux-core/framework.php');
require_once('inc/redux/sample/config.php');

function medic_theme_setup(){
    add_theme_support('title-tag'); 
    
    // Main menu 
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Foooter Menu'
    ));
}
add_action('after_setup_theme', 'medic_theme_setup');

function medic_widgets(){
    
    register_sidebar(array(
        'name' => 'Footer 1 Widget',
        'id'   => 'footer_1_w', 
        'desc' => 'here set your footer widgets', 
        'before_title' => '<h6>', 
        'after_title' => '</h6>',
        'before_widget' => '<div class="col-md-4 col-sm-6 col-xs-12">', 
        'after_widget' => '</div>'
    ));
    
}
add_action('widgets_init', 'medic_widgets');


add_shortcode('medic_recent_post', 'medic_recent_function');
function medic_resect_function($atts, $content){

    $resent_atts = shotcode_arrs(array(
        'count' => 2
    ), $atts);
    extract($resent_atts);

    ?>

<div class="social-links">

            <ul>
                <?php 
                     
                $resent_post = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $atts
                ));

                while($resent_post->have_posts()): $resent_post->the_post(); 
                ?>
                 
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="<?php echo get_template_directory_uri();?>/images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h4>
                    <p><?php the_content(); ?></p>
                  </div>
                </div> 
              </li>
              <?php endwhile;wp_reset_postdata(); ?>
            </ul>
          </div>

    <?php 

} 