<?php
/**
 * Template Name: Página de Contacto
 * Description: Pagina de contacto
 */
 ?>

<?php get_header(); ?>
	<div class="main-content" role="main">
	<?php get_template_part('template-part/hero', 'contacto' ); ?>
	
	<?php if( have_posts() ): ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="wrapper">
			<?php while( have_posts() ):the_post(); ?>

				<?php byadr_layout_builder(); ?>

				<div class="clearfix">
					<div class="column column__two-thirds">
						<?php echo do_shortcode( '[contact-form-7 id="4"]' ); ?>
					</div>
					<div class="column column__third">
						<?php byadr_direccion(); ?>
						<?php byadr_contacto(); ?>

					</div>
				</div>

			<?php endwhile; ?>
			</div>
		</article>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>