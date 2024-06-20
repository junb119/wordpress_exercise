<?php get_header();?>
<?php /* Template Name: Contact form */ ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2>Contact form</h2>
<?php echo apply_shortcodes( '[contact-form-7 id="c8162b9" title="Minimal-contact-form"]' ); ?>
<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();?>