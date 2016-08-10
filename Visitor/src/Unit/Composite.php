<?php
namespace Visitor\Unit;

use Visitor\ArmyVisitor;
use Visitor\Unit;

abstract class Composite extends Unit
{
    private $units;

    public function __construct()
    {
        $this->units = new \SplObjectStorage();
        parent::__construct();
    }

    function addUnit(Unit $unit)
    {
        if (!$this->units->contains($unit)) {
            $this->units->attach($unit);
            $unit->setDepth($this->depth + 1);
        }
    }

    function removeUnit(Unit $unit)
    {
        $this->units->detach($unit);
    }

    function getComposite()
    {
        return $this;
    }

    protected function units()
    {
        return $this->units;
    }

    protected function setDepth($depth)
    {
        parent::setDepth($depth);
        foreach ($this->units as $unit) {
            $unit->setDepth($this->depth + 1);
        }
    }

    function accept(ArmyVisitor $visitor)
    {
        parent::accept($visitor);
        foreach ($this->units as $unit) {
            $unit->accept($visitor);
        }
    }
}