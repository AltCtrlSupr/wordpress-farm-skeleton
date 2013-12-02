<?php
// TODO: Mirar millor localitzacio per tenir aquest arxiu
 /*** The base configurations of the WordPress. **
  ** @package WordPress */

$blog_config = $_SERVER['DOCUMENT_ROOT'].'/../wp-config.php';

// NOTE: this WordPress install is configured for multitenancy 
require_once $blog_config;

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if(!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
