<?php
namespace Observer;

include 'bootstrap.php';

$login = new Login();

for ($x = 1; $x < 5; $x++) {
    $login->handleLogin('bob', 'myPass', '158.152.55.35');
}
/* OUTPUT
Logger: bob, ip: 158.152.55.35 status:2/bob/158.152.55.35
Notifier: bob, ip: 158.152.55.35 status:2/bob/158.152.55.35
Logger: bob, ip: 158.152.55.35 status:3/bob/158.152.55.35
Logger: bob, ip: 158.152.55.35 status:1/bob/158.152.55.35
Notifier: bob, ip: 158.152.55.35 status:1/bob/158.152.55.35
Logger: bob, ip: 158.152.55.35 status:1/bob/158.152.55.35
Notifier: bob, ip: 158.152.55.35 status:1/bob/158.152.55.35
*/