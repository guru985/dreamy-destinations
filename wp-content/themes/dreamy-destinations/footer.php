<footer class="og_main-footer--section">
	<div class="container">
		<div class="footer-logo">
			<?php if ( get_theme_mod( 'dd_logo' ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_theme_mod( 'dd_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="column">
						<section id="text-1" class="widget widget_text"><h5><?php echo get_theme_mod('footer_section_one'); ?></h5>
							<div class="text-address">
								<p><?php echo get_theme_mod('footer_section_one_content'); ?></p>
							</div>
						</section>	
					</div>
				</div>
				<div class="col-md-4">
					<div class="menu-footer">
						<h5><?php echo get_theme_mod('footer_section_two'); ?></h5>
						<?php if ( has_nav_menu( 'footer' ) ) : ?>
							<?php
							wp_nav_menu( array(
								'menu_class' => 'dd-menu--footer',
								'theme_location' => 'footer',
								'container' => '',
								'walker' => new Dd_footer_menu_Walker()
							) );
							?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-4">
					<form>
						<h5><?php echo get_theme_mod('footer_section_three'); ?></h5>
						<div class="info">
							<input type="text" placeholder="Your Name">
							<input type="email" placeholder="Your Email">
						</div>
						<input type="submit" value="Subscribe">
					</form>
				</div>
			</div>
		</div>
	</footer>
	<div class="og_bottom-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 align-self-center">
					<p>Designed by <a href="<?php echo get_theme_mod('footer_bottom_copyright_link'); ?>"><?php echo get_theme_mod('footer_bottom'); ?></a></p>
				</div>
				<div class="col-md-6 text-right">
					<ul class="social-icons">
						<li><a href="#" class="social-square"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="social-square"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" class="social-square"><i class="fa fa-github"></i></a></li>
						<li><a href="#" class="social-square"><i class="fa fa-stack-overflow"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?> 
</body>
</html>