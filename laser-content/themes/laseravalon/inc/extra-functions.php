<?php 

/**
 * Funciones Extras para el Theme
 *
 * 1.- Longitud del excerpt
 * 2.- Favicons & Apple Touch icons
 * 3.- Habilitamos SVG
 * 4.- Custom oEmbed Videos
 * 5.- Eliminar estilos de Galería por defecto
 * 6.- Infinite Prev/Next post looping
 * 7.- Quitar Sticky post de main_query
 *
 */


/* 1.- Longitud excerpt
–––––––––––––––––––––––––––––––––––––––––––––––––– */

if ( ! function_exists( 'byadr_excerpt_length' ) ) :

	function byadr_excerpt_length( $length ) {
		return 20;
	}

endif;

add_filter( 'excerpt_length', 'byadr_excerpt_length', 999 );


/* 2.- Favicons & Apple Touch icons
–––––––––––––––––––––––––––––––––––––––––––––––––– */

if ( ! function_exists( 'byadr_add_favicons' ) ) :

	function byadr_add_favicons(){
		?>
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/iPad-icon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/iPadRetina-icon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/iPhone-icon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/iPhoneRetina-icon.png">
		<?php
	}

endif;

add_action( 'wp_enqueue_scripts', 'byadr_add_favicons' );


/* 3.- Habilitamos tipo imagen SVG
–––––––––––––––––––––––––––––––––––––––––––––––––– */

function byadr_mime_types($mimes) {

	$mimes['svg'] = 'image/svg+xml';
	
	return $mimes;
}

add_filter('upload_mimes', 'byadr_mime_types');


/* 4.- Custom oEmbed Videos
–––––––––––––––––––––––––––––––––––––––––––––––––– */

add_filter( 'embed_oembed_html', 'byadr_custom_oembed_filter', 10, 4 ) ;

function byadr_custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<figure class="videoWrap">'.$html.'</figure>';
    return $return;
}


/* 5.- Eliminar estilos de Galería por defecto
–––––––––––––––––––––––––––––––––––––––––––––––––– */

add_filter( 'use_default_gallery_style', '__return_false' );


/* 6.- Infinite Prev/Next post looping
–––––––––––––––––––––––––––––––––––––––––––––––––– */


if( ! function_exists( 'byadr_prev_next_links' ) ){

	function byadr_prev_next_links(){

		if( is_single() ):

		$post_type = get_post_type();
		?>

		<nav class="post-navigation">
			<ul>
				<li class="post-navigation__prev">

					<?php 
					if( get_adjacent_post(false, '', true) ) :

						//previous_post_link( '%link', __('Anterior case', 'byadr') );
						previous_post_link( '%link', __('Anterior '. $post_type, 'byadr') );

					else :
						$args = array(
							'posts_per_page'=> 	1,
							'order'			=> 	'DESC',
							'post_type'		=>	$post_type,
						);
					    $first = new WP_Query($args); 

					    $first->the_post();
					    	//echo '<a href="' . get_permalink() . '">' .__('Anterior case', 'byadr'). '</a>';
					    	echo '<a href="' . get_permalink() . '">' . __('Anterior '. $post_type, 'byadr'). '</a>';

					  	wp_reset_query();

					endif; 
					?>		
				</li><!--
			 --><li class="post-navigation__next">
					<?php  

					if( get_adjacent_post(false, '', false) ) :

						next_post_link( '%link', __('Siguiente '. $post_type, 'byadr') );

					else : 

						$args = array(
							'posts_per_page'=> 	1,
							'order'			=> 	'ASC',
							'post_type'		=>	$post_type,
						);

						$last = new WP_Query($args); 
						$last->the_post();
					    	echo '<a href="' . get_permalink() . '">' .__('Siguiente '. $post_type, 'byadr'). '</a>';

					    wp_reset_query();

					endif; 
					?>
				</li>
			</ul>
		</nav>
		<?php
		endif;
	}
}

/* 7.- Quitar Sticky post de main_query
–––––––––––––––––––––––––––––––––––––––––––––––––– */

/** 
 * Snippet Name: Ignore sticky posts from the main query 
 * Snippet URL: http://www.wpcustoms.net/snippets/ignore-sticky-posts-main-query/ 
 */  
/*
function byadr_ignore_sticky($query) {

    if (is_home() && $query->is_main_query() && !$blog_slider_query) : 
        $query->set('ignore_sticky_posts', true);  
        $query->set('post__not_in', get_option('sticky_posts'));  
    endif;
}  
add_action('pre_get_posts', 'byadr_ignore_sticky'); 

*/


/* 8.- Social Share
–––––––––––––––––––––––––––––––––––––––––––––––––– */

if( ! function_exists( 'byadr_social_share' ) ){

	function byadr_social_share(){
		?>


		<ul class="social-share">
			<h4><?php _e('Compartir', 'byadr'); ?></h4>
			
			<li class="social-share__facebook">
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook." target="_blank"></a>
			</li>
			<li class="social-share__twitter">
				<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!" target="_blank"></a>
			</li>
			<li class="social-share__googleplus">
				<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a>
			</li>
		</ul>

		<?php
	}
}










