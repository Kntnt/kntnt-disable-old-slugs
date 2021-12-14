<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disable Old Slugs
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Prevents WordPress to use old slugs of posts
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || die;

remove_action( 'template_redirect', 'wp_old_slug_redirect' );
remove_action( 'post_updated',      'wp_check_for_changed_slugs', 12, 3 );
