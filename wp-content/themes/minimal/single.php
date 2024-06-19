<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php if( get_field('img1') ): ?>
	<img src="<?php the_field('img1'); ?>" alt="">
<?php endif; ?>
<?php if( get_field('img1_desc') ): ?>
	<p><?php the_field('img1_desc'); ?></p>
<?php endif; ?>
<?php if( get_field('img2') ): ?>
	<img src="<?php the_field('img2'); ?>" alt="">
<?php endif; ?>
<?php if( get_field('img2_desc') ): ?>
	<p><?php the_field('img2_desc'); ?></p>
<?php endif; ?>

<?php if( get_field('site') ): ?>
	<p><a href="<?php the_field('site'); ?>">Site</a></p>
<?php endif; ?>
<?php if( get_field('review') ): ?>
	<div><?php the_field('review'); ?></div>
<?php endif; ?>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();?>