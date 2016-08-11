<?php
namespace Command\Command;

use Command\Command;
use Command\Context;
use Command\Registry;

class Feedback extends Command
{
    function execute(Context $context)
    {
        $msgSystem = Registry::getMessageSystem();
        $email = $context->get('email');
        $msg = $context->get('msg');
        $topic = $context->get('topic');
        $result = $msgSystem->send($email, $msg, $topic);
        if (!$result) {
            $context->setError($msgSystem->getError());
            return false;
        }
        return true;
    }
}