<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'WP_CONTENT_DIR', '/home/sibaritico/www/laser-content' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_CONTENT_URL', 'http://sibaritico.com/laser-content' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.

/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'laseravalondb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'laserus');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'LasEr2015avaloN');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '+3+zO&hHdk#3nac3-N(xA-,).(}rD{5pRQO:vWzy7a{(a|K-Erf4 bM.)Bokq*A7');
define('SECURE_AUTH_KEY', 'v$ZRx+$|+4~+Vi8+z@Qz${vWqJ7Go< K8Z]:K2-wsUi#2%Z{Qbnr}I@g^HM:AMC,');
define('LOGGED_IN_KEY', '/p]I&`4/r!~(Ow8;x)inq-t>p6[QeoMbDAKi.afo@%>o?3fwLnJ1,3WlvI1zX B]');
define('NONCE_KEY', 'z~,w!aLL%GZ$,5/H&H,#.R+s+NSJN(w!Sr,qrG2>!o98*6cYa/z.OkpAY8`/O:`<');
define('AUTH_SALT', 'k5jC?~w~[:G5YIqZFPV(0~hkG^h(9&@(J_iIVEfHwL )(pGl4{:q0 A:%I@MmNsW');
define('SECURE_AUTH_SALT', 'wA|&5.l{Ik`ozdA|:sgSrGL>$kH]Y0J)]AZTw~H4-e&ihf? xeSPL}Kna&aZEKGs');
define('LOGGED_IN_SALT', '`;~<3fYLjDTrIRq5W9h>ZRh0vil0SR&pJPi?U6K4,|)EI?,|7c+tU:*%a|CTIg8&');
define('NONCE_SALT', 'W^%dKn7GdP`LN6Ch9nApgg;g/u0FAuj_?[[I U$d,LOJe^Q@|^{._(d(a3lB=vk_');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'o3hsd8_';


/**
 * Evitar descarga de temas por defecto.
 */
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
define( 'WP_DEFAULT_THEME', 'laseravalon' );


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'sibaritico.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/**
 * Domain Mapping
 */
define( 'SUNRISE', 'on' );


/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

