<?php

/**
 * Plugin Name: MF Slider
 * Plugin URI: www.marcosfaria.com/plugins
 * Description: Plugin para Slideshow
 * VErsion: 1.0
 * Requires at least: 6.0
 * Author: Marcos Faria
 * Author URI: www.marcosfaria.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licences/gpl-2.0.html
 * Text Domain: mf-slider
 * Domain Path: /languages
 */

 /*
MF Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
MF Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with MF Slider. If not, see https://www.gnu.org/licences/gpl-2.0.html.
*/

if( ! defined( 'ABSPATH' ) ){
    exit;
}
// Criando o método construtor da classe
if( ! class_exists( 'MF_Slider' )) {
    class MF_Slider{
        function __construct(){
            $this->define_constants(); // Referenciando e chamando o método da classe

        }
// Definindo constantes
        public function define_constants(){
           define('MF_SLIDER_PATH',  plugin_dir_path( __FILE__));
           define('MF_SLIDER_URL',  plugin_dir_url( __FILE__));
           define('MF_SLIDER_VERSION',  '1.0.0');
        }
// Ativar, Desativar e Desinstalar o plugin - campo: wp_pluginoptions
        public static function activate(){
            update_option('rewrite_rules', '');
        }
        public static function deactivate(){
            flush_rewrite_rules();
        }
        public static function uninstall(){

        }



    }
}
// Instanciando a classe
if (class_exists('MF_Slider')) {
    register_activation_hook(__FILE__, array('MF_Slider', 'activate'));
    register_deactivation_hook(__FILE__, array('MF_Slider', 'deactivate'));
    register_uninstall_hook(__FILE__, array('MF_Slider', 'uninstall'));
    $mf_slider = new MF_Slider();
}