<?php
namespace Interpreter\Expression\Operator;

use Interpreter\Expression\Operator;
use Interpreter\Context;

class BooleanAnd extends Operator
{
    protected function doInterpret(
        Context $context,
        $result_l,
        $result_r
    ) {
        $context->replace($this, $result_l && $result_r);
    }
}