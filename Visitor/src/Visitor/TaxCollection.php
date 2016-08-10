<?php
namespace Visitor\Visitor;

use Visitor\ArmyVisitor;
use Visitor\Unit;
use Visitor\Unit\Archer;
use Visitor\Unit\Cavalry;
use Visitor\Unit\Composite\TroopCarrier;

class TaxCollection extends ArmyVisitor
{
    private $due = 0;
    private $report = "";

    function visit(Unit $node)
    {
        $this->levy($node, 1);
    }

    private function levy(Unit $unit, $amount)
    {
        $this->report .= "Tax levied for " . get_class($unit);
        $this->report .= ": $amount\n";
        $this->due += $amount;
    }

    function visitArcher(Archer $node)
    {
        $this->levy($node, 2);
    }

    function visitCavalry(Cavalry $node)
    {
        $this->levy($node, 3);
    }

    function visitTroopCarrier(TroopCarrier $node)
    {
        $this->levy($node, 5);
    }

    function getReport()
    {
        return $this->report;
    }

    function getTax()
    {
        return $this->due;
    }
}