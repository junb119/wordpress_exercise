<?php get_header('common');?>

<hr>
<main class='content'>
	<div class="container shadow">
		<ul>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<li>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
			</li>
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</ul>
	</div>
</main>
<?php get_footer('common');?>