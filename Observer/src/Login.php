<?php
namespace Observer;

class Login implements \SplSubject
{
    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;
    private $storage;
    private $status;

    function __construct()
    {
        $this->storage = new \SplObjectStorage();
    }

    function attach(\SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    function detach(\SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    function handleLogin($user, $pass, $ip)
    {
        $isValid = false;
        switch (rand(1, 3)) {
            case 1:
                $this->setStatus(self::LOGIN_ACCESS, $user, $ip);
                $isValid = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS, $user, $ip);
                $isValid = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
                $isValid = false;
                break;
        }
        $this->notify();
        return $isValid;
    }

    private function setStatus($status, $user, $ip)
    {
        $this->status = array($status, $user, $ip);
    }

    function notify()
    {
        foreach ($this->storage as $obs) {
            $obs->update($this);
        }
    }

    function getStatus()
    {
        return $this->status;
    }
}