<?php
namespace Command;

class Controller
{
    private $context;

    function __construct()
    {
        $this->context = new Context();
    }

    function getContext()
    {
        return $this->context;
    }

    function process()
    {
        $action = $this->context->get('action');
        $action = is_null($action) ? 'none' : $action;
        $cmd = Factory::getCommand($action);
        if (!$cmd->execute($this->context)) {
            // handle failure
            print '[FAIL] ' . $this->context->getError();
        } else {
            // success
            // dispatch view
            print '[SUCCESS]';
        }
    }
}