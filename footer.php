<?php ?>
				</section>
			</div>
		</main>
		<footer id="footer">
			<section id="footer-top-section">
				<div class="flex-columns">
					<div class="flex-column left">
						<div class="flex-column-content">
							test
						</div>
					</div>
					<div class="flex-column right">
						<div class="flex-column-content">
							<?php wp_nav_menu( array( 'container' => 'nav', 'depth' => 1, 'theme_location' => 'footer' ) ); ?>
						</div>
					</div>
				</div>
			</section>
			<section id="footer-bottom-section">
				<div class="container">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. <?php the_privacy_policy_link(); ?></p>
				</div>
			</section>
		</footer>
	</div>
	<div id="scrim"></div>
<?php wp_footer(); ?>
</body>
</html>
