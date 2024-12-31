<?php 
  /*
    The Template for displaying 404 page (not found)
  */ 
  get_header(); 
?>
   
<section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 error_page">
          
        <p>404 Error - Page Not Found</p>
        <h1>Oops! Looks Somethig was Wrong</h1>
        <div class="error_search">
            <?php get_search_form();?>

        </div>
          <a href="<?php echo home_url(); ?>" class="homepage">Homepage</a>
        </div>
        <div class="col-md-3">
        <?php get_sidebar(); ?>
        </div> 
      </div> 
    </div> 
  </section>
 
<?php get_footer(); ?>    