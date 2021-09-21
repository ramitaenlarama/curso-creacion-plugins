<?php 
/**
 * Plugin Name:       Frontend login    
 * Plugin URI:        https://github.com/ramitaenlarma
 * Description:       Formularios de login y registro para Yard Sales
 * Version:           1.0
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Author:            Cristian Ramanzin
 * Author URI:        https://github.com/ramitaenlarma
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       yardsale
*/

//API REST
require_once plugin_dir_path(__FILE__)."/includes/API/api-registro.php";

//Shortcodes
require_once plugin_dir_path(__FILE__)."/public/shortcode/form-registro.php";
require_once plugin_dir_path(__FILE__)."/public/shortcode/form-login.php";

