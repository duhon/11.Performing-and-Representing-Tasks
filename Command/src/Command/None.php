<?php
namespace Command\Command;

use Command\Command;
use Command\Context;

class None extends Command
{
    function execute(Context $context)
    {
        // default command
        return true;
    }
}