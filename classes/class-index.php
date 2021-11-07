<?php
/**
 * Football 256 plugin  Index File.
 * @author Kiberu Sharif <sharif.kiberu@kasha.co>
 * 
 */

if ( ! class_exists( 'Football256_Index' ) ) {
    
    /**
     * Contains Plugin Functionality.
     * @version 1.0.0
     */
    class Football256_Index {

        /**
         * Class Constructor Method.
         * The gateway to the plugin. It includes the required files for the functionality.
         */
        public function __construct() {
            $this->includes();
        }

        
        /**
         * Plugin File Includes.
         *
         * @return void
         */
        public function includes() {
            require_once( FOOTBALL_256_PATH . 'classes/class-scripts.php' );
            require_once( FOOTBALL_256_PATH . 'classes/class-hooks.php' );
        }
    }

    // Instatiate Plugin Class.
    $loadMyDetails = new Football256_Index();

}

