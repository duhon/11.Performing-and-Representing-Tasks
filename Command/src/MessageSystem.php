<?php
namespace Command;

class MessageSystem
{
    function send($mail, $msg, $topic)
    {
        if (in_array(null, [$mail, $msg, $topic])) {
            return false;
        }
        print "sending $mail: $topic: $msg\n";
        return true;
    }

    function getError()
    {
        return 'move along now, nothing to see here';
    }
}