<?php
namespace Interpreter;

include 'bootstrap.php';

$context = new Context();
$myVar = new Expression\Variable('input', 'four');
$myVar->interpret($context);
print $context->lookup($myVar) . PHP_EOL; // output: four

$newVar = new Expression\Variable('input');
$newVar->interpret($context);
print $context->lookup($newVar) . PHP_EOL; // output: four

$myVar->setValue("five");
$myVar->interpret($context);
print $context->lookup($myVar) . PHP_EOL; // output: five
print $context->lookup($newVar) . PHP_EOL; // output: five