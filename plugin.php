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

defined( 'ABSPATH' ) || exit;

// Инициализируем класс плагина
require_once dirname( __FILE__ ) . '/includes/class-plugin.php';

// Создаем экземпляр класса плагина и запускаем его
$the_plugin = new MyPlugin();
register_activation_hook( __FILE__, array( $the_plugin, 'activate' ) );
register_deactivation_hook( __FILE__, array( $the_plugin, 'deactivate' ) );
