<?php
namespace Interpreter;

class Context
{
    private $expressionStore = array();

    function replace(Expression $exp, $value)
    {
        $this->expressionStore[$exp->getKey()] = $value;
    }

    function lookup(Expression $exp)
    {
        return $this->expressionStore[$exp->getKey()];
    }
}