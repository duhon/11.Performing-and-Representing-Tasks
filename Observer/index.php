<?php
namespace Observer;

include 'bootstrap.php';

$login = new Login();

for ($x = 1; $x < 20; $x++) {
    $login->handleLogin('bob', 'myPass', '158.152.55.35');
}
/* OUTPUT
returning true
returning false
returning true
returning false
returning false
returning true
returning false
returning false
returning false
returning true
returning false
returning false
returning true
returning true
returning true
returning false
returning true
returning true
returning true
*/