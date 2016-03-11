<?php get_header(); ?>
	
	<div class="main-content blog-content" role="main">

		<?php get_template_part('template-part/hero' ); ?>

		<?php if( have_posts() ): while( have_posts() ):the_post(); ?>
		<div class="wrapper clearfix">
			<article id="post-<?php the_ID(); ?>" <?php post_class('column column__three-fourth'); ?> >
				
				<h1><?php the_title( ); ?></h1>
				<?php the_content( ); ?>
				
			</article>
			<aside class="column column__fourth">
				<?php byadr_social_share(); ?>
			</aside>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>