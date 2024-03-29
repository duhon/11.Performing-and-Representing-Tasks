<?php
namespace Interpreter\Expression;

use Interpreter\Expression;
use Interpreter\Context;

abstract class Operator extends Expression
{
    protected $l_op;
    protected $r_op;

    function __construct(Expression $l_op, Expression $r_op)
    {
        $this->l_op = $l_op;
        $this->r_op = $r_op;
    }

    function interpret(Context $context)
    {
        $this->l_op->interpret($context);
        $this->r_op->interpret($context);
        $result_l = $context->lookup($this->l_op);
        $result_r = $context->lookup($this->r_op);
        $this->doInterpret($context, $result_l, $result_r);
    }

    protected abstract function doInterpret(
        Context $context,
        $result_l,
        $result_r
    );
}