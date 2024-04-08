<?php

/**
 * @since 1.0.0
 * @package comblock-html
 * @subpackage comblock-html/includes
 */
class Comblock_Html
{
    /**
     * @since 1.0.0
     * @access protected
     * @var Comblock_Html_Loader $loader
     */
    protected $loader;

    /**
     * @since 1.0.0
     * @access protected
     * @var string $comblock_html
     */
    protected $comblock_html;

    /**
     * @since 1.0.0
     * @access protected
     * @var string $version
     */
    protected $version;

    /**
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->version = COMBLOCK_HTML_VERSION;
        $this->comblock_html = COMBLOCK_HTML_DOMAIN;

        $this->load_dependencies();
        $this->set_locale();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }

    /**
     * @since 1.0.0
     * @access private
     */
    private function load_dependencies(): void
    {
        $plugin_dir_path = plugin_dir_path(__DIR__);

        require_once $plugin_dir_path . 'includes/class-comblock-html-loader.php';
        require_once $plugin_dir_path . 'includes/class-comblock-html-i18n.php';
        require_once $plugin_dir_path . 'includes/class-comblock-html-activator.php';
        require_once $plugin_dir_path . 'includes/class-comblock-html-deactivator.php';
        require_once $plugin_dir_path . 'includes/class-comblock-html-enqueue.php';
        require_once $plugin_dir_path . 'includes/class-comblock-html-node.php';
        require_once $plugin_dir_path . 'includes/class-comblock-html-render.php';
        require_once $plugin_dir_path . 'includes/class-comblock-html-helper.php';

        $this->loader = new Comblock_Html_Loader();
    }

    /**
     * @since 1.0.0
     * @access private
     */
    private function set_locale(): void
    {
        $component = new Comblock_Html_i18n();

        $this->loader->add_action('plugins_loaded', $component, 'load_plugin_textdomain');
    }

    /**
     * @since 1.0.0
     * @access private
     */
    private function define_admin_hooks(): void
    {
        $this->loader->add_activation(COMBLOCK_HTML_PLUGIN_FILE, Comblock_Html_Activator::class, 'activate');
        $this->loader->add_deactivation(COMBLOCK_HTML_PLUGIN_FILE, Comblock_Html_Deactivator::class, 'deactivate');
    }

    /**
     * @since 1.0.0
     * @access private
     */
    private function define_public_hooks(): void
    {
        $component = new Comblock_Html_Enqueue();

        $this->loader->add_action('wp_enqueue_scripts', $component, 'enqueue_styles');
        $this->loader->add_action('wp_enqueue_scripts', $component, 'enqueue_scripts');
    }

    /**
     * @since 1.0.0
     */
    public function run(): void
    {
        $this->loader->run();
    }

    /**
     * @since 1.0.0
     * @return string
     */
    public function get_comblock_html(): string
    {
        return $this->comblock_html;
    }

    /**
     * @since 1.0.0
     * @return Comblock_Html_Loader
     */
    public function get_loader(): Comblock_Html_Loader
    {
        return $this->loader;
    }

    /**
     * @since 1.0.0
     * @return string
     */
    public function get_version(): string
    {
        return $this->version;
    }
}
