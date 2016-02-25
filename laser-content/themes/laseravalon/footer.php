

<footer>
	<?php byadr_social() ?>

	<nav class="nav-menu nav-menu__footer">
		<?php wp_nav_menu( array(
			'theme_location' => 'footer-menu',
			'container' => false
		)); ?>
	</nav>

	<div class="wrapper">

		<div class="contact-footer clearfix">
			<div class="column column__third">
				<?php byadr_contacto(); ?>
			</div>
			<div class="column column__third">
				<?php byadr_direccion(); ?>
			</div>
			<div class="column column__third">
				<nav class="nav-menu nav-menu__legal">
					<?php wp_nav_menu( array(
						'theme_location' => 'legal-menu',
						'container' => false
					)); ?>
				</nav>
			</div>
		</div>
		
		<p class="copyright"><?php printf( __( 'Copyright ©%s. Todos los derechos reservados.', 'byadr' ), date( 'Y' ) ); ?></p>
	
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>