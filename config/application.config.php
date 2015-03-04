<?php
/**
 * Primary configuration file
 */
return array(
    /**
     * List of module namespaces.
     * To activate a module add its namespace in this array
     */
    'modules' => array(
    ),
    'module_listener_options' => array(
        /**
         * Where looking for modules
         */
        'module_paths' => array(
            './module',
            './vendor',
        ),
		/**
		 * Where to find secondary configuration files and how do they have to be like
		 * to be loaded.
		 */
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),

    ),
);