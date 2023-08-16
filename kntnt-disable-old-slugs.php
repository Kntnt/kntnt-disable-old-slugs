<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disable Old Slugs
 * Plugin URI:        https://github.com/Kntnt/kntnt-disable-old-slugs
 * Description:       Prevents WordPress to store and use an old slugs of posts.
 * Version:           1.1.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || die;

remove_action( 'template_redirect', 'wp_old_slug_redirect' );
remove_action( 'post_updated', 'wp_check_for_changed_slugs', 12 );
remove_action( 'attachment_updated', 'wp_check_for_changed_slugs', 12 );
