<?php
/**
 * Plugin Name:       WP Plugin Welcome Page
 * Plugin URI:        https://wordpress.org/plugins/wp-plugin-activation/
 * Description:       Sample Code For Plugin Welcome Page
 * Version:           0.1
 * Author:            Varun Sridharan
 * Author URI:        http://varunsridharan.in
 * Text Domain:       wc-user-role-based-coupon
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt 
 * GitHub Plugin URI: @TODO
 */

include('class-activation.php');
$default_args = array(
			'dbslug' => 'wp_plugin_welcome',
			'welcome_slug' => 'wp-plugin-welcome-page',
			'wp_plugin_slug' => 'wp-plugin-activation',
			'wp_plugin_url' => 'http://varunsridharan.in',
			'tweet_text' => 'What A Aswome Plugin',
			'twitter_user' => 'varunsridharan2',
			'twitter_hash' => 'WPPWP',
			'gitub_user' => 'technofreaky',
			'github_repo' => 'wp-plugin-activation',
			'plugin_name' => 'WP Plugin Welcome Page',
			'version' => '0.1',
			'template' => 'page-html.php',
			'menu_name' => 'Welcome WP Plugin Welcome Page',
			'plugin_file' => __FILE__,
		);
new wp_plugin_activation_welcome_page($default_args);
 ?>