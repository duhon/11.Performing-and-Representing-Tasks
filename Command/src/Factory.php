<?php
namespace Command;

class Factory
{
    static function getCommand($action = 'None')
    {
        if (preg_match('/\W/', $action)) {
            throw new \Exception("illegal characters in action");
        }
        $class = __NAMESPACE__ . '\\Command\\' . ucfirst(strtolower($action));

        if (!class_exists($class)) {
            throw new NotFoundException("no '$class' class located");
        }
        return new $class();
    }
}