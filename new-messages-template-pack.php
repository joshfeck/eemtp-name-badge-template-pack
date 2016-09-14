<?php
/*
  Plugin Name: Event Espresso - Name Badge Template Pack Addon (EE4.6.0+)
  Plugin URI: http://www.eventespresso.com
  Description: Adds a name/conference badge ticket template. Compatible with Event Espresso 4.6 or higher and requires the Ticketing add-on.
  Version: 1.0
  Author: Event Espresso
  Author URI: http://www.eventespresso.com
  Copyright 2016 Event Espresso (email : support@eventespresso.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA02110-1301USA
 *
 * ------------------------------------------------------------------------
 *
 * Event Espresso
 *
 * Event Registration and Management Plugin for WordPress
 *
 * @ package		New Messages Template Pack Variation
 * @ author			Event Espresso
 * @ copyright	(c) 2008-2014 Event Espresso  All Rights Reserved.
 * @ license		http://eventespresso.com/support/terms-conditions/   * see Plugin Licensing *
 * @ link			http://www.eventespresso.com
 * @ version	 	4.5.0
 *
 * ------------------------------------------------------------------------
 */

define( 'EE_NAMEBADGE_TP_VERSION', '1.0' );
define( 'EE_NAMEBADGE_TP_FILE', __FILE__ );
define( 'EE_NAMEBADGE_TP_PATH', plugin_dir_path( __FILE__ ) . '/' );
define( 'EE_NAMEBADGE_TP_URL', plugin_dir_url( __FILE__ ) );

function ee_new_messages_template_pack_namebadge_load_textdomain() {
	load_plugin_textdomain( 'espresso-template-pack-namebadge', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}
add_action('plugins_loaded', 'ee_new_messages_template_pack_namebadge_load_textdomain');

function ee_new_template_pack_namebadge_register_new_variation() {
	if ( ! class_exists( 'EE_Register_Messages_Template_Pack' ) ) {
		return;
	}

	$setup = array(
		'path' => rtrim(EE_NAMEBADGE_TP_PATH, '/'),
		'classname' => 'EE_Messages_Template_Pack_Name_Badge_Template_Pack',
		);
	EE_Register_Messages_Template_Pack::register( 'ee_template_pack_namebadge', $setup );
}
add_action( 'EE_Brewing_Regular___messages_caf',  'ee_new_template_pack_namebadge_register_new_variation' );
