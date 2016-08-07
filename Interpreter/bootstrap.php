<?php
namespace Interpreter;

//autoload
spl_autoload_register(function ($class) {
    include str_replace(['\\', __NAMESPACE__], ['/','src'], $class) . '.php';
});