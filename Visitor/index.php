<?php
namespace Visitor;

declare(ticks=1);

include 'bootstrap.php';

$main_army = new Unit\Composite\Army();
$main_army->addUnit(new Unit\Archer());
$main_army->addUnit(new Unit\LaserCannon());
$sub_army = new Unit\Composite\Army();
$sub_army->addUnit(new Unit\Cavalry());
$main_army->addUnit($sub_army);
$main_army->addUnit(new Unit\Cavalry());

print $main_army->textDump();

/* OUTPUT
Visitor\Unit\Composite\Army: bombard: 114
    Visitor\Unit\Archer: bombard: 4
    Visitor\Unit\LaserCannon: bombard: 44
    Visitor\Unit\Composite\Army: bombard: 33
        Visitor\Unit\Cavalry: bombard: 33
    Visitor\Unit\Cavalry: bombard: 33
*/