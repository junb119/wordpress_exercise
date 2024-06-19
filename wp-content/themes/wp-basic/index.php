<?php 
  get_header(); 
  //get_header('portfolio');
?>
	<div class="main">
	
  <div id="content" class="two-thirds">
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <?php the_content(); ?>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


  </div><!-- #content-->
    

  <?php get_sidebar(); ?>

</div><!-- .main -->


<?php get_footer(); ?>
