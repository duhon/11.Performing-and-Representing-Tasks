<?php
namespace Strategy\Marker;

use Strategy\Marker;

class Logic extends Marker
{
    private $engine;

    function __construct($test)
    {
        parent::__construct($test);
//        $this->engine = new MarkParse($test);
    }

    function mark($response)
    {
//        return $this->engine->evaluate($response);
        // return fake value
        return true;
    }
}