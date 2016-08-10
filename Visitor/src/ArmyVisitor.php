<?php
namespace Visitor;

use Visitor\Unit\Archer;
use Visitor\Unit\Cavalry;
use Visitor\Unit\LaserCannon;
use Visitor\Unit\Composite\TroopCarrier;
use Visitor\Unit\Composite\Army;

abstract class ArmyVisitor
{
    function visitArcher(Archer $node)
    {
        $this->visit($node);
    }

    abstract function visit(Unit $node);

    function visitCavalry(Cavalry $node)
    {
        $this->visit($node);
    }

    function visitLaserCannon(LaserCannon $node)
    {
        $this->visit($node);
    }

    function visitTroopCarrier(TroopCarrier $node)
    {
        $this->visit($node);
    }

    function visitArmy(Army $node)
    {
        $this->visit($node);
    }
}
