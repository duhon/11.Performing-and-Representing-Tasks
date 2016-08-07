<?php
namespace Interpreter;

spl_autoload_register(function ($class) {
    include str_replace(['\\', __NAMESPACE__], ['/','src'], $class) . '.php';
});

$context = new Context();
$literal = new Expression\Literal('four');
$literal->interpret($context);

print $context->lookup($literal) . PHP_EOL;