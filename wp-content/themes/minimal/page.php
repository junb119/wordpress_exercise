<?php get_header('common');?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<hr>
<main class='content'>
	<div class="container about_content shadow">
	<?php the_content( )?>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</div>
</main>
<?php get_footer('common');?>