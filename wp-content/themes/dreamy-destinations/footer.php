<footer class="og_main-footer--section">
	<div class="container">
		<div class="mo_footer-logo">
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
					<section id="text-1" class="widget widget_text"><h2 class="widget-title">Contact Info</h2>
						<div class="textwidget">
							<p>Vill-Jhikli barol, P.O-Dari, Teh.-Dharamshala, Distt.-Kangra, Pin-Code-(176057) (H.P)</p>
							<p>Mobile-Number:+911234567890</p>
							<p>E-Mail:abcd@examle.com</p>
						</div>
					</section>	
				</div>
			</div>
			<div class="col-md-4">kaka</div>
			<div class="col-md-4">kaka</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?> 
</body>
</html>