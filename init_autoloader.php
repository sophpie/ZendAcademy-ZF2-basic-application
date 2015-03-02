<?php

$zf2Path = false;

if (is_dir('vendor/ZF2/library')) {
    $zf2Path = __DIR__.'/vendor/ZF2/library';
} elseif (getenv('ZF2_PATH')) {      // Support for ZF2_PATH environment variable or git submodule
    $zf2Path = getenv('ZF2_PATH');
} elseif (function_exists('zend_deployment_library_path') && zend_deployment_library_path ('Zend Framework 2')) {
	$zf2Path = zend_deployment_library_path ('Zend Framework 2');
} elseif (get_cfg_var('zf2_path')) { // Support for zf2_path directive value
    $zf2Path = get_cfg_var('zf2_path');
}

if ($zf2Path) {
        include $zf2Path . '/Zend/Loader/AutoloaderFactory.php';
        Zend\Loader\AutoloaderFactory::factory(array(
            'Zend\Loader\StandardAutoloader' => array(
                'autoregister_zf' => true,
                'namespaces' => array(
        	       'Application\\' => 'src/Application/'
                ),
            )
        ));
}

if (!class_exists('Zend\Loader\AutoloaderFactory')) {
    throw new RuntimeException('Unable to load ZF2. Run `php composer.phar install` or define a ZF2_PATH environment variable.');
}
