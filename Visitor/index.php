<?php
namespace Visitor;

declare(ticks=1);
include 'bootstrap.php';

$mainArmy = new Unit\Composite\Army();
$mainArmy->addUnit(new Unit\Archer());
$mainArmy->addUnit(new Unit\LaserCannon());
$mainArmy->addUnit(new Unit\Cavalry());
$subArmy = new Unit\Composite\TroopCarrier();
$subArmy->addUnit(new Unit\Archer());
$mainArmy->addUnit($subArmy);

$textDump = new Visitor\TextDumpArmy();
$mainArmy->accept($textDump);
print $textDump->getText();

$taxCollector = new Visitor\TaxCollection();
$mainArmy->accept($taxCollector);
print $taxCollector->getReport();
print 'TOTAL: ' . $taxCollector->getTax();

/* OUTPUT
Visitor\Unit\Composite\Army: bombard: 81
    Visitor\Unit\Archer: bombard: 4
    Visitor\Unit\LaserCannon: bombard: 44
    Visitor\Unit\Cavalry: bombard: 33
    Visitor\Unit\Composite\TroopCarrier: bombard: 0
        Visitor\Unit\Archer: bombard: 4
Tax levied for Visitor\Unit\Composite\Army: 1
Tax levied for Visitor\Unit\Archer: 2
Tax levied for Visitor\Unit\LaserCannon: 1
Tax levied for Visitor\Unit\Cavalry: 3
Tax levied for Visitor\Unit\Composite\TroopCarrier: 5
Tax levied for Visitor\Unit\Archer: 2
TOTAL: 14
*/