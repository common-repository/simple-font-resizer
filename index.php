<?php
/*
 * Plugin Name: Simple Font Resizer
 * Plugin URI: https://wordpress.org/plugins/simple-font-resizer
 * Description: Install and click to resize your font.
 * Author: Md Shahinur Islam
 * Author URI: https://profiles.wordpress.org/shahinurislam
 * Version: 1.04
 * Text Domain: simple-font-resizer
 * Domain Path: /lang
 * Network: True
 * License: GPLv2
 * Requires at least: 5.9
 * Requires PHP: 7.4
 */
 function sfr_add_css_js(){        
    wp_enqueue_style( 'sfr_font_cs', plugin_dir_url(__FILE__) . 'assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script('sfr_font_js', plugin_dir_url(__FILE__) . 'assets/js/custom.js' , array('jquery'),'1.0.0',true);   
}add_action('wp_enqueue_scripts','sfr_add_css_js'); 
function sfr_font_shortcode() { 
ob_start();
?>
<div class="font_resizer_plus">
	<button id="btn-increase_wp_font_rp" class="btn btn-default wp_font_rp_btn" type="button">A+</button><br>
	<button id="btn-orig_wp_font_rp" class="btn btn-default wp_font_rp_btn" type="button">A</button><br>
	<button id="btn-decrease_wp_font_rp" class="btn btn-default wp_font_rp_btn" type="button">A-</button>
</div> 
<?php
return ob_get_clean();
} 
add_shortcode('sfr_font_shortcode_init', 'sfr_font_shortcode'); 
add_action('wp_footer', 'sfr_font_hook');
function sfr_font_hook(){
	echo apply_filters( 'the_content',' [sfr_font_shortcode_init] ');
};
?>
