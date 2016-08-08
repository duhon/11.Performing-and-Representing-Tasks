<?php
namespace Visitor\Unit\Composite;

use Visitor\Unit\Composite;
use Visitor\Unit;

class TroopCarrier extends Unit\Composite
{
    function addUnit(Unit $unit)
    {
        if ($unit instanceof Unit\Cavalry) {
            throw new Unit\Exception("Can't get a horse on the vehicle");
        }
        parent::addUnit($unit);
    }

    function bombardStrength()
    {
        return 0;
    }
}