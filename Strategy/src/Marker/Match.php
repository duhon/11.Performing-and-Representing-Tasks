<?php
namespace Strategy\Marker;

use Strategy\Marker;

class Match extends Marker
{
    function mark($response)
    {
        return ($this->test == $response);
    }
}