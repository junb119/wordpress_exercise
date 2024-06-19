<footer>
	
	<!-- the .fatfooter aside - I use this to enable a screen-wide background on the footer while still keeping the footer contents in line with the layout -->
	<aside class="fatfooter" role="complementary">
		<?php wp_nav_menu( array( 
			'theme_location' => 'Footer-menu',
			'container' => '',
			'menu_class' => 'footer-menu',
			'fallback_cb' => false
			) ); ?>
		<div class="first quarter left widget-area">
		
			<div class="widget-container">
				<h3 class="widget-title">First footer widget area</h3>
				<p>A widget area in the footer - use plugins and widgets to populate this.</p>
			</div><!-- .widget-container -->
				
		</div><!-- .first .widget-area -->

		<div class="second quarter widget-area">
		
			<div class="widget-container">
				<h3 class="widget-title">Second footer widget area</h3>
				<p>A widget area in the footer - use plugins and widgets to populate this.</p>
			</div><!-- .widget-container -->
							</div><!-- .second .widget-area -->

		<div class="third quarter widget-area">
		
			<div class="widget-container">
				<h3 class="widget-title">Third footer widget area</h3>
				<p>A widget area in the footer - use plugins and widgets to populate this.</p>
			</div><!-- .widget-container -->
							</div><!-- .third .widget-area -->

		<div class="fourth quarter right widget-area">
		
			<div class="widget-container">
				<h3 class="widget-title">Fourth footer widget area</h3>
				<p>A widget area in the footer - use plugins and widgets to populate this.</p>
			</div><!-- .widget-container -->

		</div><!-- .fourth .widget-area -->
		
	</aside><!-- #fatfooter -->

	
</footer>
	<?php wp_footer();?>
  <!-- 관리자 메뉴 출력, 자바스크립트 라이브러리 출력 -->
</body>
</html>
