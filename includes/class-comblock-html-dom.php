<?php

/**
 * @since 1.0.0
 * @package comblock-html
 * @subpackage comblock-html/includes
 */
class Comblock_Html_Dom
{
	/**
	 * @since 1.0.0
	 */
	use Comblock_Html_Attribute;

	/**
	 * @since 1.0.0
	 */
	use Comblock_Html_Content;

	/**
	 * @since 1.0.0
	 */
	use Comblock_Html_Children;

	/**
	 * @since 1.0.0
	 * @access protected
	 * @var string $tag
	 */
	protected string $tag;

	/**
	 * @since 1.0.0
	 * @param string $tag
	 */
	public function __construct(string $tag)
	{
		$this->tag = esc_html($tag);
	}

	/**
	 * @since 1.0.0
	 * @return string
	 */
	public function get_tag(): string
	{
		return $this->tag;
	}
}
