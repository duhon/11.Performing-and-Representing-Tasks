<?php
namespace Visitor\Unit\Composite;

use Visitor\Unit\Composite;

class Army extends Composite
{
    function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units() as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}