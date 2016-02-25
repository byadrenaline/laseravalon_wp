<?php 

/**
 *  Funciones para la página de opciones del theme
 *
 * 1.- Logo
 * 2.- Social Media
 * 3.- Contacto
 * 4.- telefono
 * 3.- Dirección ****
 *
 */

/* 1.- LOGO
–––––––––––––––––––––––––––––––––––––––––––––––––– */

if( ! function_exists( 'byadr_theme_logo' ) ){


	function byadr_theme_logo(){
		$logo = get_field('logo_theme', 'option');

		if($logo):
		?>

		<h2 class="logo">
			<a href="<?php echo home_url( ); ?>" style="background-image: url('<?php echo $logo['url']; ?>');">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h2>

		<?php
		endif;
	}
}

/* 2.- SOCIAL MEDIA
–––––––––––––––––––––––––––––––––––––––––––––––––– */


if( ! function_exists( 'byadr_social' ) ){

	function byadr_social(){
		if( have_rows('social', 'option') ): ?>
			<ul class="social-links">
			<?php while( have_rows('social', 'option')) : the_row();?>
				<?php 
				$red = get_sub_field('red_theme'); 
				$url = get_sub_field('url_theme'); 
				?>

				<li class="<?php echo 'social-' . $red; ?>">
					<a href="<?php echo $url; ?>"></a>
				</li>

			<?php endwhile; ?>
			</ul>
		<?php endif;
	}
}


/* 3.- Dirección
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( ! function_exists( 'byadr_direccion' ) ){

	function byadr_direccion(){
		$dir = get_field('direccion', 'option'); 
		$cp = get_field('codigo_postal', 'option'); 
		$loc = get_field('localidad', 'option');
		$prov = get_field('provincia', 'option');

		$maps = get_field('enlace_google_maps', 'option');

		?>

		<div class="direccion">
			<i class="la_location"></i>
			<p><?php echo $dir; ?><br><?php echo $cp . ' ' . $loc; ?><br><?php echo $prov; ?></p>
		</div>


		<?php
	}
}


/* 4.- Contacto
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( ! function_exists( 'byadr_contacto' ) ){

	function byadr_contacto(){
		$tel1 = get_field('telefono_1', 'option'); 
		$tel2 = get_field('telefono_2', 'option'); 

		$mail = get_field('email', 'option');

		?>

		<div class="telefono">
			<i class="la_phone"></i>
			<p><a href="tel:<?php echo $tel1; ?>"><?php echo $tel1; ?></a><br><a href="tel:<?php echo $tel2; ?>"><?php echo $tel2; ?></a></p>
		</div>

		<div class="email">
			<i class="la_mail"></i>
			<p><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
		</div>


		<?php
	}
}

/* 5.- Telefono
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( ! function_exists( 'byadr_phone' ) ){

	function byadr_phone(){
		$tel1 = get_field('telefono_1', 'option'); 
		$tel2 = get_field('telefono_2', 'option'); 


		?>

		<div class="phone">
			
			<p><i class="la_phone"></i><a href="tel:<?php echo $tel1; ?>"><?php echo $tel1; ?></a><span> / </span><a href="tel:<?php echo $tel2; ?>"><?php echo $tel2; ?></a></p>
		</div>


		<?php
	}
}



/* 3.- Dirección ******
–––––––––––––––––––––––––––––––––––––––––––––––––– 

if( ! function_exists( 'byadr_direccion' ) ){

	function byadr_direccion(){

		?>
		<?php if( have_rows('direcciones', 'option') ): ?>
		<div class="clearfix localizacion-module">
			<?php while( have_rows('direcciones', 'option')) : the_row();?>
				<?php 
					$dir = get_sub_field('direccion'); 
					$cp = get_sub_field('codigo_postal'); 
					$loc = get_sub_field('localidad');
					$prov = get_sub_field('provincia');

					$bg = get_sub_field('imagen');

					$maps = get_sub_field('enlace_google_maps');
				?>

			<div class="column column__half" style="background-image: url('<?php echo $bg['url']; ?>');">
				<a href="<?php echo $maps; ?>" target="_blank">
					<div class="centrar">
						<h3><?php the_sub_field('nombre'); ?></h3>
						<p><?php echo $dir . '<br>' . $cp . ' ' . $loc . '<br>' . $prov; ?></p>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>

		<?php

	}


}
*/
