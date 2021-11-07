<?php
/**
 * Contains code for shortcodes.
 * @author Kiberu Sharif <sharif.kiberu@kasha.co>
 * 
 */

if ( ! class_exists( 'Football256_Shortcodes' ) ) {
    
    /**
     * Contains Plugin Functionality.
     * @version 1.0.0
     */
    class Football256_Shortcodes {

        /**
         * Class Constructor Method.
         * The gateway to the plugin. It includes the required files for the functionality.
         */
        public function __construct() {
            
        }

        /**
         * Generates current date according to wordpress configuration
         *
         * @param Array $atts
         * @param String $content
         * @return void
         */
        public function get_date_today( $atts, $content = null ) {
            extract( shortcode_atts( array( 'format' => '' ), $atts ) ); 
             
            if ( $atts['format'] == '' ) { 
                $date_time .= date( get_option( 'date_format' ) ); 
            }  else { 
                $date_time .= date( $atts['format'] ); 
            } 
            
            return $date_time;
        } 
    }

}

