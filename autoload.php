<?php
require __DIR__ . '/config/config.php';

spl_autoload_register(function ($class_name) {

    // Here are the folders where my class files might be
    $paths = [
        __DIR__ . '/app/Core/' . $class_name . '.php',
        __DIR__ . '/app/Forms/' . $class_name . '.php'
    ];

    // Look in each folder. If the class file exists, include it and stop looking
    foreach ($paths as $path) {
        if (file_exists($path)) {
            require $path;
            return;
        }
    }
});

