<?php

    global $redux_demo;

?>
  
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>  
  <meta charset="<?php bloginfo('charset'); ?>">
  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
<?php wp_head();?>
</head>


<body <?php body_class();?>>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->
 

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Opening Hours : <?php echo $redux_demo['op_hr']; ?></h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <?php if($redux_demo['fb_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['fb_url'] ?>">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li> 
                        <?php endif; ?>

                        <?php if($redux_demo['tw_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['tw_url'] ?>">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <?php endif; ?>

                        <?php if($redux_demo['ge_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['ge_url'] ?>">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <?php endif; ?>

                        <?php if($redux_demo['ins_url'] != '') : ?>
                        <li>
                              <a href="<?php echo $redux_demo['ins_url'] ?>">
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
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                              <?php if($redux_demo['logo_upload']['url'] == '') :?>
                              <h3><?php echo $redux_demo['text_logo']; ?></h3>
                              <?php else: ?>
                              <img src="<?php echo $redux_demo['favicon_upload']['url'] ?>" alt="" width="130">
                              <?php endif; ?>
                        </a>  
                  </figure>
            </div> 
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="mailto:<?php echo $redux_demo['header_email']; ?>">
                                    <span><?php echo $redux_demo['header_email']; ?></span>
                              </a>
                        </li> 
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong> 
                              <br>
                              <span><?php echo $redux_demo['header_phone']; ?></span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="<?php echo $redux_demo['header_btn_url']; ?>" class="btn-style-one"><?php echo $redux_demo['header_btn']; ?></a>
                  </div>
            </div>
      </div> 
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.html">Home</a>
                        </li>
                        <li>
                              <a href="about.html">About</a>
                        </li>
                        <li>
                              <a href="service.html">Service</a>
                        </li>
                        <li>
                              <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                              <a href="team.html">Team</a>
                        </li>
                        <li>
                              <a href="appointment.html">Appointment</a>
                        </li>
                        <li>
                              <a href="blog.html">Blog</a>
                        </li>
                        <li>
                              <a href="contact.html">Contact</a>
                        </li>
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li> -->
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->
