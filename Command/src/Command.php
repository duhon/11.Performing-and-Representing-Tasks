<?php
namespace Command;

abstract class Command
{
    abstract function execute(Context $context);
}
