<?php
namespace Observer;

class Notifier
{
    static function mailWarning($user, $ip, array $status)
    {
        print "Notifier: $user, ip: $ip status:";
        print implode("/", $status);
        print "\n";
    }
}