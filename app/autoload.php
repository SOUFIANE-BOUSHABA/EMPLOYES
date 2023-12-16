<?php
session_start();
spl_autoload_register('autoload');

function autoload($class_name){
    $array_paths = array(
        'database/',
        'app/classes/',
        'models/',
        'controllers/'
    );

    $parts = explode('\\', $class_name);
    $class_name = end($parts);

    foreach ($array_paths as $path) {
        $file = $path . $class_name . '.php';
        echo "Checking path: $file<br>";  // Debug output
        if (file_exists($file)) {
            include_once $file;
            return;
        }
    }
}
