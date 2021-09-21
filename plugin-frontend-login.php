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


function plz_test(){
    echo "<h1>Mi primer plugin</h1>";
}

add_action("wp_head","plz_test");