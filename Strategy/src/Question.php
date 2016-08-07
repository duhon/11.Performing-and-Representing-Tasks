<?php
namespace Strategy;

abstract class Question
{
    protected $prompt;
    protected $marker;

    function __construct($prompt, Marker $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    function mark($response)
    {
        return $this->marker->mark($response);
    }
}