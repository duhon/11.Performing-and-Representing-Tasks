<?php
namespace Command;

class AccessManager
{
    function login($user, $pass)
    {
        return new User($user);
    }

    function getError()
    {
        return 'move along now, nothing to see here';
    }
}