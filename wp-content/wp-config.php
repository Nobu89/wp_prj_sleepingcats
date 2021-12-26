$domain = 'back.sleepingcats.it';

define('WP_SITEURL', "{$domain}/wordpress");
define('WP_HOME',"http:{$domain}");

$httpHost =  isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $domain;

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $httpHost . '/wp-content' );

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) {
    define('ABSPATH', dirname(__FILE__) . '/wordpress');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');