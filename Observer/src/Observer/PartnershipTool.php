<?php
namespace Observer\Observer;

use Observer\Login;
use Observer\LoginObserver;

class PartnershipTool extends LoginObserver
{
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        // check $ip address
        // set cookie if it matches a list
        print __CLASS__ . ":\tset cookie if it matches a list\n";
    }
}