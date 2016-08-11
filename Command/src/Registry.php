<?php
namespace Command;

class Registry
{
    static function getMessageSystem()
    {
        return new MessageSystem();
    }

    static function getAccessManager()
    {
        return new AccessManager();
    }
}