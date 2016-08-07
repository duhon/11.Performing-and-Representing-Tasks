<?php
namespace Observer;

include 'bootstrap.php';

$login = new Login();
new Observer\SecurityMonitor($login);
new Observer\GeneralLogger($login);
$pt = new Observer\PartnershipTool($login);
$login->detach($pt);
for ($x = 0; $x < 10; $x++) {
    $login->handleLogin("bob", "mypass", '158.152.55.35');
    print "\n";
}

/* OUTPUT
Observer\Observer\GeneralLogger:        add login data to log

Observer\Observer\GeneralLogger:        add login data to log

Observer\Observer\GeneralLogger:        add login data to log

Observer\Observer\GeneralLogger:        add login data to log

Observer\Observer\GeneralLogger:        sending mail to sysadmin
Observer\Observer\GeneralLogger:        add login data to log
Observer\Observer\SecurityMonitor:
Observer\Observer\GeneralLogger:        sending mail to sysadmin
Observer\Observer\GeneralLogger:        add login data to log
Observer\Observer\SecurityMonitor:      add login data to log
Observer\Observer\GeneralLogger:
*/