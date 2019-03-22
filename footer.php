<?php ?>
		</main>
		<footer id="footer">
			<section id="footer-top-section">
				<div class="footer-column left">
					<div class="footer-container">
						test
					</div>
				</div>
				<div class="footer-column right">
					<div class="footer-container">
						<?php wp_nav_menu( array( 'container' => 'nav', 'theme_location' => 'footer' ) ); ?>
					</div>
				</div>
			</section>
			<section id="footer-bottom-section">
				<div class="container">
					<span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. <?php the_privacy_policy_link(); ?></span>
				</div>
			</section>
		</footer>
	</div>
	<div id="scrim"></div>
<?php wp_footer(); ?>
</body>
</html>
