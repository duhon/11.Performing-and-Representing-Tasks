<?php
namespace Visitor;

abstract class Unit
{
    private $id = 0;

    public function __construct()
    {
        static $id = 0;
        $this->id = $id++;
    }

    function getComposite()
    {
        return null;
    }

    abstract function bombardStrength();
}