<?php
namespace Observer;

class Logger
{
    static function logIP($user, $ip, array $status)
    {
        print "Logger: $user, ip: $ip status:";
        print implode("/", $status);
        print "\n";
    }
}