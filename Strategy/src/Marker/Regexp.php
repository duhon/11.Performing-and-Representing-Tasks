<?php
namespace Strategy\Marker;

use Strategy\Marker;

class Regexp extends Marker
{
    function mark($response)
    {
        return (preg_match("$this->test", $response));
    }
}