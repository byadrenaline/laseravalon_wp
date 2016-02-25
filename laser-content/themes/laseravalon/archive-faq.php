<?php get_header(); ?>


	<?php if( have_posts() ): ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="wrapper main-content">
				<h2><?php _e('Preguntas frecuentes', 'byadr'); ?></h2>
				<h1><?php _e('Dudas sobre la depilación laser', 'byadr'); ?></h1>
			<?php while( have_posts() ):the_post(); ?>
				<dl>
					<dt>
						<?php the_title(); ?>
					</dt>
					<dd>
						<?php the_content( ); ?>
					</dd>
				</dl>

				

			<?php endwhile; ?>
			</div>
		</article>

	<?php endif; ?>


<?php get_footer(); ?>