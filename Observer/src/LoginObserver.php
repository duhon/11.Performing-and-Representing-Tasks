<?php
namespace Observer;

abstract class LoginObserver implements \SplObserver
{
    private $login;

    function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }

    function update(\SplSubject $subject)
    {
        if ($subject === $this->login) {
            $this->doUpdate($subject);
        }
    }

    abstract function doUpdate(Login $login);
}