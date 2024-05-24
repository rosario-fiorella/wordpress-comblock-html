<?php

trait Comblock_Html_Content
{
	/**
	 * @since 1.0.0
	 * @param string $value
	 */
	protected string $value = '';

	/**
	 * @since 1.0.0
	 * @param string $text
	 * @return self
	 */
	public function text(string $text): self
	{
		$this->value = esc_html($text);

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @param string $textarea
	 * @return self
	 */
	public function textarea(string $textarea): self
	{
		$this->value = esc_textarea($textarea);

		return $this;
	}

	/**
	 * @since 1.0.0
	 * @return string
	 */
	public function get_value(): string
	{
		return $this->value;
	}
}
