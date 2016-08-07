<?php
namespace Interpreter\Expression;

use Interpreter\Expression;
use Interpreter\Context;

class Literal extends Expression
{
    private $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    function interpret(Context $context)
    {
        $context->replace($this, $this->value);
    }
}