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

define("PLZ_PATH",plugin_dir_path(__FILE__));

//API REST
require_once PLZ_PATH."/includes/API/api-registro.php";
require_once PLZ_PATH."/includes/API/api-login.php";

//Shortcodes
require_once PLZ_PATH."/public/shortcode/form-registro.php";
require_once PLZ_PATH."/public/shortcode/form-login.php";


function plz_plugin_activar(){
    add_role('cliente',"Cliente","read_post");
}

register_activation_hook(__FILE__,"plz_plugin_activar");

function plz_plugin_desactivar(){
    remove_role("cliente");
}

register_deactivation_hook(__FILE__,"plz_plugin_desactivar");