<?php
/**
 * File contains the plugin hooks class.
 * @author Sharif Kiberu <sharif.kiberu@kasha.co>
 * 
 */

if ( ! class_exists( 'Football256_Hooks' ) ) {

    /**
     * This is a collection of all the hooks used in the plugin functionality
     * @version 1.0.0
     */
    class Football256_Hooks {

        /**
         * Class Constructor Method.
         * Calls the includes method that hold the functionality.
         * Creates class instances for the various functionalities.
         */
        public function __construct () {
            $this->includes();

            // Create class instances
            $this->action_hooks();
            $this->filter_hooks();

        }

        /**
         * Calls the class files required in the plugin.
         *
         * @return void
         */
        public function includes() {
            
        }

        /**
         * Holds the action hooks of the plugin
         *
         * @return void
         */
        public function action_hooks() {
            
        }

        /**
         * Holds the filter hooks of the plugin.
         *
         * @return void
         */
        public function filter_hooks() {
            
        }
    }    

    // Instatitate hooks class
    $hooks = new Football256_Hooks();
} 
