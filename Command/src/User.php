<?php
namespace Command;

class User
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
        print "Created user: $name\n";
    }
}