<?php
namespace Command\Command;

use Command\Command;
use Command\Context;
use Command\Registry;

class Login extends Command
{
    function execute(Context $context)
    {
        $manager = Registry::getAccessManager();
        $name = $context->get('username');
        $pass = $context->get('pass');
        $user = $manager->login($name, $pass);
        if (is_null($user)) {
            $context->setError($manager->getError());
            return false;
        }
        $context->addParam('user', $user);
        return true;
    }
}