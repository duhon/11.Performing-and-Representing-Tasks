<?php
namespace Command;

declare(ticks=1);
include 'bootstrap.php';

$controller = new Controller();
$context = $controller->getContext();
$context->addParam('action', 'feedback');
$controller->process();
$context->addParam('action', 'login');
$context->addParam('username', 'bob');
$context->addParam('pass', 'pass');
$controller->process();
$context->addParam('action', 'feedback');
$context->addParam('email', 'bob@bob.com');
$context->addParam('topic', 'my brain');
$context->addParam('msg', 'all about my brain');
$controller->process();

/* OUTPUT
[FAIL] move along now, nothing to see here
Created user: bob
[SUCCESS]
sending bob@bob.com: my brain: all about my brain
[SUCCESS]
*/