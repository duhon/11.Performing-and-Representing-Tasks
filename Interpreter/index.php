<?php
namespace Interpreter;

use Interpreter\Expression\Operator;
use Interpreter\Expression\Variable;
use Interpreter\Expression\Literal;

include 'bootstrap.php';

$context = new Context();
$input = new Variable('input');

$statement = new Operator\BooleanOr(
    new Operator\Equals($input, new Literal('four')),
    new Operator\Equals($input, new Literal('4'))
);

foreach (array("four", "4", "52") as $val) {
    $input->setValue($val);
    print "$val:\n";
    $statement->interpret($context);
    if ($context->lookup($statement)) {
        print "top marks\n\n";
    } else {
        print "dunce hat on\n\n";
    }
}