<?php 
/**************************************************************
 * Use Object-oriented components so modules are easier to write, test, and maintain, as well as share with non-WordPress applications
 * 
 * @author Rodrigo Silveira
 * @url http://www.rodrigo-silveira.com
 * @date 2013-07-09 00:07:00
 **************************************************************/

$AUTOLOAD_PATHS = array();

/**
 * Register classes paths and prefixes for autoloading
 * 
 * @param array $settings
 */
function initComponents(Array $settings) {
	global $AUTOLOAD_PATHS;
	$AUTOLOAD_PATHS = $settings;
	spl_autoload_register("rokkoAutoload");
}

/**
 * Attempt to autoload a class based on the registered paths
 * 
 * @param string $class
 */
function rokkoAutoload($class) {
	global $AUTOLOAD_PATHS;

	foreach ($AUTOLOAD_PATHS as $path => $prefix) {
		$file = str_replace($prefix, "", $class);
		$file = realpath(__DIR__)."/{$path}/{$file}.php";
		if (is_file($file)) {
			require_once($file);
		}
	}
}

/**
 * 
 */
function main() {
	initComponents(array(
			"components" => "App_Component_",
			"models" => "App_Model_"
		)
	);
}

/**
 * Init & run
 */
if (function_exists("main")) {
	main();
}