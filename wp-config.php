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
define('DB_NAME', 'tienda');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'U[*8t?}o.ZEj:xrxZD`zkJ@VFoT00uHO g6L4}9:d{S.()5cKQCY?]g_DM&Hl+pN');
define('SECURE_AUTH_KEY', 'Op1Y@BAXF]c_r0ZREN!Vp&@L(l$i;5,vCy Rk@Brd;k3>U)6~dMPbbBgUWK@d*kF');
define('LOGGED_IN_KEY', 'NGOZw}A=!HgBo[Q$9+3 %f,c<:B`O_7U=/6~Oa2H.gdpK;cRp;7![M)yQA,-3J1R');
define('NONCE_KEY', '/ad060LU|51k{,#k?||nB;UB8^rJk?tbO4Ak`a-%w@Z g~/l-P_$b?<Im&d$kJ9v');
define('AUTH_SALT', '`9MWrE|kH>X[Y+DDE:s}ehXFdza4YAd7$aV<byQHMdEWM&R /*Gnki3meFC9egDw');
define('SECURE_AUTH_SALT', 'cGD8HqF@a){OTg*MVqk8]mG3R;cIAf8(tlQ,b5w8ED)V3<Vj&S@n5a>E4x*Zj&dM');
define('LOGGED_IN_SALT', 'Nb)4YgBG+uqAluTtW]5}E#7EHpcvDRro;,^UfQ|;P8(2GQ$+sl~<_[5rfmk+<SK#');
define('NONCE_SALT', '0M~Rk.|!&AMxe,ldxZ(z<Hl=Hw)g:o-|_Leo<,=RFqv:xY3n8Md(DrM2eOI~Nr/Y');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'mo_';


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

