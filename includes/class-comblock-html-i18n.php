<?php

/**
 * @since 1.0.0
 * @package comblock-html
 * @subpackage comblock-html/includes
 */
class Comblock_Html_i18n
{
	/**
	 * @since 1.0.0
	 */
	public function load_plugin_textdomain()
	{
		load_plugin_textdomain(
			COMBLOCK_HTML_DOMAIN,
			false,
			dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
		);
	}
}
