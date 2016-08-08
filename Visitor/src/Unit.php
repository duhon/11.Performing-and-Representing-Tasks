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

    function textDump($num = 0)
    {
        $txtOut = "";
        $pad = 4 * $num;
        $txtOut .= sprintf("%{$pad}s", "");
        $txtOut .= get_class($this) . ": ";
        $txtOut .= "bombard: " . $this->bombardStrength() . PHP_EOL;
        return $txtOut;
    }

    abstract function bombardStrength();
}