<?php
/**
 * This file contains the EE_New_Template_Pack
 * @package      new-messages-template-pack
 * @subpackage messages
 * @since           4.5.0
 */
if ( ! defined('EVENT_ESPRESSO_VERSION')) exit('No direct script access allowed');

/**
 * This is a new template pack for the ee messages template pack system.
 *
 * @package        new-messages-template-pack
 * @subpackage  messages
 * @since            4.5.0
 * @author          Darren Ethier
 */
class  EE_Messages_Template_Pack_Name_Badge_Template_Pack extends EE_Messages_Template_Pack {

	public function _set_props() {
		$this->label = __('Name Badge Ticket', 'event_espresso');
		$this->dbref = 'name_badge_template_pack';
		$this->description = __('Namebadge ticket template', 'event_espresso');
		$this->_base_url = EE_NAMEBADGE_TP_URL . 'templates/';
		$this->_base_path = EE_NAMEBADGE_TP_PATH . 'templates/';

		$this->_supports = array(
			'html' => array(
				'ticketing'
				)
			);

		$this->_variations = array();

		//all template packs can define the default variation.  You may want to override the label that describes this default, and you do so via this property.  Indexes are the messenger you wish to override the default label for and values are the new label.
		$this->_default_variation_labels = array( 'html' => __('Hello', 'event_espresso' ) );
	}
}
