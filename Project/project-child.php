<?php 

    if(have_posts()) :
    while(have_posts()) : the_post();
?>

<div class="col-md-4">
<div class="blog_area">
    <div class="post_thumb">
    <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?> </a>
    </div> 
    
    <div class="post_details">
    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
    <p> <i class="fas fa-calendar-alt"></i> <?php echo the_time('D, j - F Y'); ?> 
    <span>AT</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?> </p>
    <?php the_excerpt(); ?> 
    </div>
</div>   
</div>
    
<?php 
endwhile;
else : 
    _e('No Post Found');
endif;
?>
<div id="page_nav">
    <?php if('ali_pagenav') {ali_pagenav(); } else { ?>
    <?php next_posts_link(); ?>
    <?php previous_posts_link(); ?>
    <?php } ?>
</div>