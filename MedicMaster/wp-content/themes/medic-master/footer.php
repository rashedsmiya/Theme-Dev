<?php 

    global $redux_demo;

?>

<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="<?php echo $redux_demo['footer_logo']['url']; ?>" alt="">
                </a>
              </figure>
            </div>
            <p><?php echo $redux_demo['f_abt_desc']; ?></p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p><?php echo $redux_demo['f_abt_address']; ?></p>
              </li>
              <li class="item"> 
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:<?php echo $redux_demo['f_abt_phone'];?>">
                <p><?php echo $redux_demo['f_abt_email']; ?></p>
                </a>
              </li>
              <li class="item"> 
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p><?php echo $redux_demo['f_abt_phone']; ?></p>
              </li> 
            </ul>
            <ul class="list-inline social-icons">
              
            <?php if($redux_demo['tw_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['tw_url'] ?>">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
               <?php endif; ?>
              
               <?php if($redux_demo['tw_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['tw_url'] ?>">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
               <?php endif; ?>
              
               <?php if($redux_demo['tw_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['tw_url'] ?>">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
               <?php endif; ?>
              
               <?php if($redux_demo['tw_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['tw_url'] ?>">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
              <?php endif; ?>

              <?php if($redux_demo['pn_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['pn_url'] ?>">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li> 
              <?php endif; ?>
            </ul>
          </div>  
        </div> 

          <?php dynamic_sidebar('footer_1_w');?>
        
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
         <p><?php echo $redux_demo['copy_text']; ?></p>
      </div>
      
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu', 
          'menu_class' => 'footer-bottom-link'
        ));
        ?>

    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="<?php echo get_template_directory_uri();?>/plugins/jquery.js"></script>
<script src="<?php echo get_template_directory_uri();?>/plugins/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="<?php echo get_template_directory_uri();?>/plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="<?php echo get_template_directory_uri();?>/plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="<?php echo get_template_directory_uri();?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="<?php echo get_template_directory_uri();?>/plugins/google-map/gmap.js"></script>

<script src="<?php echo get_template_directory_uri();?>/plugins/validate.js"></script>
<script src="<?php echo get_template_directory_uri();?>/plugins/wow.js"></script>
<script src="<?php echo get_template_directory_uri();?>/plugins/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri();?>/plugins/timePicker.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
</body>

</html>
