<?php

trait Comblock_Html_Attribute
{
	/**
	 * @since 1.0.0
	 * @access protected
	 * @var array<string, string> $attributes
	 */
	protected array $attributes = [];

	/**
	 * @since 1.0.0
	 * @return array<string, string>
	 */
	public function get_attributes()
	{
		return $this->attributes;
	}

	/**
	 * @since 1.0.0
	 * @param string $name
	 * @param string $value
	 * @param bool $escape
	 * @return self
	 */
	public function attr(string $name, string $value, bool $escape = true): self
	{
		$this->attributes[esc_attr($name)] = $escape ? esc_attr($value) : $value;

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $name
	 * @param string $value
	 * @param bool $escape
	 * @return self
	 */
	public function concat(string $name, string $value, bool $escape = true): self
	{
		$this->attributes[esc_attr($name)] .= $escape ? esc_attr($value) : $value;

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $id
	 * @return self
	 */
	public function id(string $id): self
	{
		$this->attr(__FUNCTION__, esc_attr($id));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $css
	 * @return self
	 */
	public function css(string $css): self
	{
		$this->attr(__FUNCTION__, esc_html($css));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $action
	 * @return self
	 */
	public function action(string $action): self
	{
		$this->attr(__FUNCTION__, esc_url($action));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $src
	 * @return self
	 */
	public function src(string $src): self
	{
		$this->attr(__FUNCTION__, esc_url($src));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $href
	 * @return self
	 */
	public function href(string $href): self
	{
		$this->attr(__FUNCTION__, esc_url($href));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $href
	 * @return self
	 */
	public function target(string $target): self
	{
		$this->attr(__FUNCTION__, esc_attr($target));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $name
	 * @return self
	 */
	public function name(string $name): self
	{
		$this->attr(__FUNCTION__, esc_attr($name));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $onclick
	 * @return self
	 */
	public function onclick(string $js): self
	{
		$this->attr(__FUNCTION__, esc_js($js));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $value
	 * @return self
	 */
	public function value(string $value): self
	{
		$this->attr(__FUNCTION__, esc_attr($value));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $type
	 * @return self
	 */
	public function type(string $type): self
	{
		$this->attr(__FUNCTION__, esc_attr($type));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $placeholder
	 * @return self
	 */
	public function placeholder(string $placeholder): self
	{
		$this->attr(__FUNCTION__, esc_attr($placeholder));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $for
	 * @return self
	 */
	public function for(string $for): self
	{
		$this->attr(__FUNCTION__, esc_attr($for));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param int $width
	 * @return self
	 */
	public function width(int $width): self
	{
		$this->attr(__FUNCTION__, $width);

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param int $height
	 * @return self
	 */
	public function height(int $height): self
	{
		$this->attr(__FUNCTION__, $height);

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $alt
	 * @return self
	 */
	public function alt(string $alt): self
	{
		$this->attr(__FUNCTION__, esc_html($alt));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $prop
	 * @param string $value
	 * @return self
	 */
	public function style(string $property, string $value): self
	{
		$this->concat(__FUNCTION__, sprintf('%s:%s;', esc_attr($property), esc_attr($value)));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $lang
	 * @return self
	 */
	public function lang(string $lang): self
	{
		$this->attr(__FUNCTION__, esc_attr($lang));

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $title
	 * @return self
	 */
	public function title(string $title): self
	{
		$this->attr(__FUNCTION__, esc_html($title));

		return $this;
	}
}
