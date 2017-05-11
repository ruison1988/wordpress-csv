<?php
$dbopts = parse_url($_ENV["DATABASE_URL"]);
$dbname = ltrim($dbopts["path"],'/');
$dbconn = pg_connect("host={$dbopts["host"]} port={$dbopts["port"]} dbname={$dbname} user={$dbopts["user"]} password={$dbopts["pass"]}");
 if($dbconn){
   echo "the database is connected";
}else{
    echo "the databse isn't connected";
}exit();
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
