<?php get_header(); ?>

	<?php if( have_posts() ): ?>

		<div class="main-content blog-content" role="main">
		<?php get_template_part('template-part/blog', 'slider' ); ?>
		
			<div class="wrapper wrapper__blog clearfix">
			
				<h1><?php _e('El blog de la depilación laser diodo', 'byadr'); ?></h1>

			<?php while( have_posts() ):the_post(); ?>

				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'medium'); ?>



				<article id="post-<?php the_ID(); ?>" <?php post_class('column column__third'); ?>>
					<div class="post--wrapper" style="background-image: url('<?php if( has_post_thumbnail() ){ echo $thumb[0]; }else{ header_image();} ?>');" >
						<a href="<?php the_permalink(); ?>" class="post--content">
							<h2><?php the_title( ); ?></h2>		

							<p class="date"><?php the_date( ); ?></p>
							</a>

					</div>



				</article>
			<?php endwhile; ?>

			</div>
		</div>
	<?php endif; ?>


<?php get_footer(); ?>