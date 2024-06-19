<?php 
  get_header(); 
  //get_header('portfolio');
?>
	<div class="main">
	
  <div id="content" class="two-thirds">
    <h2>Portfolio List</h2>
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

  </div><!-- #content-->
    

  <?php get_sidebar(); ?>

</div><!-- .main -->


<?php get_footer(); ?>
