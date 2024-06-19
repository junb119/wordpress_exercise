<?php 
  get_header(); 
  //get_header('portfolio');
?>
	<div class="main">
	<h2>Front Page Template</h2>
  
  <?php echo do_shortcode('[metaslider id="69"]'); ?>


  <div id="content" class="two-thirds">
  
  <?php
  query_posts( array('category_name'  => 'portfolio','posts_per_page' => 3) );
  ?>

  <ul>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <li>
      <?php      
      if ( has_post_thumbnail() ) {
          the_post_thumbnail(array( 50, 50 ));
      }
      ?>
      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </li>

    <?php endwhile; else : ?>
      <span><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></span>
    <?php endif; ?>
    </ul>

  <?php wp_reset_query();?>
  <hr>



  </div><!-- #content-->
    

  <?php get_sidebar(); ?>

</div><!-- .main -->


<?php get_footer(); ?>
