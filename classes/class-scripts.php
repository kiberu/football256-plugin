<?php
/**
 * Includes Css And Javascript Enqueue Scripts Class.
 * @author Kiberu Sharif <sharif.kiberu@kasha.co>
 */

if ( ! class_exists( 'Football256_Scripts' ) ) {

    /**
     * JS and CSS Scripts Class.
     * @version 1.0.0
     */
    class Football256_Scripts {

        /**
         * Constructor Function.
         * Calls the enqueue hooks for the plugin.
         */
        public function __construct() {
            $this->enqueue_hooks();
        }

        /**
         * Enqueue JS Scripts.
         *
         * @return void
         */
        public function enqueue_js_scripts() {

        
        }

        /**
         * Enqueue CSS Style Scripts.
         *
         * @return void
         */
        public function enqueue_css_styles() {

        }


        /**
         * Enqueue Script Hooks.
         *
         * @return void
         */
        public function enqueue_hooks() {
            
        }
    }

    // Instatiate the scripts class.
    $scripts = new Football256_Scripts();
}