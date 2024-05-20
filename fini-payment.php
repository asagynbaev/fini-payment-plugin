<?php
/*
 * Plugin Name:       Finipay Payment Gateway
 * Plugin URI:        https://finipay.kg/
 * Description:       Payment plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Azimbek Sagynbaev
 * License:           GPL v2 or later
 * Text Domain:       fini-payment
 */
class MyPlugin extends WP_Plugin_Base {

    /**
     * Имя плагина
     * @var string
     */
    protected $plugin_name = 'Finipay Payment';

    /**
     * Текстовый домен плагина
     * @var string
     */
    protected $plugin_text_domain = 'finipay-payment';

    /**
     * Конструктор класса
     */
    public function __construct() {
        parent::__construct();

        // Регистрируем хуки активации/деактивации плагина
        register_activation_hook( __FILE__, array( $this, 'activate' ) );
        register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );

        // ... другие методы ...
    }

    /**
     * Метод активации плагина
     */
    public function activate() {
        // Выполняется при активации плагина
        flush_rewrite_rules();
    }

    /**
     * Метод деактивации плагина
     */
    public function deactivate() {
        // Выполняется при деактивации плагина
        flush_rewrite_rules();
    }

    // ... другие методы ...
}
