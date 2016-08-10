<?php
namespace Visitor;

abstract class Unit
{
    private $id = 0;
    protected $depth = 0;

    public function __construct()
    {
        static $id = 0;
        $this->id = $id++;
    }

    function getComposite()
    {
        return null;
    }

    function getDepth()
    {
        return $this->depth;
    }

    protected function setDepth($depth)
    {
        $this->depth = $depth;
    }

    abstract function bombardStrength();

    function accept(ArmyVisitor $visitor)
    {
        $method = "visit" . join('', array_slice(explode('\\', get_class($this)), -1));
        $visitor->$method($this);
    }
}