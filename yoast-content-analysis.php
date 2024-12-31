<?php
/**
 * Yoast Content Analysis
 * 
 * 
 * Plugin Name: Yoast Adding data to the Content Analysis
 * Plugin URI:  
 * Description: Yoast SEO: Adding data to the content analysis
 * Version:     1.0.0
 * Author: Suwash
 * Author URI:  
 * Text Domain: yoast-content-analysis
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */



 class Yoast_Content_Analysis {
 
     /**
      * Yoast_Content_Analysis constructor.
      */
     public function __construct() {
        
         // ...
         add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
     }
     
     /** 
      * Enqueues the plugin file.
      */
     public function enqueue_scripts() {
        
         wp_enqueue_script( 'wens-content-analysis-js', plugins_url( 'assets/js/customDataAnalysis.js', __FILE__ ), [], '1.', true );
     }
 
 }
 
 /** 
  * Loads the plugin.
  */
 function loadYoast_Content_Analysis() {
     new Yoast_Content_Analysis();
 }
 
 if ( ! wp_installing() ) {
     add_action( 'plugins_loaded', 'loadYoast_Content_Analysis', 20 );
 }
 