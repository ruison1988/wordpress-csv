<?php
$db = parse_url($_ENV["DATABASE_URL"]);
print_r($db);
echo '                DB_NAME:'. trim($db["path"],'/').'   DB_USER:'.$db["user"].'   DB_PASSWORD:'.$db["pass"].'  DB_HOST:'.$db["host"];
exit();
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
