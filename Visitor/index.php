<?php
namespace Visitor;

declare(ticks=1);
use Visitor\Unit\Composite;

include 'bootstrap.php';

$main_army = new Unit\Composite\Army();
$main_army->addUnit(new Unit\Archer());
$main_army->addUnit(new Unit\LaserCannon());
$sub_army = new Unit\Composite\Army();
$sub_army->addUnit(new Unit\Cavalry());
$main_army->addUnit($sub_army);
$main_army->addUnit(new Unit\Cavalry());

function textDump(Unit $unit, $num = 0)
{
    $txtOut = '';
    $pad = 4 * $num;
    $txtOut .= sprintf("%{$pad}s", '');
    $txtOut .= get_class($unit) . ': ';
    $txtOut .= "bombard: " . $unit->bombardStrength() . PHP_EOL;

    if ($unit->getComposite()) {
        /** @var Composite $unit */
        foreach ($unit->units() as $unit) {
            $txtOut .= textDump($unit, $num + 1);
        }
    }

    return $txtOut;
}
print textDump($main_army);

/* OUTPUT
Visitor\Unit\Composite\Army: bombard: 114
    Visitor\Unit\Archer: bombard: 4
    Visitor\Unit\LaserCannon: bombard: 44
    Visitor\Unit\Composite\Army: bombard: 33
        Visitor\Unit\Cavalry: bombard: 33
    Visitor\Unit\Cavalry: bombard: 33
*/