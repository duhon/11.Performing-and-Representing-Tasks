<?php
namespace Interpreter\Expression;

use Interpreter\Expression;
use Interpreter\Context;

class Variable extends Expression
{
    private $name;
    private $val;

    function __construct($name, $val = null)
    {
        $this->name = $name;
        $this->val = $val;
    }

    function interpret(Context $context)
    {
        if (!is_null($this->val)) {
            $context->replace($this, $this->val);
            $this->val = null;
        }
    }

    function setValue($value)
    {
        $this->val = $value;
    }

    function getKey()
    {
        return $this->name;
    }
}