<?php
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
define('DB_NAME', 'grafixcorp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '[mShQu*hr9O.7PP4ON9|)ZtYr.xYj]>RGOJzm)j b^Gg!?BI,Ewfp<vd3|HM|OB|');
define('SECURE_AUTH_KEY', '78b/5f*=Wst%]|wU9r.^q-S4 qIyxYN^8:KED|;=k#@.7y!z=sR[>8K@&~r5$ qh');
define('LOGGED_IN_KEY', 'U;4ZUtAL~3j/~WN=|x_nbWAjrNE1H&SB8xxo@>]+D>&Vpr--W5@.%|b#H];{R-lr');
define('NONCE_KEY', 'G*4N=tBt.?(6}Ys)]|N{aI)+z>[2WscNj2{w*L^<)n,w/r_u+}a~tA#V[$v)5r|1');
define('AUTH_SALT', '-s</)^)N<+)D~>!,Kdm`+8|RbETs^@Juf9|u8wqzetXEfc[er6x-eTRk,rHXjk_D');
define('SECURE_AUTH_SALT', '-1LNH>|7p>TFyrPcRR{U!pj^:c1z`rG9A~o|orA6<m3q@tC%f?9(z+<C`V:5R^zQ');
define('LOGGED_IN_SALT', 'q[?HNH+3+l60|ULZgx+DdYb>s;j^)6*RW+$TQNgMPZ)$QK+&|,;aNl*^rE^4qDn(');
define('NONCE_SALT', 'a X24OqmoWfUQw-QN_7uJtqtx9&.Lm |V86cuhU.<um&$<?Y()zp4|@UfzkKS1-)');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

