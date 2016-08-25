<?php

/**
 * Plugin Name: HBS Disable Core Updates
 * Plugin URI: https://github.com/digHBS/hbs-disable-core-updates/
 * GitHub Plugin URI: https://github.com/digHBS/hbs-disable-core-updates/
 * Description: Removes the ability to update the WordPress core from the Dashboard. Should be handled via internal IT processes.
 * Version: 1.0.0
 * Author: Chris Ferdinandi
 * Author URI: http://gomakethings.com
 * License: MIT
 */


	/**
	 * Remove the "Time to Update" nag message in WordPress
	 */
	function keel_hide_core_updates_nag() {
	    remove_action( 'admin_notices', 'update_nag', 3 );
	}
	add_action( 'admin_menu', 'keel_hide_core_updates_nag' );


	/**
	 * Remove the ability to update from the Dashboard
	 */
	function keel_remove_core_updates_action() {
		?>
			<style type="text/css">
				.core-updates {
					display: none;
					visibility: hidden;
				}
			</style>
		<?php
	}
	add_action( 'admin_head', 'keel_remove_core_updates_action' );
