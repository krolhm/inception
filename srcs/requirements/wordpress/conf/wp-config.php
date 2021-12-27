<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DB' );

/** MySQL database username */
define( 'DB_USER', 'rbourgea' );

/** MySQL database password */
define( 'DB_PASSWORD', '42gamedev' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'm`6s$*,tg:ZfkBvSG|O!kIH76rd3?3.g@{saVMo<^U.a,@OGY]Wk0GM|,e/uu) D' );
define( 'SECURE_AUTH_KEY',   'd=IS=hqZ]k0aM*xZ1mU{eozY;|r{j3LG)z>>ZJs>a.MJd.fj%HL&/i@)h#qj6!YG' );
define( 'LOGGED_IN_KEY',     '!Gs>~#SoYj0%41:`cITy}lJ8gp@8wpBF`VcsI;/Luz&} :Vq$Oy([^{I4(~/,mK3' );
define( 'NONCE_KEY',         'zZ 0=@aAaEF4&x 6WIsfc%PhT+U@JaV6*@at89zFDeBxsB8ent{$9jb6:fu?c8ne' );
define( 'AUTH_SALT',         'E~=>$,yEad7tc4x6*L1*{jm6cfX}5,|[JbAk=7gri>iP`?!cp^`Ux%Okaq(ca1q)' );
define( 'SECURE_AUTH_SALT',  'P?`]n`L]t*H($*C%WXvL}@!356r}PGOM4W}Nu][A&{XxVWY:Qu-q80gEK68ZK~Eu' );
define( 'LOGGED_IN_SALT',    '_Nfp`zsO;udKI#uRKr=y5pBk~o/*_}%A2k~EhP-F(#i&z~OX}*66g/9I{tokIW<N' );
define( 'NONCE_SALT',        'NB)A 6hWgnyxNcNpj[+w{0H$R;26aa.xlOi}:^%URw0XpxgL_{a5P2EE,)=K?XPy' );
define( 'WP_CACHE_KEY_SALT', 'mY&7P{h1S$;x7>RfY$4vT;4%FsLr3B^W*^`wm6,{kRA$qG$zR[hp{Nuu0efJ<D?Q' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '42_';

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
