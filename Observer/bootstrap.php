<?php
namespace Observer;

//autoload
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class) . '.php';
    include preg_replace('/^' . __NAMESPACE__ . '/', 'src', $path);
});