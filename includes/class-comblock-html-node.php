<?php

/**
 * @since 1.0.0
 * @package comblock-html
 * @subpackage comblock-html/includes
 */
class Comblock_Html_Node
{
	/**
	 * @since 1.0.0
	 * @var string $tag
	 */
	public string $tag;

	/**
	 * @since 1.0.0
	 * @var string $value
	 */
	public string $value = '';

	/**
	 * @since 1.0.0
	 * @var array<string, string> $attributes
	 */
	public array $attributes = [];

	/**
	 * @since 1.0.0
	 * @var self[] $children
	 */
	public array $children = [];

	/**
	 * @since 1.0.0
	 * @access protected
	 * @param string $tag
	 * @param string $value
	 */
	protected function __construct(string $tag, string $value)
	{
		$this->tag = esc_attr($tag);

		$this->value = esc_attr($value);
	}

	/**
	 * @since 1.0.0
	 * @static
	 * @param string $tag
	 * @param string $value
	 * @return self
	 */
	public static function tag(string $tag, string $value = ''): self
	{
		return new self($tag, $value);
	}

	/**
	 * @since 1.0.0
	 * @param string $key
	 * @param string $value
	 * @return self
	 */
	public function attr(string $key, string $value): self
	{
		$this->attributes[esc_attr($key)] = esc_attr($value);

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $key
	 * @param string $value
	 * @return self
	 */
	public function value(string $value): self
	{
		$this->value = esc_attr($value);

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param self $node
	 * @return self
	 */
	public function append(self $node): self
	{
		$this->children[] = $node;

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param self[] $node
	 * @return self
	 */
	public function add(array $nodes): self
	{
		foreach ($nodes as $node) {
			$this->append($node);
		}

		return $this;
	}
}
