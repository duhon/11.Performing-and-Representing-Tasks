<?php
namespace Observer\Observer;

use Observer\Login;
use Observer\LoginObserver;

class GeneralLogger extends LoginObserver
{
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        // add login data to log
        print __CLASS__ . ":\tadd login data to log\n";
    }
}