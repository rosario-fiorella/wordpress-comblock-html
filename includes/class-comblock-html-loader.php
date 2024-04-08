<?php

/**
 * @package comblock-html
 * @subpackage comblock-html/includes
 */
class Comblock_Html_Loader
{
	/**
	 * @since 1.0.0
	 * @access protected
	 * @var array $actions
	 */
	protected $actions;

	/**
	 * @since 1.0.0
	 * @access protected
	 * @var array $filters
	 */
	protected $filters;

	/**
	 * @since 1.0.0
	 * @access protected
	 * @var array $shortcode
	 */
	protected $shortcode;

	/**
	 * @since 1.0.0
	 * @access protected
	 * @var array $activation
	 */
	protected $activations;

	/**
	 * @since 1.0.0
	 * @access protected
	 * @var array $deactivation
	 */
	protected $deactivations;

	/**
	 * @since 1.0.0
	 * @access protected
	 * @var array $uninstall
	 */
	protected $uninstall;

	/**
	 * @since 1.0.0
	 */
	public function __construct()
	{
		$this->actions = [];
		$this->filters = [];
		$this->shortcode = [];
		$this->activations = [];
		$this->deactivations = [];
		$this->uninstall = [];
	}

	/**
	 * @since 1.0.0
	 * @param string $hook
	 * @param object $component
	 * @param string $callback
	 * @param int $priority
	 * @param int $accepted_args
	 */
	public function add_action($hook, $component, $callback, $priority = 10, $accepted_args = 1)
	{
		$this->actions = $this->add($this->actions, $hook, $component, $callback, $priority, $accepted_args);
	}

	/**
	 * @since 1.0.0
	 * @param string $hook
	 * @param object $component
	 * @param string $callback
	 */
	public function add_shortcode($tag, $component, $callback)
	{
		$this->shortcode[] = [
			'tag' => $tag,
			'component' => $component,
			'callback' => $callback
		];
	}

	/**
	 * @since 1.0.0
	 * @param string $file
	 * @param string|object $component
	 * @param string $callback
	 */
	public function add_activation($file, $component, $callback)
	{
		$this->activations[] = [
			'file' => $file,
			'component' => $component,
			'callback' => $callback
		];
	}

	/**
	 * @since 1.0.0
	 * @param string $file
	 * @param string|object $component
	 * @param string $callback
	 */
	public function add_deactivation($file, $component, $callback)
	{
		$this->deactivations[] = [
			'file' => $file,
			'component' => $component,
			'callback' => $callback
		];
	}

	/**
	 * @since 1.0.0
	 * @param string $file
	 * @param string|object $component
	 * @param string $callback
	 */
	public function add_uninstall($file, $component, $callback)
	{
		$this->uninstall[] = [
			'file' => $file,
			'component' => $component,
			'callback' => $callback
		];
	}

	/**
	 * @since 1.0.0
	 * @param string $hook
	 * @param object $component
	 * @param string $callback
	 * @param int $priority
	 * @param int $accepted_args
	 */
	public function add_filter($hook, $component, $callback, $priority = 10, $accepted_args = 1)
	{
		$this->filters = $this->add($this->filters, $hook, $component, $callback, $priority, $accepted_args);
	}

	/**
	 * @since 1.0.0
	 * @access private
	 * @param array $hooks
	 * @param string $hook
	 * @param object $component
	 * @param string $callback
	 * @param int $priority
	 * @param int $accepted_args
	 * @return array
	 */
	private function add($hooks, $hook, $component, $callback, $priority, $accepted_args)
	{
		$hooks[] = [
			'hook' => $hook,
			'component' => $component,
			'callback' => $callback,
			'priority' => $priority,
			'accepted_args' => $accepted_args
		];

		return $hooks;
	}

	/**
	 * @since 1.0.0
	 */
	public function run()
	{
		foreach ($this->activations as $hook) {
			register_activation_hook(
				$hook['file'],
				[
					$hook['component'],
					$hook['callback']
				]
			);
		}

		foreach ($this->deactivations as $hook) {
			register_deactivation_hook(
				$hook['file'],
				[
					$hook['component'],
					$hook['callback']
				]
			);
		}

		foreach ($this->uninstall as $hook) {
			register_uninstall_hook(
				$hook['file'],
				[
					$hook['component'],
					$hook['callback']
				]
			);
		}

		foreach ($this->filters as $hook) {
			add_filter(
				$hook['hook'],
				[
					$hook['component'], $hook['callback']
				],
				$hook['priority'],
				$hook['accepted_args']
			);
		}

		foreach ($this->actions as $hook) {
			add_action(
				$hook['hook'],
				[
					$hook['component'], $hook['callback']
				],
				$hook['priority'],
				$hook['accepted_args']
			);
		}

		foreach ($this->shortcode as $hook) {
			add_shortcode(
				$hook['tag'],
				[
					$hook['component'], $hook['callback']
				]
			);
		}
	}
}
