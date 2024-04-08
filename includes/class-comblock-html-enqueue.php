<?php

/**
 * @package comblock-html
 * @subpackage comblock-html/public
 */
class Comblock_Html_Enqueue
{
	/**
	 * @since 1.0.0
	 */
	public function enqueue_styles()
	{
		wp_enqueue_style(
			COMBLOCK_HTML_DOMAIN,
			plugin_dir_url(dirname(__FILE__)) . 'static/css/comblock-html-static.css',
			[],
			COMBLOCK_HTML_VERSION,
			'all'
		);
	}

	/**
	 * @since 1.0.0
	 */
	public function enqueue_scripts()
	{
		wp_enqueue_script(
			COMBLOCK_HTML_DOMAIN,
			plugin_dir_url(dirname(__FILE__)) . 'static/js/comblock-html-static.js',
			['jquery'],
			COMBLOCK_HTML_VERSION,
			false
		);
	}
}
