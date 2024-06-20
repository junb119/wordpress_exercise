<?php get_header('single');?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if( get_field('img1') ) {?>
		<main class="content portoflio-single">
			<div class="container">
					<div class="row">
							<div class="col-md-8 decription">
									<div class="contents shadow">
										<?php if( get_field('img1') ) : ?>
											<img src="<?php the_field('img1'); ?>" alt="">
										<?php endif; ?>

										<?php if( get_field('img1_desc') ): ?>
											<p><?php the_field('img1_desc'); ?></p>
										<?php endif; ?>
									</div>
									<div class="contents shadow">
										<?php if( get_field('img2') ): ?>
											<img src="<?php the_field('img2'); ?>" alt="">
										<?php endif; ?>
										<?php if( get_field('img2_desc') ): ?>
											<p><?php the_field('img2_desc'); ?></p>
										<?php endif; ?>
									</div>
							</div>
							<div class="col-md-4 portfolio_info">
									<div class="contents shadow nav">
											<h2><?php the_title(); ?></h2>
											<div>
												<?php the_content(); ?>
											</div>
											<p class="link">
											<?php if( get_field('site') ): ?>
												<a href="<?php the_field('site'); ?>">Visit site &rarr;</a>
											<?php endif; ?>
											</p>
											<hr class="double">
											<blockquote>
											<?php if( get_field('review') ): ?>
												<p><?php the_field('review'); ?></p>
											<?php endif; ?>
											</blockquote>
											<!-- <p class="nav">
													<a href="" class="secondary-btn">&larr; Previous Project</a>
													<a href="" class="secondary-btn">Next Project &rarr;</a>
											</p> -->
											<p class="nav">
												<?php previous_post_link( '%link', __( '&larr; Previous Project', 'minimal' ), true ); ?>
												<?php next_post_link( '%link', __( 'Next Project &rarr', 'minimal' ), true ); ?> 
											</p>
									</div>
							</div>
					</div>
			</div>          
		</main>
		<div class="related_portfolio">
				<div class="container latest_portfolio">
						<h3 class="heading6">Related portfolio entries</h3>
						<div class="row list">
							<?php
								query_posts( array('category_name'  => 'portfolio','posts_per_page' => 3) );
							?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<div class="col-md-4">
											<div class="contents shadow">
												<?php
													if ( has_post_thumbnail() ) {
														the_post_thumbnail('full');
												}
												?>
													<!-- <img src="images/latest_portfolio_01.jpg" alt="latest_portfolio_01"> -->
													<div class="hover_contents">
															<div class="list_info">
																	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <img src="<?=IMAGES?>/portfolio_list_arrow.png" alt="list arrow"></h3>
																	<p><a href="<?php the_permalink(); ?>">Click to see project</a></p>
															</div>
													</div>
											</div>
									</div>
									<?php endwhile; else : ?>
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
							<?php wp_reset_query();?>
						</div>
				</div>
		</div>
		<?php } else {?>
			<main class="content">
      <div class="container shadow">
				<?php the_content();?>
			</div>
			</main>
		<?php
		}
		?>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer('common');?>






























