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
define( 'DB_NAME', 'wp' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'root' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'bKXN7S]yNQ!0r@dtzo< NAgny{DeuT3vvxp;$?A-%$L^JQz$MIM20~_f8*Z6C4QE' );
define( 'SECURE_AUTH_KEY', '10|PUI(^907S6-wtutNUdLZc,qs7PVYCDO!,U:*EO-R%ZGb7j|Q5-=OE_PlZdovz' );
define( 'LOGGED_IN_KEY', 'm(Xs@#}LyZ(:A9u*x8_!ThF|:Wki5ZL5bzhvf>3sIuYOgPMU/!Vz>GQoXShFi4WB' );
define( 'NONCE_KEY', 's2^k&/JBN@C)j<,n:mgcm:#M}P| G24~>?hgAlaG<u(T3irL ->RR%@;?vPX!(oC' );
define( 'AUTH_SALT', 'x)oejG#ncXbtfU.k7O~eT/AJguoi<f9P{*yaO)?HocT^{tApG,OM_%f+;g}7lGBB' );
define( 'SECURE_AUTH_SALT', 'R~3MdDai!T]&;5`P>3)Z~-gKDh,doPJ96V(LJfD&=T)X-rt:?rR3:+qN%%BIn_pm' );
define( 'LOGGED_IN_SALT', '-M+[>4W$w5Xj`D@!*-l$yg`p;g3O<h[fb0R[|$!^a<}OO+}`^{l~W`FMU`Xg-]Zb' );
define( 'NONCE_SALT', '_.[/Q&MRKoz`l8U`u/m(e>*#mBz<k%DFICpZUIv%O^HM.pS#;{t}S!YlSqD^>zi@' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

define('FS_METHOD','direct');