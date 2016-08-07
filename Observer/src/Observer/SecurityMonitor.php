<?php
namespace Observer\Observer;

use Observer\Login;
use Observer\LoginObserver;

class SecurityMonitor extends LoginObserver
{
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            // send mail to sysadmin
            print __CLASS__ . ":\tsending mail to sysadmin\n";
        }
    }
}