<?php 
  get_header(); 
  //get_header('portfolio');
?>
	<div class="main">
	<h2>Search Result</h2>
  <div id="content" class="two-thirds">
  <ul>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

  <?php endwhile; else : ?>
    <span><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></span>
  <?php endif; ?>
  </ul>

  </div><!-- #content-->
    

  <?php get_sidebar(); ?>

</div><!-- .main -->


<?php get_footer(); ?>
