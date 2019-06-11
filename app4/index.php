<?php
use FileManager\App;
use FileManager\Files;

define('DIR', __DIR__); // sito folderio kelio konstanta

spl_autoload_register(function ($class) {
    $prefix = 'FileManager';
    $base_dir = __DIR__ . '/lib/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
          return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    if (file_exists($file)) {
        
        require $file;
    }
});



App::render();

