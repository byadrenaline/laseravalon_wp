
<?php 

	$sticky = get_option( 'sticky_posts' );
	
	$args = array(
		'post_type'			=> 'post',
		'posts_per_page'	=> 4,
		//'ignore_sticky_posts' => true,
		'post__in'			=> $sticky,
		);
	$blog_slider_query = new WP_Query( $args );
 
	if($blog_slider_query->have_posts()):

 ?>

	<section class="blog--slider slider">
		<?php while($blog_slider_query->have_posts()):$blog_slider_query->the_post(); ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'full'); ?>
			<div class="blog--slide" style="background-image: url('<?php if( has_post_thumbnail() ){ echo $thumb[0]; }else{ header_image();}?>'); ">
				<div class="claim">
					<span><?php the_title( ); ?></span>
					<div><a href="<?php the_permalink(); ?>" class="btn btn__white"><?php _e('Leer', 'byadr'); ?></a></div>
				</div>
				
			</div>
		<?php endwhile; ?>
	</section>

<?php endif; 

wp_reset_postdata();
?>