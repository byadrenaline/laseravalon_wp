<?php

/**
 * Shortcodes
 *
 * 1.- Botones
 * 2.- Iconos
 *
 */


/* 1.- Botones
–––––––––––––––––––––––––––––––––––––––––––––––––– */

// [boton texto="" url="" tipo="" popup=""]

add_shortcode( 'boton' , 'byadr_shortcode_boton' );

function byadr_shortcode_boton($attr){

	$attr = shortcode_atts( array(

		'texto'	=>	__('Pulsa aquí', 'byadr'),
		'url'	=>	'#',
		'popup'	=>	'',
		'tipo'	=>	'',
		), $attr, 'icono'
	);

	//
	if( isset($attr['popup']) ):
		$popup_class = 'btn--popup';
	endif; 

	// Tipo / Diseño botón
	if( isset( $attr['tipo'] ) ):
		if( $attr['tipo'] == '' ):
			$tipo_class = '';
		elseif( $attr['tipo'] == 'primario' ):
			$tipo_class = 'btn__primary';
		elseif( $attr['tipo'] == 'secundario' ):
			$tipo_class = 'btn__secondary';
		endif;
	endif;


	$boton = '<a class="btn '.$tipo_class.' '. $popup_class .'" href="'. $attr['url'] .'">' . $attr['texto'] . '</a>';

	return $boton;

}



/* 2.- Iconos Laser Avalon
–––––––––––––––––––––––––––––––––––––––––––––––––– */

// [icono tipo="" titulo=""]

add_shortcode( 'icono' , 'byadr_shortcode_icono' );

function byadr_shortcode_icono($attr){

	$attr = shortcode_atts( array(

		'tipo'	=> 'la_beauty',
		'titulo'	=> __('Belleza', 'byadr'),
		), $attr, 'icono'
	);

	$icono = '<div class="icon--item ' . $attr['tipo'] . '"><p>'.$attr['titulo'].'</p></div>';

	return $icono;


}

